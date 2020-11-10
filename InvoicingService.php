<?php

if (!class_exists("CreateInvoice")) {
/**
 * CreateInvoice
 */
class CreateInvoice {
	/**
	 * @access public
	 * @var CreateInvoiceRequest
	 */
	public $request;
}}

if (!class_exists("CreateCashReceipt")) {
/**
 * CreateCashReceipt
 */
class CreateCashReceipt {
	/**
	 * @access public
	 * @var CreateCashReceiptRequest
	 */
	public $request;
}}

if (!class_exists("ConvertExternalInvoice")) {
/**
 * ConvertExternalInvoice
 */
class ConvertExternalInvoice {
	/**
	 * @access public
	 * @var ConvertExternalInvoiceRequest
	 */
	public $request;
}}

if (!class_exists("RegisterExternalInvoice")) {
/**
 * RegisterExternalInvoice
 */
class RegisterExternalInvoice {
	/**
	 * @access public
	 * @var RegisterExternalInvoiceRequest
	 */
	public $request;
}}

if (!class_exists("DownloadInvoice")) {
/**
 * DownloadInvoice
 */
class DownloadInvoice {
	/**
	 * @access public
	 * @var DownloadInvoiceRequest
	 */
	public $request;
}}

if (!class_exists("DownloadInvoices")) {
/**
 * DownloadInvoices
 */
class DownloadInvoices {
	/**
	 * @access public
	 * @var DownloadInvoicesRequest
	 */
	public $request;
}}

if (!class_exists("GetInvoiceData")) {
/**
 * GetInvoiceData
 */
class GetInvoiceData {
	/**
	 * @access public
	 * @var GetInvoiceDataRequest
	 */
	public $request;
}}

if (!class_exists("DownloadCashReceipt")) {
/**
 * DownloadCashReceipt
 */
class DownloadCashReceipt {
	/**
	 * @access public
	 * @var DownloadCashReceiptRequest
	 */
	public $request;
}}

if (!class_exists("GetNavOnlineszamlaStatus")) {
/**
 * GetNavOnlineszamlaStatus
 */
class GetNavOnlineszamlaStatus {
	/**
	 * @access public
	 * @var GetNavOnlineszamlaStatusRequest
	 */
	public $request;
}}

if (!class_exists("ValidateNavOnlineszamlaUserData")) {
/**
 * ValidateNavOnlineszamlaUserData
 */
class ValidateNavOnlineszamlaUserData {
	/**
	 * @access public
	 * @var ValidateNavOnlineszamlaUserDataRequest
	 */
	public $request;
}}

if (!class_exists("RegisterChildCompany")) {
/**
 * RegisterChildCompany
 */
class RegisterChildCompany {
	/**
	 * @access public
	 * @var RegisterChildCompanyRequest
	 */
	public $request;
}}

if (!class_exists("RegisterCompany")) {
/**
 * RegisterCompany
 */
class RegisterCompany {
	/**
	 * @access public
	 * @var RegisterCompanyRequest
	 */
	public $request;
}}

if (!class_exists("UpdateNavOnlineszamlaSettings")) {
/**
 * UpdateNavOnlineszamlaSettings
 */
class UpdateNavOnlineszamlaSettings {
	/**
	 * @access public
	 * @var UpdateNavOnlineszamlaSettingsRequest
	 */
	public $request;
}}

if (!class_exists("SaveAccountBlock")) {
/**
 * SaveAccountBlock
 */
class SaveAccountBlock {
	/**
	 * @access public
	 * @var SaveAccountBlockRequest
	 */
	public $request;
}}

if (!class_exists("SavePaymentMethod")) {
/**
 * SavePaymentMethod
 */
class SavePaymentMethod {
	/**
	 * @access public
	 * @var SavePaymentMethodRequest
	 */
	public $request;
}}

if (!class_exists("RequestBase")) {
/**
 * RequestBase
 */
class RequestBase {
	/**
	 * @access public
	 * @var string
	 */
	public $RequestId;
	/**
	 * @access public
	 * @var string
	 */
	public $SecurityToken;
}}

if (!class_exists("ConvertExternalInvoiceRequest")) {
/**
 * ConvertExternalInvoiceRequest
 */
class ConvertExternalInvoiceRequest extends RequestBase {
	/**
	 * @access public
	 * @var ConvertExternalInvoiceTransaction
	 */
	public $ConvertExternalInvoiceTransaction;
}}

if (!class_exists("RegisterExternalInvoiceRequest")) {
/**
 * RegisterExternalInvoiceRequest
 */
class RegisterExternalInvoiceRequest extends RequestBase {
	/**
	 * @access public
	 * @var RegisterExternalInvoiceTransaction
	 */
	public $RegisterExternalInvoiceTransaction;
}}

if (!class_exists("DownloadInvoiceRequest")) {
/**
 * DownloadInvoiceRequest
 */
class DownloadInvoiceRequest extends RequestBase {
	/**
	 * @access public
	 * @var DownloadInvoiceQuery
	 */
	public $DownloadInvoiceQuery;
}}

if (!class_exists("DownloadInvoicesRequest")) {
/**
 * DownloadInvoicesRequest
 */
class DownloadInvoicesRequest extends RequestBase {
	/**
	 * @access public
	 * @var DownloadInvoicesQuery
	 */
	public $DownloadInvoicesQuery;
}}

if (!class_exists("GetInvoiceDataRequest")) {
/**
 * GetInvoiceDataRequest
 */
class GetInvoiceDataRequest extends RequestBase {
	/**
	 * @access public
	 * @var GetInvoiceDataQuery
	 */
	public $GetInvoiceDataQuery;
}}

if (!class_exists("DownloadCashReceiptRequest")) {
/**
 * DownloadCashReceiptRequest
 */
class DownloadCashReceiptRequest extends RequestBase {
	/**
	 * @access public
	 * @var DownloadCashReceiptQuery
	 */
	public $DownloadCashReceiptQuery;
}}

if (!class_exists("RegisterChildCompanyRequest")) {
/**
 * RegisterChildCompanyRequest
 */
class RegisterChildCompanyRequest extends RequestBase {
	/**
	 * @access public
	 * @var RegisterChildCompanyTransaction
	 */
	public $RegisterChildCompanyTransaction;
}}

if (!class_exists("RegisterCompanyRequest")) {
/**
 * RegisterCompanyRequest
 */
class RegisterCompanyRequest extends RequestBase {
	/**
	 * @access public
	 * @var RegisterCompanyTransaction
	 */
	public $RegisterCompanyTransaction;
}}

if (!class_exists("ValidateNavOnlineszamlaUserDataRequest")) {
/**
 * ValidateNavOnlineszamlaUserDataRequest
 */
class ValidateNavOnlineszamlaUserDataRequest extends RequestBase {
	/**
	 * @access public
	 * @var ValidateNavOnlineszamlaUserDataQuery
	 */
	public $ValidateNavOnlineszamlaUserDataQuery;
}}

if (!class_exists("UpdateNavOnlineszamlaSettingsRequest")) {
/**
 * UpdateNavOnlineszamlaSettingsRequest
 */
class UpdateNavOnlineszamlaSettingsRequest extends RequestBase {
	/**
	 * @access public
	 * @var UpdateNavOnlineszamlaSettingsTransaction
	 */
	public $UpdateNavOnlineszamlaSettingsTransaction;
}}

if (!class_exists("CreateCashReceiptRequest")) {
/**
 * CreateCashReceiptRequest
 */
class CreateCashReceiptRequest extends RequestBase {
	/**
	 * @access public
	 * @var CreateCashReceiptTransaction
	 */
	public $CreateCashReceiptTransaction;
}}

if (!class_exists("GetNavOnlineszamlaStatusRequest")) {
/**
 * GetNavOnlineszamlaStatusRequest
 */
class GetNavOnlineszamlaStatusRequest extends RequestBase {
	/**
	 * @access public
	 * @var GetNavOnlineszamlaStatusQuery
	 */
	public $GetNavOnlineszamlaStatusQuery;
}}

if (!class_exists("SaveAccountBlockRequest")) {
/**
 * SaveAccountBlockRequest
 */
class SaveAccountBlockRequest extends RequestBase {
	/**
	 * @access public
	 * @var SaveAccountBlockTransaction
	 */
	public $SaveAccountBlockTransaction;
}}

if (!class_exists("SavePaymentMethodRequest")) {
/**
 * SavePaymentMethodRequest
 */
class SavePaymentMethodRequest extends RequestBase {
	/**
	 * @access public
	 * @var SavePaymentMethodTransaction
	 */
	public $SavePaymentMethodTransaction;
}}

if (!class_exists("ResponseBase")) {
/**
 * ResponseBase
 */
class ResponseBase {
	/**
	 * @access public
	 * @var string
	 */
	public $RequestId;
	/**
	 * @access public
	 * @var ResultCode
	 */
	public $RequestResult;
}}

if (!class_exists("TransactionBase")) {
/**
 * TransactionBase
 */
class TransactionBase {
	/**
	 * @access public
	 * @var string
	 */
	public $TransactionId;
	/**
	 * @access public
	 * @var string
	 */
	public $SourceSystem;
}}

if (!class_exists("RegisterExternalInvoiceTransaction")) {
/**
 * RegisterExternalInvoiceTransaction
 */
class RegisterExternalInvoiceTransaction extends TransactionBase {
	/**
	 * @access public
	 * @var InvoiceHeaderRegisterExternal
	 */
	public $Header;
	/**
	 * @access public
	 * @var ArrayOfInvoiceLineWithAmountAndUnitText
	 */
	public $Lines;
	/**
	 * @access public
	 * @var ArrayOfRegisterExternalInvoiceVatGroup
	 */
	public $VatGroups;
	/**
	 * @access public
	 * @var string
	 */
	public $SendInvoiceToEmailAddressTemp;
	/**
	 * @access public
	 * @var ArrayOfClauseItem
	 */
	public $Clauses;
	/**
	 * @access public
	 * @var IssuerSoftwareType
	 */
	public $IssuerSoftware;
	/**
	 * @access public
	 * @var InvoiceOtherData
	 */
	public $OtherInvoiceData;
	/**
	 * @access public
	 * @var boolean
	 */
	public $TechnicalAnnulment;
	/**
	 * @access public
	 * @var string
	 */
	public $NavClientVersion;
}}

if (!class_exists("InvoiceHeaderBase")) {
/**
 * InvoiceHeaderBase
 */
class InvoiceHeaderBase {
}}

if (!class_exists("BankBase")) {
/**
 * BankBase
 */
class BankBase {
}}

if (!class_exists("DefaultBank")) {
/**
 * DefaultBank
 */
class DefaultBank extends BankBase {
	/**
	 * @access public
	 * @var string
	 */
	public $BankDescription;
}}

if (!class_exists("BankData")) {
/**
 * BankData
 */
class BankData extends BankBase {
	/**
	 * @access public
	 * @var string
	 */
	public $BankName;
	/**
	 * @access public
	 * @var string
	 */
	public $BankSwiftCode;
	/**
	 * @access public
	 * @var string
	 */
	public $BankIBan;
	/**
	 * @access public
	 * @var string
	 */
	public $BankAccountNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $BankDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $PaymentMethod;
}}

if (!class_exists("BankIdentifier")) {
/**
 * BankIdentifier
 */
class BankIdentifier extends BankBase {
	/**
	 * @access public
	 * @var string
	 */
	public $Identifier;
	/**
	 * @access public
	 * @var string
	 */
	public $BankDescription;
}}

if (!class_exists("BankIdentifierWithAccountNumber")) {
/**
 * BankIdentifierWithAccountNumber
 */
class BankIdentifierWithAccountNumber extends BankIdentifier {
	/**
	 * @access public
	 * @var string
	 */
	public $BankAccountNumber;
}}

if (!class_exists("IssuerAddressBase")) {
/**
 * IssuerAddressBase
 */
class IssuerAddressBase {
}}

if (!class_exists("IssuerAddressIdentifier")) {
/**
 * IssuerAddressIdentifier
 */
class IssuerAddressIdentifier extends IssuerAddressBase {
	/**
	 * @access public
	 * @var string
	 */
	public $Identifier;
}}

if (!class_exists("DefaultIssuerAddress")) {
/**
 * DefaultIssuerAddress
 */
class DefaultIssuerAddress extends IssuerAddressBase {
}}

if (!class_exists("IssuerAddressData")) {
/**
 * IssuerAddressData
 */
class IssuerAddressData extends IssuerAddressBase {
	/**
	 * @access public
	 * @var string
	 */
	public $AddressPostalCode;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressCountry;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressCity;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressLine1;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressLine2;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressState;
	/**
	 * @access public
	 * @var string
	 */
	public $ContactPhone;
	/**
	 * @access public
	 * @var string
	 */
	public $EmailAddress;
	/**
	 * @access public
	 * @var string
	 */
	public $WebAddress;
}}

if (!class_exists("CustomerBase")) {
/**
 * CustomerBase
 */
class CustomerBase {
}}

if (!class_exists("Customer")) {
/**
 * Customer
 */
class Customer extends CustomerBase {
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var string
	 */
	public $CustomerIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $EUTaxNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $TaxNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressPostalCode;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressCity;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressCountryId;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressLine1;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressLine2;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressState;
	/**
	 * @access public
	 * @var string
	 */
	public $GroupIdentificationNumber;
	/**
	 * @access public
	 * @var boolean
	 */
	public $HasHungarianTaxNumber;
}}

if (!class_exists("CustomerIdentifier")) {
/**
 * CustomerIdentifier
 */
class CustomerIdentifier extends CustomerBase {
	/**
	 * @access public
	 * @var string
	 */
	public $Identifier;
}}

if (!class_exists("CurrencyBase")) {
/**
 * CurrencyBase
 */
class CurrencyBase {
}}

if (!class_exists("DefaultCurrency")) {
/**
 * DefaultCurrency
 */
class DefaultCurrency extends CurrencyBase {
}}

if (!class_exists("CurrencyShortName")) {
/**
 * CurrencyShortName
 */
class CurrencyShortName extends CurrencyBase {
	/**
	 * @access public
	 * @var string
	 */
	public $ShortName;
}}

if (!class_exists("NameValueItem")) {
/**
 * NameValueItem
 */
class NameValueItem {
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var string
	 */
	public $Value;
}}

if (!class_exists("InvoiceLineBase")) {
/**
 * InvoiceLineBase
 */
class InvoiceLineBase {
}}

if (!class_exists("InvoiceLine")) {
/**
 * InvoiceLine
 */
class InvoiceLine extends InvoiceLineBase {
	/**
	 * @access public
	 * @var string
	 */
	public $ProductStatisticalCode;
	/**
	 * @access public
	 * @var string
	 */
	public $ProductName;
	/**
	 * @access public
	 * @var double
	 */
	public $NetUnitPrice;
	/**
	 * @access public
	 * @var double
	 */
	public $Quantity;
	/**
	 * @access public
	 * @var double
	 */
	public $VatPercentage;
	/**
	 * @access public
	 * @var string
	 */
	public $UnitIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $ProductTextIdentifier;
	/**
	 * @access public
	 * @var double
	 */
	public $GrossUnitPrice;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IsPeriodic;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $PeriodStartDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $PeriodEndDate;
	/**
	 * @access public
	 * @var ArrayOfClauseItem
	 */
	public $Clauses;
}}

if (!class_exists("ClauseItem")) {
/**
 * ClauseItem
 */
class ClauseItem {
	/**
	 * @access public
	 * @var string
	 */
	public $Id;
	/**
	 * @access public
	 * @var ArrayOfClauseParameterItem
	 */
	public $Parameters;
}}

if (!class_exists("ClauseParameterItemBase")) {
/**
 * ClauseParameterItemBase
 */
class ClauseParameterItemBase {
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
}}

if (!class_exists("ClauseStringParameterItem")) {
/**
 * ClauseStringParameterItem
 */
class ClauseStringParameterItem extends ClauseParameterItemBase {
	/**
	 * @access public
	 * @var string
	 */
	public $Value;
}}

if (!class_exists("ClauseDateParameterItem")) {
/**
 * ClauseDateParameterItem
 */
class ClauseDateParameterItem extends ClauseParameterItemBase {
	/**
	 * @access public
	 * @var string
	 */
	public $Value;
}}

if (!class_exists("ClauseBoolParameterItem")) {
/**
 * ClauseBoolParameterItem
 */
class ClauseBoolParameterItem extends ClauseParameterItemBase {
	/**
	 * @access public
	 * @var boolean
	 */
	public $Value;
}}

if (!class_exists("ClauseIntParameterItem")) {
/**
 * ClauseIntParameterItem
 */
class ClauseIntParameterItem extends ClauseParameterItemBase {
	/**
	 * @access public
	 * @var integer
	 */
	public $Value;
}}

if (!class_exists("ClauseDecimalParameterItem")) {
/**
 * ClauseDecimalParameterItem
 */
class ClauseDecimalParameterItem extends ClauseParameterItemBase {
	/**
	 * @access public
	 * @var double
	 */
	public $Value;
}}

if (!class_exists("InvoiceLineIdentifier")) {
/**
 * InvoiceLineIdentifier
 */
class InvoiceLineIdentifier extends InvoiceLineBase {
	/**
	 * @access public
	 * @var string
	 */
	public $Identifier;
	/**
	 * @access public
	 * @var double
	 */
	public $Quantity;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IsPeriodic;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $PeriodStartDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $PeriodEndDate;
	/**
	 * @access public
	 * @var ArrayOfClauseItem
	 */
	public $Clauses;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceLineNote;
	/**
	 * @access public
	 * @var integer
	 */
	public $GroupIndex;
}}

if (!class_exists("OtherInvoiceLineData")) {
/**
 * OtherInvoiceLineData
 */
class OtherInvoiceLineData {
	/**
	 * @access public
	 * @var integer
	 */
	public $LineNumber;
	/**
	 * @access public
	 * @var integer
	 */
	public $LineNumberReference;
	/**
	 * @access public
	 * @var LineDiscountData
	 */
	public $DiscountData;
	/**
	 * @access public
	 * @var string
	 */
	public $UnitOfMeasureType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $LineExpressionIndicator;
}}

if (!class_exists("LineDiscountData")) {
/**
 * LineDiscountData
 */
class LineDiscountData {
	/**
	 * @access public
	 * @var string
	 */
	public $DiscountDescription;
	/**
	 * @access public
	 * @var double
	 */
	public $DiscountValue;
	/**
	 * @access public
	 * @var double
	 */
	public $DiscountRate;
}}

if (!class_exists("InvoiceVatGroup")) {
/**
 * InvoiceVatGroup
 */
class InvoiceVatGroup {
	/**
	 * @access public
	 * @var string
	 */
	public $VatTaxRateCode;
	/**
	 * @access public
	 * @var double
	 */
	public $VatAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $NetAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $GrossAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $LocalVatAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $LocalGrossAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $LocalNetAmount;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $FulfillmentDate;
	/**
	 * @access public
	 * @var double
	 */
	public $LocalForeignCurrencyExchangeRate;
}}

if (!class_exists("IssuerSoftwareType")) {
/**
 * IssuerSoftwareType
 */
class IssuerSoftwareType {
	/**
	 * @access public
	 * @var string
	 */
	public $SoftwareId;
	/**
	 * @access public
	 * @var string
	 */
	public $SoftwareName;
	/**
	 * @access public
	 * @var string
	 */
	public $SoftwareOperation;
	/**
	 * @access public
	 * @var string
	 */
	public $SoftwareMainVersion;
	/**
	 * @access public
	 * @var string
	 */
	public $SoftwareDevName;
	/**
	 * @access public
	 * @var string
	 */
	public $SoftwareDevContact;
	/**
	 * @access public
	 * @var string
	 */
	public $SoftwareDevCountryCode;
	/**
	 * @access public
	 * @var string
	 */
	public $SoftwareDevTaxNumber;
}}

if (!class_exists("InvoiceOtherData")) {
/**
 * InvoiceOtherData
 */
class InvoiceOtherData {
	/**
	 * @access public
	 * @var boolean
	 */
	public $ModifyWithoutMaster;
	/**
	 * @access public
	 * @var string
	 */
	public $LastModificationReference;
	/**
	 * @access public
	 * @var integer
	 */
	public $ModificationIndex;
}}

if (!class_exists("CreateInvoiceTransaction")) {
/**
 * CreateInvoiceTransaction
 */
class CreateInvoiceTransaction extends TransactionBase {
	/**
	 * @access public
	 * @var InvoiceHeaderBase
	 */
	public $Header;
	/**
	 * @access public
	 * @var ArrayOfInvoiceLine
	 */
	public $Lines;
	/**
	 * @access public
	 * @var boolean
	 */
	public $SendInvoiceToCustomer;
	/**
	 * @access public
	 * @var string
	 */
	public $SendInvoiceToEmailAddress;
	/**
	 * @access public
	 * @var integer
	 */
	public $InvoiceCourierTypeId;
	/**
	 * @access public
	 * @var ArrayOfClauseItem
	 */
	public $Clauses;
	/**
	 * @access public
	 * @var ArrayOfAttachmentItem
	 */
	public $Attachments;
	/**
	 * @access public
	 * @var boolean
	 */
	public $UseCurrencyExchangeRateService;
	/**
	 * @access public
	 * @var ArrayOfInvoiceLineGroup
	 */
	public $LineGroups;
}}

if (!class_exists("AttachmentItem")) {
/**
 * AttachmentItem
 */
class AttachmentItem {
	/**
	 * @access public
	 * @var string
	 */
	public $FileName;
	/**
	 * @access public
	 * @var base64Binary
	 */
	public $FileContent;
}}

if (!class_exists("InvoiceLineGroup")) {
/**
 * InvoiceLineGroup
 */
class InvoiceLineGroup {
	/**
	 * @access public
	 * @var integer
	 */
	public $GroupIndex;
	/**
	 * @access public
	 * @var ArrayOfNameValueItem
	 */
	public $CustomData;
}}

if (!class_exists("CreateCashReceiptTransaction")) {
/**
 * CreateCashReceiptTransaction
 */
class CreateCashReceiptTransaction extends TransactionBase {
	/**
	 * @access public
	 * @var PaymentBase
	 */
	public $Payment;
	/**
	 * @access public
	 * @var CashReceiptHeaderBase
	 */
	public $CashReceiptHeader;
}}

if (!class_exists("PaymentBase")) {
/**
 * PaymentBase
 */
class PaymentBase {
}}

if (!class_exists("AllocatedPayment")) {
/**
 * AllocatedPayment
 */
class AllocatedPayment extends PaymentBase {
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $PaymentDate;
	/**
	 * @access public
	 * @var string
	 */
	public $BankIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $Description;
}}

if (!class_exists("UnallocatedPayment")) {
/**
 * UnallocatedPayment
 */
class UnallocatedPayment extends PaymentBase {
	/**
	 * @access public
	 * @var string
	 */
	public $PaymentDate;
	/**
	 * @access public
	 * @var double
	 */
	public $PaymentTotal;
	/**
	 * @access public
	 * @var CurrencyShortName
	 */
	public $Currency;
	/**
	 * @access public
	 * @var CustomerIdentifier
	 */
	public $Customer;
	/**
	 * @access public
	 * @var string
	 */
	public $BankIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $Description;
}}

if (!class_exists("CashReceiptHeaderBase")) {
/**
 * CashReceiptHeaderBase
 */
class CashReceiptHeaderBase {
}}

if (!class_exists("CashReceiptHeader")) {
/**
 * CashReceiptHeader
 */
class CashReceiptHeader extends CashReceiptHeaderBase {
	/**
	 * @access public
	 * @var string
	 */
	public $CreatorName;
	/**
	 * @access public
	 * @var string
	 */
	public $CashierName;
	/**
	 * @access public
	 * @var string
	 */
	public $ContributorName;
	/**
	 * @access public
	 * @var string
	 */
	public $ContributorDocument;
	/**
	 * @access public
	 * @var string
	 */
	public $CashReceiptBlockPrefix;
	/**
	 * @access public
	 * @var string
	 */
	public $Description;
}}

if (!class_exists("RegisterChildCompanyTransaction")) {
/**
 * RegisterChildCompanyTransaction
 */
class RegisterChildCompanyTransaction extends TransactionBase {
	/**
	 * @access public
	 * @var RegisterCompanyData
	 */
	public $CompanyData;
	/**
	 * @access public
	 * @var RegisterCompanyContactData
	 */
	public $ContactData;
	/**
	 * @access public
	 * @var NavOnlineSzamlaSettingsData
	 */
	public $NavOnlineSzamlaSettings;
	/**
	 * @access public
	 * @var IntegrationSettingsData
	 */
	public $IntegrationSettings;
	/**
	 * @access public
	 * @var ArrayOfCreateAccountBlockData
	 */
	public $AccountBlocks;
	/**
	 * @access public
	 * @var ArrayOfCreateUnitData
	 */
	public $Units;
	/**
	 * @access public
	 * @var ArrayOfCreatePaymentTypeData
	 */
	public $PaymentTypes;
	/**
	 * @access public
	 * @var ArrayOfInviteUserData
	 */
	public $Users;
	/**
	 * @access public
	 * @var OptinData
	 */
	public $OptinData;
	/**
	 * @access public
	 * @var SelfBillingSettingsData
	 */
	public $SelfBillingSettings;
	/**
	 * @access public
	 * @var integer
	 */
	public $SubscriptionPackageId;
}}

if (!class_exists("RegisterCompanyData")) {
/**
 * RegisterCompanyData
 */
class RegisterCompanyData {
	/**
	 * @access public
	 * @var string
	 */
	public $CountryIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $TaxNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var string
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $EUTaxNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $DefaultInvoiceIssuerName;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceIssuerIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceAddressState;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceAddressPostalCode;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceAddressCity;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceAddressLine1;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceAddressLine2;
	/**
	 * @access public
	 * @var string
	 */
	public $PhoneOnInvoice;
	/**
	 * @access public
	 * @var string
	 */
	public $EmailAddressOnInvoice;
	/**
	 * @access public
	 * @var string
	 */
	public $WebAddressOnInvoice;
	/**
	 * @access public
	 * @var base64Binary
	 */
	public $Logo;
}}

if (!class_exists("RegisterCompanyContactData")) {
/**
 * RegisterCompanyContactData
 */
class RegisterCompanyContactData {
	/**
	 * @access public
	 * @var string
	 */
	public $ContactEmailAddress;
	/**
	 * @access public
	 * @var string
	 */
	public $ContactPersonName;
	/**
	 * @access public
	 * @var string
	 */
	public $ContactPhoneNumber;
	/**
	 * @access public
	 * @var integer
	 */
	public $ContactLanguageId;
}}

if (!class_exists("NavOnlineSzamlaSettingsData")) {
/**
 * NavOnlineSzamlaSettingsData
 */
class NavOnlineSzamlaSettingsData {
	/**
	 * @access public
	 * @var string
	 */
	public $TechnicalUserName;
	/**
	 * @access public
	 * @var string
	 */
	public $TechnicalPassword;
	/**
	 * @access public
	 * @var string
	 */
	public $SignatureKey;
	/**
	 * @access public
	 * @var string
	 */
	public $ReplacementKey;
	/**
	 * @access public
	 * @var boolean
	 */
	public $SendEmailWhenInvoiceSubmitFails;
}}

if (!class_exists("IntegrationSettingsData")) {
/**
 * IntegrationSettingsData
 */
class IntegrationSettingsData {
	/**
	 * @access public
	 * @var boolean
	 */
	public $EnableIntegration;
	/**
	 * @access public
	 * @var string
	 */
	public $IntegrationAllowedIPAddress;
	/**
	 * @access public
	 * @var boolean
	 */
	public $DisableIPAddressValidation;
	/**
	 * @access public
	 * @var string
	 */
	public $IntegrationIssuerEmailAddress;
	/**
	 * @access public
	 * @var boolean
	 */
	public $AllowUnknownInvoiceReference;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ValidateCustomerEuTaxNumber;
}}

if (!class_exists("CreateAccountBlockData")) {
/**
 * CreateAccountBlockData
 */
class CreateAccountBlockData {
	/**
	 * @access public
	 * @var string
	 */
	public $AccountBlockPrefix;
	/**
	 * @access public
	 * @var integer
	 */
	public $NumberOfDigits;
	/**
	 * @access public
	 * @var integer
	 */
	public $InvoiceOutputTypeIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceTemplateIdentifier;
	/**
	 * @access public
	 * @var integer
	 */
	public $CountOfCopies;
}}

if (!class_exists("CreateUnitData")) {
/**
 * CreateUnitData
 */
class CreateUnitData {
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var string
	 */
	public $Identifier;
	/**
	 * @access public
	 * @var string
	 */
	public $NavUnitOfMeasureId;
}}

if (!class_exists("CreatePaymentTypeData")) {
/**
 * CreatePaymentTypeData
 */
class CreatePaymentTypeData {
	/**
	 * @access public
	 * @var string
	 */
	public $PaymentMeansType;
	/**
	 * @access public
	 * @var string
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var string
	 */
	public $PaymentMeansCode;
	/**
	 * @access public
	 * @var string
	 */
	public $BankIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $BankName;
	/**
	 * @access public
	 * @var string
	 */
	public $BankAccountNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $SwiftCode;
	/**
	 * @access public
	 * @var string
	 */
	public $IBan;
	/**
	 * @access public
	 * @var boolean
	 */
	public $GeneratePaymentRecord;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IsCashPayment;
	/**
	 * @access public
	 * @var boolean
	 */
	public $PtgszlahReporting;
	/**
	 * @access public
	 * @var string
	 */
	public $Remarks;
	/**
	 * @access public
	 * @var integer
	 */
	public $DefaultPayDays;
}}

if (!class_exists("InviteUserData")) {
/**
 * InviteUserData
 */
class InviteUserData {
	/**
	 * @access public
	 * @var string
	 */
	public $UserEmailAddress;
	/**
	 * @access public
	 * @var string
	 */
	public $UserUniqueIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $Message;
	/**
	 * @access public
	 * @var integer
	 */
	public $UserRoleIdentifier;
}}

if (!class_exists("OptinData")) {
/**
 * OptinData
 */
class OptinData {
	/**
	 * @access public
	 * @var boolean
	 */
	public $AcceptTermsOfUse;
	/**
	 * @access public
	 * @var boolean
	 */
	public $AcceptPrivacyPolicy;
	/**
	 * @access public
	 * @var boolean
	 */
	public $AcceptMarketingPolicy;
}}

if (!class_exists("SelfBillingSettingsData")) {
/**
 * SelfBillingSettingsData
 */
class SelfBillingSettingsData {
	/**
	 * @access public
	 * @var boolean
	 */
	public $EnableSelfBilling;
	/**
	 * @access public
	 * @var string
	 */
	public $AllowedIPAddress;
	/**
	 * @access public
	 * @var boolean
	 */
	public $DisableIPAddressValidation;
}}

if (!class_exists("RegisterCompanyTransaction")) {
/**
 * RegisterCompanyTransaction
 */
class RegisterCompanyTransaction extends TransactionBase {
	/**
	 * @access public
	 * @var RegisterCompanyData
	 */
	public $CompanyData;
	/**
	 * @access public
	 * @var RegisterCompanyContactData
	 */
	public $ContactData;
	/**
	 * @access public
	 * @var NavOnlineSzamlaSettingsData
	 */
	public $NavOnlineSzamlaSettings;
	/**
	 * @access public
	 * @var IntegrationSettingsData
	 */
	public $IntegrationSettings;
	/**
	 * @access public
	 * @var ArrayOfCreateAccountBlockData
	 */
	public $AccountBlocks;
	/**
	 * @access public
	 * @var ArrayOfCreateUnitData
	 */
	public $Units;
	/**
	 * @access public
	 * @var ArrayOfCreatePaymentTypeData
	 */
	public $PaymentTypes;
	/**
	 * @access public
	 * @var ArrayOfInviteUserData
	 */
	public $Users;
	/**
	 * @access public
	 * @var OptinData
	 */
	public $OptinData;
	/**
	 * @access public
	 * @var SelfBillingSettingsData
	 */
	public $SelfBillingSettings;
}}

if (!class_exists("UpdateNavOnlineszamlaSettingsTransaction")) {
/**
 * UpdateNavOnlineszamlaSettingsTransaction
 */
class UpdateNavOnlineszamlaSettingsTransaction extends TransactionBase {
	/**
	 * @access public
	 * @var NavOnlineSzamlaSettingsData
	 */
	public $Settings;
}}

if (!class_exists("SavePaymentMethodTransaction")) {
/**
 * SavePaymentMethodTransaction
 */
class SavePaymentMethodTransaction extends TransactionBase {
	/**
	 * @access public
	 * @var SavePaymentMethodData
	 */
	public $PaymentMethod;
}}

if (!class_exists("SavePaymentMethodData")) {
/**
 * SavePaymentMethodData
 */
class SavePaymentMethodData {
	/**
	 * @access public
	 * @var string
	 */
	public $PaymentMeansType;
	/**
	 * @access public
	 * @var string
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var string
	 */
	public $PaymentMeansCode;
	/**
	 * @access public
	 * @var string
	 */
	public $BankIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $BankName;
	/**
	 * @access public
	 * @var string
	 */
	public $BankAccountNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $SwiftCode;
	/**
	 * @access public
	 * @var string
	 */
	public $IBan;
	/**
	 * @access public
	 * @var boolean
	 */
	public $GeneratePaymentRecord;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IsCashPayment;
	/**
	 * @access public
	 * @var boolean
	 */
	public $PtgszlahReporting;
	/**
	 * @access public
	 * @var string
	 */
	public $Remarks;
	/**
	 * @access public
	 * @var integer
	 */
	public $DefaultPayDays;
}}

if (!class_exists("SaveAccountBlockTransaction")) {
/**
 * SaveAccountBlockTransaction
 */
class SaveAccountBlockTransaction extends TransactionBase {
	/**
	 * @access public
	 * @var SaveAccountBlockData
	 */
	public $AccountBlock;
}}

if (!class_exists("SaveAccountBlockData")) {
/**
 * SaveAccountBlockData
 */
class SaveAccountBlockData {
	/**
	 * @access public
	 * @var string
	 */
	public $AccountBlockPrefix;
	/**
	 * @access public
	 * @var integer
	 */
	public $NumberOfDigits;
	/**
	 * @access public
	 * @var integer
	 */
	public $InvoiceOutputTypeIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceTemplateIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $BankIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $Currency;
	/**
	 * @access public
	 * @var string
	 */
	public $DefaultInvoiceIssuerIdentifier;
	/**
	 * @access public
	 * @var integer
	 */
	public $CountOfCopies;
}}

if (!class_exists("QueryBase")) {
/**
 * QueryBase
 */
class QueryBase {
}}

if (!class_exists("DownloadInvoicesQuery")) {
/**
 * DownloadInvoicesQuery
 */
class DownloadInvoicesQuery extends QueryBase {
	/**
	 * @access public
	 * @var boolean
	 */
	public $CompressResult;
	/**
	 * @access public
	 * @var DownloadInvoicesFilterBase
	 */
	public $FilterSpecification;
	/**
	 * @access public
	 * @var string
	 */
	public $DocumentType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $OriginalInvoiceDocument;
}}

if (!class_exists("DownloadInvoicesFilterBase")) {
/**
 * DownloadInvoicesFilterBase
 */
class DownloadInvoicesFilterBase {
}}

if (!class_exists("DownloadInvoicesPeriodFilter")) {
/**
 * DownloadInvoicesPeriodFilter
 */
class DownloadInvoicesPeriodFilter extends DownloadInvoicesFilterBase {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $PeriodStart;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $PeriodEnd;
}}

if (!class_exists("GetInvoiceDataQuery")) {
/**
 * GetInvoiceDataQuery
 */
class GetInvoiceDataQuery extends QueryBase {
}}

if (!class_exists("DownloadCashReceiptQuery")) {
/**
 * DownloadCashReceiptQuery
 */
class DownloadCashReceiptQuery extends QueryBase {
	/**
	 * @access public
	 * @var string
	 */
	public $CashReceiptNumber;
}}

if (!class_exists("GetNavOnlineszamlaStatusQuery")) {
/**
 * GetNavOnlineszamlaStatusQuery
 */
class GetNavOnlineszamlaStatusQuery extends QueryBase {
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNumber;
}}

if (!class_exists("ValidateNavOnlineszamlaUserDataQuery")) {
/**
 * ValidateNavOnlineszamlaUserDataQuery
 */
class ValidateNavOnlineszamlaUserDataQuery extends QueryBase {
}}

if (!class_exists("ResultCode")) {
/**
 * ResultCode
 */
class ResultCode {
	/**
	 * @access public
	 * @var string
	 */
	public $Code;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IsTransient;
	/**
	 * @access public
	 * @var string
	 */
	public $Message;
}}

if (!class_exists("TransactionResult")) {
/**
 * TransactionResult
 */
class TransactionResult {
	/**
	 * @access public
	 * @var string
	 */
	public $TransactionId;
	/**
	 * @access public
	 * @var ResultCode
	 */
	public $ResultCode;
	/**
	 * @access public
	 * @var boolean
	 */
	public $RepeatedTransaction;
}}

if (!class_exists("RegisterExternalInvoiceTransactionResult")) {
/**
 * RegisterExternalInvoiceTransactionResult
 */
class RegisterExternalInvoiceTransactionResult extends TransactionResult {
}}

if (!class_exists("CreateInvoiceTransactionResult")) {
/**
 * CreateInvoiceTransactionResult
 */
class CreateInvoiceTransactionResult extends TransactionResult {
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceCourierUrl;
}}

if (!class_exists("CreateCashReceiptTransactionResult")) {
/**
 * CreateCashReceiptTransactionResult
 */
class CreateCashReceiptTransactionResult extends TransactionResult {
	/**
	 * @access public
	 * @var string
	 */
	public $CashReceiptNumber;
}}

if (!class_exists("RegisterChildCompanyTransactionResult")) {
/**
 * RegisterChildCompanyTransactionResult
 */
class RegisterChildCompanyTransactionResult extends TransactionResult {
	/**
	 * @access public
	 * @var string
	 */
	public $SecurityToken;
	/**
	 * @access public
	 * @var GetRegisterChildCompanyDataQueryResult
	 */
	public $GetRegisterChildCompanyDataQueryResult;
	/**
	 * @access public
	 * @var string
	 */
	public $SelfBillingSecurityToken;
}}

if (!class_exists("GetRegisterChildCompanyDataQueryResult")) {
/**
 * GetRegisterChildCompanyDataQueryResult
 */
class GetRegisterChildCompanyDataQueryResult {
	/**
	 * @access public
	 * @var RegisterCompanyData
	 */
	public $CompanyData;
	/**
	 * @access public
	 * @var RegisterCompanyContactData
	 */
	public $ContactData;
	/**
	 * @access public
	 * @var NavOnlineSzamlaSettingsData
	 */
	public $NavOnlineSzamlaSettings;
	/**
	 * @access public
	 * @var IntegrationSettingsData
	 */
	public $IntegrationSettings;
	/**
	 * @access public
	 * @var ArrayOfCreateAccountBlockData
	 */
	public $AccountBlocks;
	/**
	 * @access public
	 * @var ArrayOfCreateUnitData
	 */
	public $Units;
	/**
	 * @access public
	 * @var ArrayOfCreatePaymentTypeData
	 */
	public $PaymentTypes;
	/**
	 * @access public
	 * @var ArrayOfInviteUserData
	 */
	public $Users;
	/**
	 * @access public
	 * @var OptinData
	 */
	public $OptinData;
	/**
	 * @access public
	 * @var SelfBillingSettingsData
	 */
	public $SelfBillingSettings;
}}

if (!class_exists("RegisterCompanyTransactionResult")) {
/**
 * RegisterCompanyTransactionResult
 */
class RegisterCompanyTransactionResult extends TransactionResult {
	/**
	 * @access public
	 * @var string
	 */
	public $SecurityToken;
	/**
	 * @access public
	 * @var GetRegisterCompanyDataQueryResult
	 */
	public $GetRegisterCompanyDataQueryResult;
	/**
	 * @access public
	 * @var string
	 */
	public $SelfBillingSecurityToken;
}}

if (!class_exists("GetRegisterCompanyDataQueryResult")) {
/**
 * GetRegisterCompanyDataQueryResult
 */
class GetRegisterCompanyDataQueryResult {
	/**
	 * @access public
	 * @var RegisterCompanyData
	 */
	public $CompanyData;
	/**
	 * @access public
	 * @var RegisterCompanyContactData
	 */
	public $ContactData;
	/**
	 * @access public
	 * @var NavOnlineSzamlaSettingsData
	 */
	public $NavOnlineSzamlaSettings;
	/**
	 * @access public
	 * @var IntegrationSettingsData
	 */
	public $IntegrationSettings;
	/**
	 * @access public
	 * @var ArrayOfCreateAccountBlockData
	 */
	public $AccountBlocks;
	/**
	 * @access public
	 * @var ArrayOfCreateUnitData
	 */
	public $Units;
	/**
	 * @access public
	 * @var ArrayOfCreatePaymentTypeData
	 */
	public $PaymentTypes;
	/**
	 * @access public
	 * @var ArrayOfInviteUserData
	 */
	public $Users;
	/**
	 * @access public
	 * @var OptinData
	 */
	public $OptinData;
	/**
	 * @access public
	 * @var SelfBillingSettingsData
	 */
	public $SelfBillingSettings;
}}

if (!class_exists("UpdateNavOnlineszamlaSettingsTransactionResult")) {
/**
 * UpdateNavOnlineszamlaSettingsTransactionResult
 */
class UpdateNavOnlineszamlaSettingsTransactionResult extends TransactionResult {
}}

if (!class_exists("SavePaymentMethodTransactionResult")) {
/**
 * SavePaymentMethodTransactionResult
 */
class SavePaymentMethodTransactionResult extends TransactionResult {
}}

if (!class_exists("SaveAccountBlockTransactionResult")) {
/**
 * SaveAccountBlockTransactionResult
 */
class SaveAccountBlockTransactionResult extends TransactionResult {
}}

if (!class_exists("QueryResultBase")) {
/**
 * QueryResultBase
 */
class QueryResultBase {
	/**
	 * @access public
	 * @var ResultCode
	 */
	public $ResultCode;
}}

if (!class_exists("GetInvoiceDataQueryResult")) {
/**
 * GetInvoiceDataQueryResult
 */
class GetInvoiceDataQueryResult extends QueryResultBase {
	/**
	 * @access public
	 * @var ArrayOfUnitsQueryResultItem
	 */
	public $Units;
	/**
	 * @access public
	 * @var ArrayOfAccountBlocksQueryResultItem
	 */
	public $AccountBlocks;
	/**
	 * @access public
	 * @var ArrayOfPaymentMethodsQueryResultItem
	 */
	public $PaymentMethods;
	/**
	 * @access public
	 * @var ArrayOfIssuersQueryResultItem
	 */
	public $Issuers;
	/**
	 * @access public
	 * @var ArrayOfTaxesQueryResultItem
	 */
	public $Taxes;
	/**
	 * @access public
	 * @var CompanyDataQueryResultItem
	 */
	public $CompanyData;
	/**
	 * @access public
	 * @var IntegrationSettingsQueryResultItem
	 */
	public $IntegrationSettings;
	/**
	 * @access public
	 * @var SelfBillingSettingsQueryResultItem
	 */
	public $SelfBillingSettings;
}}

if (!class_exists("UnitsQueryResultItem")) {
/**
 * UnitsQueryResultItem
 */
class UnitsQueryResultItem {
	/**
	 * @access public
	 * @var string
	 */
	public $UnitIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var string
	 */
	public $NavUnitOfMeasureId;
}}

if (!class_exists("AccountBlocksQueryResultItem")) {
/**
 * AccountBlocksQueryResultItem
 */
class AccountBlocksQueryResultItem {
	/**
	 * @access public
	 * @var string
	 */
	public $AccountBlockPrefix;
	/**
	 * @access public
	 * @var string
	 */
	public $CurrencyShortName;
	/**
	 * @access public
	 * @var integer
	 */
	public $NumberOfDigits;
	/**
	 * @access public
	 * @var integer
	 */
	public $InvoiceOutputTypeIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceTemplateIdentifier;
}}

if (!class_exists("PaymentMethodsQueryResultItem")) {
/**
 * PaymentMethodsQueryResultItem
 */
class PaymentMethodsQueryResultItem {
	/**
	 * @access public
	 * @var string
	 */
	public $BankIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $PaymentMeansType;
	/**
	 * @access public
	 * @var string
	 */
	public $BankAccountNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $DisplayName;
	/**
	 * @access public
	 * @var string
	 */
	public $PaymentMeansCode;
	/**
	 * @access public
	 * @var string
	 */
	public $BankName;
	/**
	 * @access public
	 * @var string
	 */
	public $SwiftCode;
	/**
	 * @access public
	 * @var string
	 */
	public $IBan;
	/**
	 * @access public
	 * @var boolean
	 */
	public $GeneratePaymentRecord;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IsCashPayment;
	/**
	 * @access public
	 * @var boolean
	 */
	public $PtgszlahReporting;
	/**
	 * @access public
	 * @var string
	 */
	public $Remarks;
	/**
	 * @access public
	 * @var integer
	 */
	public $DefaultPayDays;
}}

if (!class_exists("IssuersQueryResultItem")) {
/**
 * IssuersQueryResultItem
 */
class IssuersQueryResultItem {
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceIssuerIdentifier;
}}

if (!class_exists("TaxesQueryResultItem")) {
/**
 * TaxesQueryResultItem
 */
class TaxesQueryResultItem {
	/**
	 * @access public
	 * @var string
	 */
	public $CountryId;
	/**
	 * @access public
	 * @var string
	 */
	public $TaxRateCode;
	/**
	 * @access public
	 * @var double
	 */
	public $Percentage;
	/**
	 * @access public
	 * @var string
	 */
	public $DisplayName;
}}

if (!class_exists("CompanyDataQueryResultItem")) {
/**
 * CompanyDataQueryResultItem
 */
class CompanyDataQueryResultItem {
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressCountryId;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressCountryState;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressPostalCode;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressCity;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressLine1;
	/**
	 * @access public
	 * @var string
	 */
	public $AddressLine2;
	/**
	 * @access public
	 * @var string
	 */
	public $TaxNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $EUTaxNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $RegistrationNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $AnykSZAMLAZO;
}}

if (!class_exists("IntegrationSettingsQueryResultItem")) {
/**
 * IntegrationSettingsQueryResultItem
 */
class IntegrationSettingsQueryResultItem {
	/**
	 * @access public
	 * @var boolean
	 */
	public $EnableIntegration;
	/**
	 * @access public
	 * @var string
	 */
	public $SecurityToken;
	/**
	 * @access public
	 * @var string
	 */
	public $IntegrationAllowedIPAddress;
	/**
	 * @access public
	 * @var boolean
	 */
	public $DisableIPAddressValidation;
	/**
	 * @access public
	 * @var string
	 */
	public $IntegrationIssuerEmailAddress;
	/**
	 * @access public
	 * @var boolean
	 */
	public $AllowUnknownInvoiceReference;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ValidateCustomerEuTaxNumber;
}}

if (!class_exists("SelfBillingSettingsQueryResultItem")) {
/**
 * SelfBillingSettingsQueryResultItem
 */
class SelfBillingSettingsQueryResultItem {
	/**
	 * @access public
	 * @var boolean
	 */
	public $EnableSelfBilling;
	/**
	 * @access public
	 * @var string
	 */
	public $SecurityToken;
	/**
	 * @access public
	 * @var string
	 */
	public $AllowedIPAddress;
	/**
	 * @access public
	 * @var boolean
	 */
	public $DisableIPAddressValidation;
}}

if (!class_exists("DownloadCashReceiptQueryResult")) {
/**
 * DownloadCashReceiptQueryResult
 */
class DownloadCashReceiptQueryResult extends QueryResultBase {
	/**
	 * @access public
	 * @var string
	 */
	public $CashReceiptNumber;
	/**
	 * @access public
	 * @var base64Binary
	 */
	public $CashReceiptDocument;
}}

if (!class_exists("DownloadInvoicesQueryResult")) {
/**
 * DownloadInvoicesQueryResult
 */
class DownloadInvoicesQueryResult extends QueryResultBase {
	/**
	 * @access public
	 * @var ArrayOfDownloadInvoicesQueryResultItem
	 */
	public $Invoices;
}}

if (!class_exists("DownloadInvoicesQueryResultItem")) {
/**
 * DownloadInvoicesQueryResultItem
 */
class DownloadInvoicesQueryResultItem {
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * @access public
	 * @var base64Binary
	 */
	public $InvoiceDocument;
}}

if (!class_exists("GetNavOnlineszamlaStatusQueryResult")) {
/**
 * GetNavOnlineszamlaStatusQueryResult
 */
class GetNavOnlineszamlaStatusQueryResult extends QueryResultBase {
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $LastOperationDate;
	/**
	 * @access public
	 * @var integer
	 */
	public $InternalStateId;
	/**
	 * @access public
	 * @var string
	 */
	public $InternalState;
	/**
	 * @access public
	 * @var string
	 */
	public $NavTransactionId;
	/**
	 * @access public
	 * @var string
	 */
	public $NavInvoiceStatus;
	/**
	 * @access public
	 * @var string
	 */
	public $ValidationResultCode;
	/**
	 * @access public
	 * @var ArrayOfNavOnlineSzamlaValidationMessage
	 */
	public $ValidationMessages;
	/**
	 * @access public
	 * @var string
	 */
	public $NavFuncCode;
	/**
	 * @access public
	 * @var string
	 */
	public $NavErrorCode;
	/**
	 * @access public
	 * @var string
	 */
	public $NavMessage;
	/**
	 * @access public
	 * @var ArrayOfNavOnlineSzamlaLogEntry
	 */
	public $LogEntries;
	/**
	 * @access public
	 * @var string
	 */
	public $NavClientVersion;
}}

if (!class_exists("NavOnlineSzamlaValidationMessage")) {
/**
 * NavOnlineSzamlaValidationMessage
 */
class NavOnlineSzamlaValidationMessage {
	/**
	 * @access public
	 * @var string
	 */
	public $ValidationResultCode;
	/**
	 * @access public
	 * @var string
	 */
	public $ValidationErrorCode;
	/**
	 * @access public
	 * @var string
	 */
	public $Message;
	/**
	 * @access public
	 * @var string
	 */
	public $Type;
}}

if (!class_exists("NavOnlineSzamlaLogEntry")) {
/**
 * NavOnlineSzamlaLogEntry
 */
class NavOnlineSzamlaLogEntry {
	/**
	 * @access public
	 * @var string
	 */
	public $LogType;
	/**
	 * @access public
	 * @var string
	 */
	public $LogTypeName;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $LogDate;
	/**
	 * @access public
	 * @var string
	 */
	public $RawLogData;
	/**
	 * @access public
	 * @var integer
	 */
	public $StateId;
	/**
	 * @access public
	 * @var string
	 */
	public $State;
	/**
	 * @access public
	 * @var string
	 */
	public $NavTransactionId;
	/**
	 * @access public
	 * @var string
	 */
	public $NavInvoiceStatus;
	/**
	 * @access public
	 * @var string
	 */
	public $ValidationResultCode;
	/**
	 * @access public
	 * @var string
	 */
	public $NavFuncCode;
	/**
	 * @access public
	 * @var string
	 */
	public $NavErrorCode;
	/**
	 * @access public
	 * @var string
	 */
	public $NavMessage;
	/**
	 * @access public
	 * @var string
	 */
	public $NavOperationType;
	/**
	 * @access public
	 * @var ArrayOfNavOnlineSzamlaValidationMessage
	 */
	public $ValidationMessages;
}}

if (!class_exists("ValidateNavOnlineszamlaUserDataQueryResult")) {
/**
 * ValidateNavOnlineszamlaUserDataQueryResult
 */
class ValidateNavOnlineszamlaUserDataQueryResult extends QueryResultBase {
	/**
	 * @access public
	 * @var boolean
	 */
	public $UserDataIsValid;
	/**
	 * @access public
	 * @var string
	 */
	public $Message;
}}

if (!class_exists("char")) {
/**
 * char
 */
class char {
}}

if (!class_exists("duration")) {
/**
 * duration
 */
class duration {
}}

if (!class_exists("guid")) {
/**
 * guid
 */
class guid {
}}

if (!class_exists("CreateInvoiceResponse")) {
/**
 * CreateInvoiceResponse
 */
class CreateInvoiceResponse extends ResponseBase {
	/**
	 * @access public
	 * @var CreateInvoiceTransactionResult
	 */
	public $TransactionResult;
}}

if (!class_exists("CreateCashReceiptResponse")) {
/**
 * CreateCashReceiptResponse
 */
class CreateCashReceiptResponse extends ResponseBase {
	/**
	 * @access public
	 * @var CreateCashReceiptTransactionResult
	 */
	public $TransactionResult;
}}

if (!class_exists("ConvertExternalInvoiceResponse")) {
/**
 * ConvertExternalInvoiceResponse
 */
class ConvertExternalInvoiceResponse extends ResponseBase {
	/**
	 * @access public
	 * @var ConvertExternalInvoiceTransactionResult
	 */
	public $TransactionResult;
}}

if (!class_exists("RegisterExternalInvoiceResponse")) {
/**
 * RegisterExternalInvoiceResponse
 */
class RegisterExternalInvoiceResponse extends ResponseBase {
	/**
	 * @access public
	 * @var RegisterExternalInvoiceTransactionResult
	 */
	public $TransactionResult;
}}

if (!class_exists("DownloadInvoiceResponse")) {
/**
 * DownloadInvoiceResponse
 */
class DownloadInvoiceResponse extends ResponseBase {
	/**
	 * @access public
	 * @var DownloadInvoiceQueryResult
	 */
	public $QueryResult;
}}

if (!class_exists("DownloadInvoicesResponse")) {
/**
 * DownloadInvoicesResponse
 */
class DownloadInvoicesResponse extends ResponseBase {
	/**
	 * @access public
	 * @var DownloadInvoicesQueryResult
	 */
	public $QueryResult;
}}

if (!class_exists("GetInvoiceDataResponse")) {
/**
 * GetInvoiceDataResponse
 */
class GetInvoiceDataResponse extends ResponseBase {
	/**
	 * @access public
	 * @var GetInvoiceDataQueryResult
	 */
	public $QueryResult;
}}

if (!class_exists("DownloadCashReceiptResponse")) {
/**
 * DownloadCashReceiptResponse
 */
class DownloadCashReceiptResponse extends ResponseBase {
	/**
	 * @access public
	 * @var DownloadCashReceiptQueryResult
	 */
	public $QueryResult;
}}

if (!class_exists("GetNavOnlineszamlaStatusResponse")) {
/**
 * GetNavOnlineszamlaStatusResponse
 */
class GetNavOnlineszamlaStatusResponse extends ResponseBase {
	/**
	 * @access public
	 * @var GetNavOnlineszamlaStatusQueryResult
	 */
	public $QueryResult;
}}

if (!class_exists("ValidateNavOnlineszamlaUserDataResponse")) {
/**
 * ValidateNavOnlineszamlaUserDataResponse
 */
class ValidateNavOnlineszamlaUserDataResponse extends ResponseBase {
	/**
	 * @access public
	 * @var ValidateNavOnlineszamlaUserDataQueryResult
	 */
	public $QueryResult;
}}

if (!class_exists("RegisterChildCompanyResponse")) {
/**
 * RegisterChildCompanyResponse
 */
class RegisterChildCompanyResponse extends ResponseBase {
	/**
	 * @access public
	 * @var RegisterChildCompanyTransactionResult
	 */
	public $TransactionResult;
}}

if (!class_exists("RegisterCompanyResponse")) {
/**
 * RegisterCompanyResponse
 */
class RegisterCompanyResponse extends ResponseBase {
	/**
	 * @access public
	 * @var RegisterCompanyTransactionResult
	 */
	public $TransactionResult;
}}

if (!class_exists("UpdateNavOnlineszamlaSettingsResponse")) {
/**
 * UpdateNavOnlineszamlaSettingsResponse
 */
class UpdateNavOnlineszamlaSettingsResponse extends ResponseBase {
	/**
	 * @access public
	 * @var UpdateNavOnlineszamlaSettingsTransactionResult
	 */
	public $TransactionResult;
}}

if (!class_exists("SaveAccountBlockResponse")) {
/**
 * SaveAccountBlockResponse
 */
class SaveAccountBlockResponse extends ResponseBase {
	/**
	 * @access public
	 * @var SaveAccountBlockTransactionResult
	 */
	public $TransactionResult;
}}

if (!class_exists("SavePaymentMethodResponse")) {
/**
 * SavePaymentMethodResponse
 */
class SavePaymentMethodResponse extends ResponseBase {
	/**
	 * @access public
	 * @var SavePaymentMethodTransactionResult
	 */
	public $TransactionResult;
}}

if (!class_exists("CreateInvoiceRequest")) {
/**
 * CreateInvoiceRequest
 */
class CreateInvoiceRequest extends RequestBase {
	/**
	 * @access public
	 * @var CreateInvoiceTransaction
	 */
	public $CreateInvoiceTransaction;
	/**
	 * @access public
	 * @var string
	 */
	public $SelfBillingSecurityToken;
}}

if (!class_exists("ConvertExternalInvoiceTransaction")) {
/**
 * ConvertExternalInvoiceTransaction
 */
class ConvertExternalInvoiceTransaction extends TransactionBase {
	/**
	 * @access public
	 * @var InvoiceHeaderWithTotalAmount
	 */
	public $Header;
	/**
	 * @access public
	 * @var ArrayOfInvoiceLineWithAmount
	 */
	public $Lines;
	/**
	 * @access public
	 * @var ArrayOfInvoiceVatGroup
	 */
	public $VatGroups;
	/**
	 * @access public
	 * @var boolean
	 */
	public $SendInvoiceToCustomer;
	/**
	 * @access public
	 * @var string
	 */
	public $SendInvoiceToEmailAddress;
	/**
	 * @access public
	 * @var integer
	 */
	public $InvoiceCourierTypeId;
	/**
	 * @access public
	 * @var ArrayOfClauseItem
	 */
	public $Clauses;
	/**
	 * @access public
	 * @var IssuerSoftwareType
	 */
	public $IssuerSoftware;
	/**
	 * @access public
	 * @var ArrayOfAttachmentItem
	 */
	public $Attachments;
}}

if (!class_exists("InvoiceHeader")) {
/**
 * InvoiceHeader
 */
class InvoiceHeader extends InvoiceHeaderBase {
	/**
	 * @access public
	 * @var string
	 */
	public $AccountBlockPrefix;
	/**
	 * @access public
	 * @var BankBase
	 */
	public $Bank;
	/**
	 * @access public
	 * @var IssuerAddressBase
	 */
	public $IssuerAddress;
	/**
	 * @access public
	 * @var CustomerBase
	 */
	public $Customer;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $FulfillmentDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $PaymentDueDate;
	/**
	 * @access public
	 * @var CurrencyBase
	 */
	public $Currency;
	/**
	 * @access public
	 * @var boolean
	 */
	public $InterEUVatExempt;
	/**
	 * @access public
	 * @var integer
	 */
	public $PaymentMethodId;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $Notes;
	/**
	 * @access public
	 * @var string
	 */
	public $OrderNumber;
	/**
	 * @access public
	 * @var double
	 */
	public $LocalForeignCurrencyExchangeRate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IsDomesticDelivery;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IsVatReasonAccepted;
	/**
	 * @access public
	 * @var integer
	 */
	public $InvoiceDocumentType;
	/**
	 * @access public
	 * @var string
	 */
	public $ReferenceInvoiceNumber;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $ReferenceInvoiceFulfillmentDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $InvoiceHasElectronicServiceInEU;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ForceLocalForeignCurrencyExchangeRate;
	/**
	 * @access public
	 * @var string
	 */
	public $CompanyDealIdentifier;
	/**
	 * @access public
	 * @var ArrayOfNameValueItem
	 */
	public $CustomData;
}}

if (!class_exists("InvoiceLine2")) {
/**
 * InvoiceLine2
 */
class InvoiceLine2 extends InvoiceLineBase {
	/**
	 * @access public
	 * @var string
	 */
	public $ProductStatisticalCode;
	/**
	 * @access public
	 * @var string
	 */
	public $ProductName;
	/**
	 * @access public
	 * @var double
	 */
	public $NetUnitPrice;
	/**
	 * @access public
	 * @var double
	 */
	public $Quantity;
	/**
	 * @access public
	 * @var string
	 */
	public $VatTaxRateCode;
	/**
	 * @access public
	 * @var string
	 */
	public $UnitIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $ProductTextIdentifier;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceLineNote;
	/**
	 * @access public
	 * @var double
	 */
	public $GrossUnitPrice;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IsPeriodic;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $PeriodStartDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $PeriodEndDate;
	/**
	 * @access public
	 * @var ArrayOfClauseItem
	 */
	public $Clauses;
	/**
	 * @access public
	 * @var integer
	 */
	public $GroupIndex;
	/**
	 * @access public
	 * @var ArrayOfNameValueItem
	 */
	public $CustomData;
	/**
	 * @access public
	 * @var string
	 */
	public $UnitText;
}}

if (!class_exists("InvoiceLineWithAmount")) {
/**
 * InvoiceLineWithAmount
 */
class InvoiceLineWithAmount extends InvoiceLine2 {
	/**
	 * @access public
	 * @var double
	 */
	public $NetAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $VatAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $GrossAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $LocalForeignCurrencyExchangeRate;
	/**
	 * @access public
	 * @var double
	 */
	public $LocalNetAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $LocalVatAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $LocalGrossAmount;
}}

if (!class_exists("RegisterExternalInvoiceVatGroup")) {
/**
 * RegisterExternalInvoiceVatGroup
 */
class RegisterExternalInvoiceVatGroup extends InvoiceVatGroup {
	/**
	 * @access public
	 * @var double
	 */
	public $VatPercentage;
}}

if (!class_exists("DownloadInvoiceQuery")) {
/**
 * DownloadInvoiceQuery
 */
class DownloadInvoiceQuery extends QueryBase {
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $DocumentType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $OriginalInvoiceDocument;
}}

if (!class_exists("ConvertExternalInvoiceTransactionResult")) {
/**
 * ConvertExternalInvoiceTransactionResult
 */
class ConvertExternalInvoiceTransactionResult extends TransactionResult {
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceCourierUrl;
}}

if (!class_exists("DownloadInvoiceQueryResult")) {
/**
 * DownloadInvoiceQueryResult
 */
class DownloadInvoiceQueryResult extends QueryResultBase {
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * @access public
	 * @var base64Binary
	 */
	public $InvoiceDocument;
}}

if (!class_exists("InvoiceHeaderWithTotalAmount")) {
/**
 * InvoiceHeaderWithTotalAmount
 */
class InvoiceHeaderWithTotalAmount extends InvoiceHeader {
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * @access public
	 * @var double
	 */
	public $InvoiceNetTotalAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $InvoiceVatTotalAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $InvoiceGrossTotalAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $InvoiceLocalVatTotalAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $InvoiceLocalGrossTotalAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $InvoiceLocalNetTotalAmount;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IsAggregate;
}}

if (!class_exists("InvoiceLineWithAmountAndUnitText")) {
/**
 * InvoiceLineWithAmountAndUnitText
 */
class InvoiceLineWithAmountAndUnitText extends InvoiceLine2 {
	/**
	 * @access public
	 * @var double
	 */
	public $NetAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $VatAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $LocalVatAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $GrossAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $LocalForeignCurrencyExchangeRate;
	/**
	 * @access public
	 * @var double
	 */
	public $VatPercentage;
	/**
	 * @access public
	 * @var OtherInvoiceLineData
	 */
	public $OtherInvoiceLineData;
	/**
	 * @access public
	 * @var double
	 */
	public $LocalNetAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $LocalGrossAmount;
}}

if (!class_exists("InvoiceHeaderRegisterExternal")) {
/**
 * InvoiceHeaderRegisterExternal
 */
class InvoiceHeaderRegisterExternal extends InvoiceHeaderWithTotalAmount {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $InvoiceDate;
}}

if (!class_exists("InvoicingService")) {
/**
 * InvoicingService
 * @author WSDLInterpreter
 */
class InvoicingService extends SoapClient {
	/**
	 * Default class map for wsdl=>php
	 * @access private
	 * @var array
	 */
	private static $classmap = array(
		"CreateInvoice" => "CreateInvoice",
		"CreateInvoiceResponse" => "CreateInvoiceResponse",
		"CreateCashReceipt" => "CreateCashReceipt",
		"CreateCashReceiptResponse" => "CreateCashReceiptResponse",
		"ConvertExternalInvoice" => "ConvertExternalInvoice",
		"ConvertExternalInvoiceResponse" => "ConvertExternalInvoiceResponse",
		"RegisterExternalInvoice" => "RegisterExternalInvoice",
		"RegisterExternalInvoiceResponse" => "RegisterExternalInvoiceResponse",
		"DownloadInvoice" => "DownloadInvoice",
		"DownloadInvoiceResponse" => "DownloadInvoiceResponse",
		"DownloadInvoices" => "DownloadInvoices",
		"DownloadInvoicesResponse" => "DownloadInvoicesResponse",
		"GetInvoiceData" => "GetInvoiceData",
		"GetInvoiceDataResponse" => "GetInvoiceDataResponse",
		"DownloadCashReceipt" => "DownloadCashReceipt",
		"DownloadCashReceiptResponse" => "DownloadCashReceiptResponse",
		"GetNavOnlineszamlaStatus" => "GetNavOnlineszamlaStatus",
		"GetNavOnlineszamlaStatusResponse" => "GetNavOnlineszamlaStatusResponse",
		"ValidateNavOnlineszamlaUserData" => "ValidateNavOnlineszamlaUserData",
		"ValidateNavOnlineszamlaUserDataResponse" => "ValidateNavOnlineszamlaUserDataResponse",
		"RegisterChildCompany" => "RegisterChildCompany",
		"RegisterChildCompanyResponse" => "RegisterChildCompanyResponse",
		"RegisterCompany" => "RegisterCompany",
		"RegisterCompanyResponse" => "RegisterCompanyResponse",
		"UpdateNavOnlineszamlaSettings" => "UpdateNavOnlineszamlaSettings",
		"UpdateNavOnlineszamlaSettingsResponse" => "UpdateNavOnlineszamlaSettingsResponse",
		"SaveAccountBlock" => "SaveAccountBlock",
		"SaveAccountBlockResponse" => "SaveAccountBlockResponse",
		"SavePaymentMethod" => "SavePaymentMethod",
		"SavePaymentMethodResponse" => "SavePaymentMethodResponse",
		"CreateInvoiceRequest" => "CreateInvoiceRequest",
		"RequestBase" => "RequestBase",
		"ConvertExternalInvoiceRequest" => "ConvertExternalInvoiceRequest",
		"RegisterExternalInvoiceRequest" => "RegisterExternalInvoiceRequest",
		"DownloadInvoiceRequest" => "DownloadInvoiceRequest",
		"DownloadInvoicesRequest" => "DownloadInvoicesRequest",
		"GetInvoiceDataRequest" => "GetInvoiceDataRequest",
		"DownloadCashReceiptRequest" => "DownloadCashReceiptRequest",
		"RegisterChildCompanyRequest" => "RegisterChildCompanyRequest",
		"RegisterCompanyRequest" => "RegisterCompanyRequest",
		"ValidateNavOnlineszamlaUserDataRequest" => "ValidateNavOnlineszamlaUserDataRequest",
		"UpdateNavOnlineszamlaSettingsRequest" => "UpdateNavOnlineszamlaSettingsRequest",
		"CreateCashReceiptRequest" => "CreateCashReceiptRequest",
		"GetNavOnlineszamlaStatusRequest" => "GetNavOnlineszamlaStatusRequest",
		"SaveAccountBlockRequest" => "SaveAccountBlockRequest",
		"SavePaymentMethodRequest" => "SavePaymentMethodRequest",
		"ResponseBase" => "ResponseBase",
		"ConvertExternalInvoiceTransaction" => "ConvertExternalInvoiceTransaction",
		"TransactionBase" => "TransactionBase",
		"RegisterExternalInvoiceTransaction" => "RegisterExternalInvoiceTransaction",
		"InvoiceHeaderRegisterExternal" => "InvoiceHeaderRegisterExternal",
		"InvoiceHeaderWithTotalAmount" => "InvoiceHeaderWithTotalAmount",
		"InvoiceHeader" => "InvoiceHeader",
		"InvoiceHeaderBase" => "InvoiceHeaderBase",
		"BankBase" => "BankBase",
		"DefaultBank" => "DefaultBank",
		"BankData" => "BankData",
		"BankIdentifier" => "BankIdentifier",
		"BankIdentifierWithAccountNumber" => "BankIdentifierWithAccountNumber",
		"IssuerAddressBase" => "IssuerAddressBase",
		"IssuerAddressIdentifier" => "IssuerAddressIdentifier",
		"DefaultIssuerAddress" => "DefaultIssuerAddress",
		"IssuerAddressData" => "IssuerAddressData",
		"CustomerBase" => "CustomerBase",
		"Customer" => "Customer",
		"CustomerIdentifier" => "CustomerIdentifier",
		"CurrencyBase" => "CurrencyBase",
		"DefaultCurrency" => "DefaultCurrency",
		"CurrencyShortName" => "CurrencyShortName",
		"NameValueItem" => "NameValueItem",
		"InvoiceLineWithAmountAndUnitText" => "InvoiceLineWithAmountAndUnitText",
		"InvoiceLine2" => "InvoiceLine2",
		"InvoiceLineBase" => "InvoiceLineBase",
		"InvoiceLine" => "InvoiceLine",
		"ClauseItem" => "ClauseItem",
		"ClauseParameterItemBase" => "ClauseParameterItemBase",
		"ClauseStringParameterItem" => "ClauseStringParameterItem",
		"ClauseDateParameterItem" => "ClauseDateParameterItem",
		"ClauseBoolParameterItem" => "ClauseBoolParameterItem",
		"ClauseIntParameterItem" => "ClauseIntParameterItem",
		"ClauseDecimalParameterItem" => "ClauseDecimalParameterItem",
		"InvoiceLineIdentifier" => "InvoiceLineIdentifier",
		"InvoiceLineWithAmount" => "InvoiceLineWithAmount",
		"OtherInvoiceLineData" => "OtherInvoiceLineData",
		"LineDiscountData" => "LineDiscountData",
		"RegisterExternalInvoiceVatGroup" => "RegisterExternalInvoiceVatGroup",
		"InvoiceVatGroup" => "InvoiceVatGroup",
		"IssuerSoftwareType" => "IssuerSoftwareType",
		"InvoiceOtherData" => "InvoiceOtherData",
		"CreateInvoiceTransaction" => "CreateInvoiceTransaction",
		"AttachmentItem" => "AttachmentItem",
		"InvoiceLineGroup" => "InvoiceLineGroup",
		"CreateCashReceiptTransaction" => "CreateCashReceiptTransaction",
		"PaymentBase" => "PaymentBase",
		"AllocatedPayment" => "AllocatedPayment",
		"UnallocatedPayment" => "UnallocatedPayment",
		"CashReceiptHeaderBase" => "CashReceiptHeaderBase",
		"CashReceiptHeader" => "CashReceiptHeader",
		"RegisterChildCompanyTransaction" => "RegisterChildCompanyTransaction",
		"RegisterCompanyData" => "RegisterCompanyData",
		"RegisterCompanyContactData" => "RegisterCompanyContactData",
		"NavOnlineSzamlaSettingsData" => "NavOnlineSzamlaSettingsData",
		"IntegrationSettingsData" => "IntegrationSettingsData",
		"CreateAccountBlockData" => "CreateAccountBlockData",
		"CreateUnitData" => "CreateUnitData",
		"CreatePaymentTypeData" => "CreatePaymentTypeData",
		"InviteUserData" => "InviteUserData",
		"OptinData" => "OptinData",
		"SelfBillingSettingsData" => "SelfBillingSettingsData",
		"RegisterCompanyTransaction" => "RegisterCompanyTransaction",
		"UpdateNavOnlineszamlaSettingsTransaction" => "UpdateNavOnlineszamlaSettingsTransaction",
		"SavePaymentMethodTransaction" => "SavePaymentMethodTransaction",
		"SavePaymentMethodData" => "SavePaymentMethodData",
		"SaveAccountBlockTransaction" => "SaveAccountBlockTransaction",
		"SaveAccountBlockData" => "SaveAccountBlockData",
		"DownloadInvoiceQuery" => "DownloadInvoiceQuery",
		"QueryBase" => "QueryBase",
		"DownloadInvoicesQuery" => "DownloadInvoicesQuery",
		"DownloadInvoicesFilterBase" => "DownloadInvoicesFilterBase",
		"DownloadInvoicesPeriodFilter" => "DownloadInvoicesPeriodFilter",
		"GetInvoiceDataQuery" => "GetInvoiceDataQuery",
		"DownloadCashReceiptQuery" => "DownloadCashReceiptQuery",
		"GetNavOnlineszamlaStatusQuery" => "GetNavOnlineszamlaStatusQuery",
		"ValidateNavOnlineszamlaUserDataQuery" => "ValidateNavOnlineszamlaUserDataQuery",
		"ResultCode" => "ResultCode",
		"ConvertExternalInvoiceTransactionResult" => "ConvertExternalInvoiceTransactionResult",
		"TransactionResult" => "TransactionResult",
		"RegisterExternalInvoiceTransactionResult" => "RegisterExternalInvoiceTransactionResult",
		"CreateInvoiceTransactionResult" => "CreateInvoiceTransactionResult",
		"CreateCashReceiptTransactionResult" => "CreateCashReceiptTransactionResult",
		"RegisterChildCompanyTransactionResult" => "RegisterChildCompanyTransactionResult",
		"GetRegisterChildCompanyDataQueryResult" => "GetRegisterChildCompanyDataQueryResult",
		"RegisterCompanyTransactionResult" => "RegisterCompanyTransactionResult",
		"GetRegisterCompanyDataQueryResult" => "GetRegisterCompanyDataQueryResult",
		"UpdateNavOnlineszamlaSettingsTransactionResult" => "UpdateNavOnlineszamlaSettingsTransactionResult",
		"SavePaymentMethodTransactionResult" => "SavePaymentMethodTransactionResult",
		"SaveAccountBlockTransactionResult" => "SaveAccountBlockTransactionResult",
		"DownloadInvoiceQueryResult" => "DownloadInvoiceQueryResult",
		"QueryResultBase" => "QueryResultBase",
		"GetInvoiceDataQueryResult" => "GetInvoiceDataQueryResult",
		"UnitsQueryResultItem" => "UnitsQueryResultItem",
		"AccountBlocksQueryResultItem" => "AccountBlocksQueryResultItem",
		"PaymentMethodsQueryResultItem" => "PaymentMethodsQueryResultItem",
		"IssuersQueryResultItem" => "IssuersQueryResultItem",
		"TaxesQueryResultItem" => "TaxesQueryResultItem",
		"CompanyDataQueryResultItem" => "CompanyDataQueryResultItem",
		"IntegrationSettingsQueryResultItem" => "IntegrationSettingsQueryResultItem",
		"SelfBillingSettingsQueryResultItem" => "SelfBillingSettingsQueryResultItem",
		"DownloadCashReceiptQueryResult" => "DownloadCashReceiptQueryResult",
		"DownloadInvoicesQueryResult" => "DownloadInvoicesQueryResult",
		"DownloadInvoicesQueryResultItem" => "DownloadInvoicesQueryResultItem",
		"GetNavOnlineszamlaStatusQueryResult" => "GetNavOnlineszamlaStatusQueryResult",
		"NavOnlineSzamlaValidationMessage" => "NavOnlineSzamlaValidationMessage",
		"NavOnlineSzamlaLogEntry" => "NavOnlineSzamlaLogEntry",
		"ValidateNavOnlineszamlaUserDataQueryResult" => "ValidateNavOnlineszamlaUserDataQueryResult",
		"char" => "char",
		"duration" => "duration",
		"guid" => "guid",
	);

	/**
	 * Constructor using wsdl location and options array
	 * @param string $wsdl WSDL location for this service
	 * @param array $options Options for the SoapClient
	 */
	public function __construct($wsdl="https://sandbox.billzone.eu/billgate?wsdl", $options=array()) {
		foreach(self::$classmap as $wsdlClassName => $phpClassName) {
		    if(!isset($options['classmap'][$wsdlClassName])) {
		        $options['classmap'][$wsdlClassName] = $phpClassName;
		    }
		}
		parent::__construct($wsdl, $options);
	}

	/**
	 * Checks if an argument list matches against a valid argument type list
	 * @param array $arguments The argument list to check
	 * @param array $validParameters A list of valid argument types
	 * @return boolean true if arguments match against validParameters
	 * @throws Exception invalid function signature message
	 */
	public function _checkArguments($arguments, $validParameters) {
		$variables = "";
		foreach ($arguments as $arg) {
		    $type = gettype($arg);
		    if ($type == "object") {
		        $type = get_class($arg);
		    }
		    $variables .= "(".$type.")";
		}
		if (!in_array($variables, $validParameters)) {
		    throw new Exception("Invalid parameter types: ".str_replace(")(", ", ", $variables));
		}
		return true;
	}

	/**
	 * Service Call: CreateInvoice
	 * Parameter options:
	 * (CreateInvoice) parameters
	 * @param mixed,... See function description for parameter options
	 * @return CreateInvoiceResponse
	 * @throws Exception invalid function signature message
	 */
	public function CreateInvoice($mixed = null) {
		$validParameters = array(
			"(CreateInvoice)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("CreateInvoice", $args);
	}


	/**
	 * Service Call: CreateCashReceipt
	 * Parameter options:
	 * (CreateCashReceipt) parameters
	 * @param mixed,... See function description for parameter options
	 * @return CreateCashReceiptResponse
	 * @throws Exception invalid function signature message
	 */
	public function CreateCashReceipt($mixed = null) {
		$validParameters = array(
			"(CreateCashReceipt)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("CreateCashReceipt", $args);
	}


	/**
	 * Service Call: ConvertExternalInvoice
	 * Parameter options:
	 * (ConvertExternalInvoice) parameters
	 * @param mixed,... See function description for parameter options
	 * @return ConvertExternalInvoiceResponse
	 * @throws Exception invalid function signature message
	 */
	public function ConvertExternalInvoice($mixed = null) {
		$validParameters = array(
			"(ConvertExternalInvoice)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("ConvertExternalInvoice", $args);
	}


	/**
	 * Service Call: RegisterExternalInvoice
	 * Parameter options:
	 * (RegisterExternalInvoice) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RegisterExternalInvoiceResponse
	 * @throws Exception invalid function signature message
	 */
	public function RegisterExternalInvoice($mixed = null) {
		$validParameters = array(
			"(RegisterExternalInvoice)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RegisterExternalInvoice", $args);
	}


	/**
	 * Service Call: DownloadInvoice
	 * Parameter options:
	 * (DownloadInvoice) parameters
	 * @param mixed,... See function description for parameter options
	 * @return DownloadInvoiceResponse
	 * @throws Exception invalid function signature message
	 */
	public function DownloadInvoice($mixed = null) {
		$validParameters = array(
			"(DownloadInvoice)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("DownloadInvoice", $args);
	}


	/**
	 * Service Call: DownloadInvoices
	 * Parameter options:
	 * (DownloadInvoices) parameters
	 * @param mixed,... See function description for parameter options
	 * @return DownloadInvoicesResponse
	 * @throws Exception invalid function signature message
	 */
	public function DownloadInvoices($mixed = null) {
		$validParameters = array(
			"(DownloadInvoices)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("DownloadInvoices", $args);
	}


	/**
	 * Service Call: GetInvoiceData
	 * Parameter options:
	 * (GetInvoiceData) parameters
	 * @param mixed,... See function description for parameter options
	 * @return GetInvoiceDataResponse
	 * @throws Exception invalid function signature message
	 */
	public function GetInvoiceData($mixed = null) {
		$validParameters = array(
			"(GetInvoiceData)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("GetInvoiceData", $args);
	}


	/**
	 * Service Call: DownloadCashReceipt
	 * Parameter options:
	 * (DownloadCashReceipt) parameters
	 * @param mixed,... See function description for parameter options
	 * @return DownloadCashReceiptResponse
	 * @throws Exception invalid function signature message
	 */
	public function DownloadCashReceipt($mixed = null) {
		$validParameters = array(
			"(DownloadCashReceipt)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("DownloadCashReceipt", $args);
	}


	/**
	 * Service Call: GetNavOnlineszamlaStatus
	 * Parameter options:
	 * (GetNavOnlineszamlaStatus) parameters
	 * @param mixed,... See function description for parameter options
	 * @return GetNavOnlineszamlaStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function GetNavOnlineszamlaStatus($mixed = null) {
		$validParameters = array(
			"(GetNavOnlineszamlaStatus)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("GetNavOnlineszamlaStatus", $args);
	}


	/**
	 * Service Call: ValidateNavOnlineszamlaUserData
	 * Parameter options:
	 * (ValidateNavOnlineszamlaUserData) parameters
	 * @param mixed,... See function description for parameter options
	 * @return ValidateNavOnlineszamlaUserDataResponse
	 * @throws Exception invalid function signature message
	 */
	public function ValidateNavOnlineszamlaUserData($mixed = null) {
		$validParameters = array(
			"(ValidateNavOnlineszamlaUserData)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("ValidateNavOnlineszamlaUserData", $args);
	}


	/**
	 * Service Call: RegisterChildCompany
	 * Parameter options:
	 * (RegisterChildCompany) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RegisterChildCompanyResponse
	 * @throws Exception invalid function signature message
	 */
	public function RegisterChildCompany($mixed = null) {
		$validParameters = array(
			"(RegisterChildCompany)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RegisterChildCompany", $args);
	}


	/**
	 * Service Call: RegisterCompany
	 * Parameter options:
	 * (RegisterCompany) parameters
	 * @param mixed,... See function description for parameter options
	 * @return RegisterCompanyResponse
	 * @throws Exception invalid function signature message
	 */
	public function RegisterCompany($mixed = null) {
		$validParameters = array(
			"(RegisterCompany)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("RegisterCompany", $args);
	}


	/**
	 * Service Call: UpdateNavOnlineszamlaSettings
	 * Parameter options:
	 * (UpdateNavOnlineszamlaSettings) parameters
	 * @param mixed,... See function description for parameter options
	 * @return UpdateNavOnlineszamlaSettingsResponse
	 * @throws Exception invalid function signature message
	 */
	public function UpdateNavOnlineszamlaSettings($mixed = null) {
		$validParameters = array(
			"(UpdateNavOnlineszamlaSettings)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("UpdateNavOnlineszamlaSettings", $args);
	}


	/**
	 * Service Call: SaveAccountBlock
	 * Parameter options:
	 * (SaveAccountBlock) parameters
	 * @param mixed,... See function description for parameter options
	 * @return SaveAccountBlockResponse
	 * @throws Exception invalid function signature message
	 */
	public function SaveAccountBlock($mixed = null) {
		$validParameters = array(
			"(SaveAccountBlock)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("SaveAccountBlock", $args);
	}


	/**
	 * Service Call: SavePaymentMethod
	 * Parameter options:
	 * (SavePaymentMethod) parameters
	 * @param mixed,... See function description for parameter options
	 * @return SavePaymentMethodResponse
	 * @throws Exception invalid function signature message
	 */
	public function SavePaymentMethod($mixed = null) {
		$validParameters = array(
			"(SavePaymentMethod)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("SavePaymentMethod", $args);
	}


}}

?>