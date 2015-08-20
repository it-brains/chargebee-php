<?php

class ChargeBee_Transaction extends ChargeBee_Model
{

  protected $allowed = array('id', 'customerId', 'subscriptionId', 'paymentMethod', 'referenceNumber', 'gateway',
'type', 'date', 'amount', 'idAtGateway', 'status', 'errorCode', 'errorText', 'voidedAt', 'paymentMethodString','referenceTxnId', 'linkedInvoices', 'linkedCreditNotes', 'currencyCode');



  # OPERATIONS
  #-----------

  public static function all($params = array(), $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("transactions"), $params, $env, $headers);
  }

  public static function transactionsForCustomer($id, $params = array(), $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("customers",$id,"transactions"), $params, $env, $headers);
  }

  public static function transactionsForSubscription($id, $params = array(), $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("subscriptions",$id,"transactions"), $params, $env, $headers);
  }

  public static function transactionsForInvoice($id, $params = array(), $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("invoices",$id,"transactions"), $params, $env, $headers);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("transactions",$id), array(), $env, $headers);
  }

 }

?>