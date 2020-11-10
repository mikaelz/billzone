<?php
/**
 * Class OrderToBillzoneInvoice
 *
 * Called from webhook
 * Post into https://www.billzone.eu/
 */

class OrderToBillzoneInvoice {
	const AUTH_TOKEN = 'WEBHOOK TOKEN';

	/** SANDBOX */
    const BILLZONE_SECRET = 'SECRET';
    const BILLZONE_WSDL = 'https://sandbox.billzone.eu/billgate?wsdl';

	/** LIVE */
	/* const BILLZONE_SECRET = 'SECRET'; */
	/* const BILLZONE_WSDL = 'https://billzone.eu/billgate?wsdl'; */

	public function __construct() {
		date_default_timezone_set( 'Europe/Bratislava' );

		if ( empty( $_GET['token'] ) || $_GET['token'] !== self::AUTH_TOKEN ) {
			echo 'Unauthorized';

			return;
		}

		if ( empty( $_POST['data'] ) ) {
			return;
		}

		$data = json_decode( $_POST['data'], true );
		if ( $data['status'] ) {
			$this->sendToBillzone( $data );

			return;
		}

		$this->log( var_export( [
			'error' => 'Failed to send into billzone due wrong status',
			'file' => __FILE__,
			'post' => $_POST,
		], true ) );
	}

	private function sendToBillzone( array $data ) {
        // Get from their docs archive, it has also generation code
		require_once __DIR__ . '/InvoicingService.php';
		$InvoicingService = new InvoicingService( self::BILLZONE_WSDL, [ 'trace' => 1 ] );
		$Customer = new Customer();
		$Customer->Name = trim( $data['name'] );
		$Customer->AddressPostalCode = $data['invoice_zipcode'];
		$Customer->AddressCity = trim( $data['invoice_city'] );
		$Customer->AddressCountryId = 'HU';
		$Customer->AddressLine1 = trim( $data['invoice_street'] );

		$IssuerAddress = new IssuerAddressIdentifier();
		$IssuerAddress->Identifier = 'Központ';

		$Bank = new BankIdentifier();
		$Bank->Identifier = 'WIRE';

		$CurrencyShortName = new CurrencyShortName();
		$CurrencyShortName->ShortName = 'HUF';
		$InvoiceHeader = new InvoiceHeader();
		$InvoiceHeader->IssuerAddress = $IssuerAddress;
		$InvoiceHeader->Currency = $CurrencyShortName;
		$InvoiceHeader->AccountBlockPrefix = 'E';
		$InvoiceHeader->Bank = $Bank;
		$InvoiceHeader->Customer = $Customer;
		$InvoiceHeader->FulfillmentDate = date( "Y-m-d" );
		$InvoiceHeader->PaymentDueDate = date( "Y-m-d", strtotime( '+7 days' ) );
		$InvoiceHeader->InterEUVatExempt = false;
		$InvoiceHeader->OrderNumber = $data['trid'];

		$invoiceLines = [];
		foreach ( $data['product'] as $product ) {
			$InvoiceLine = new InvoiceLine2();
			$InvoiceLine->ProductStatisticalCode = $product['pid'];
			$InvoiceLine->ProductName = $product['product'];
			$InvoiceLine->NetUnitPrice = $product['price'];
			$InvoiceLine->UnitIdentifier = 'DARAB';
			$InvoiceLine->Quantity = $product['qty'];
			$InvoiceLine->VatTaxRateCode = 'S';
			$invoiceLines[] = $InvoiceLine;
		}

		$time = time();
		$CreateInvoiceTransaction = new CreateInvoiceTransaction();
		$CreateInvoiceTransaction->TransactionId = $time;
		$CreateInvoiceTransaction->Header = $InvoiceHeader;
		$CreateInvoiceTransaction->Lines = $invoiceLines;
		$CreateInvoiceTransaction->SendInvoiceToCustomer = false;
		$CreateInvoiceRequest = new CreateInvoiceRequest();
		$CreateInvoiceRequest->CreateInvoiceTransaction = $CreateInvoiceTransaction;
		$CreateInvoiceRequest->RequestId = $time;
		$CreateInvoiceRequest->SecurityToken = self::BILLZONE_SECRET;
		$CreateInvoice = new CreateInvoice();
		$CreateInvoice->request = $CreateInvoiceRequest;

		try {
			$response = $InvoicingService->CreateInvoice( $CreateInvoice );
			$this->log( var_export( $response, true ) );
		} catch ( Exception $e ) {
			$this->log( var_export( [
				'file' => __FILE__,
				'post' => $_POST,
				'exception' => $e->getMessage(),
			], true ) );
		}
	}

	private function log( string $message ) {
		$message = sprintf( "%s - %s\n", date( 'c' ), $message );
		file_put_contents( __DIR__ . '/' . str_replace( '.php', '.txt', basename( __FILE__ ) ), $message, FILE_APPEND );
	}
}

return new OrderToBillzoneInvoice();
