<?php

require('../ChargeBee.php');

function test($respJson){
		array($respJson, '');
		$resp = json_decode($respJson, true);
		$res = new ChargeBee_Result($resp);
		print_r($res->estimate());
		print_r($res->estimate()->invoiceEstimate);
		print_r($res->estimate()->invoiceEstimate->lineItems);
}

$json =  '{"estimate": {
    "created_at": 1436275938,
	"subscription_status": "in_trial",
	"subscription_id": "gf45sajhjhga656sa",
    "subscription_next_billing_at": 1438954338,
	"object": "estimate",
	"invoice_estimate": {
		"recurring": true,
	    "collect_now": false,
	    "sub_otal": 500,
		"total": 900,
		"amount_due": 0,
		"object": "invoice_estimate",
	    "line_items": [{
			"date_from": 1438954338,
			"date_to": 1441632738,
			"unit_amount": 900,
	        "quantity": 1,
			"tax_amount": 0,
	        "object": "line_item",
			"discount_amount": 0,
			"line_amount": 1900,
	        "description": "Basic",
			"entity_type": "plan"
		}],
		"discounts": [],
		"taxes": []
	}
}}';

test($json);
?>