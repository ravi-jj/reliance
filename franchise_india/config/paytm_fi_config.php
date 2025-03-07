<?php
/*

- Use PAYTM_ENVIRONMENT as 'PROD' if you wanted to do transaction in production environment else 'TEST' for doing transaction in testing environment.
- Change the value of PAYTM_MERCHANT_KEY constant with details received from Paytm.
- Change the value of PAYTM_MERCHANT_MID constant with details received from Paytm.
- Change the value of PAYTM_MERCHANT_WEBSITE constant with details received from Paytm.
- Above details will be different for testing and production environment.

*/
define('PAYTM_ENVIRONMENT', 'PROD'); // PROD or TEST
define('PAYTM_MERCHANT_KEY', '5rhWKjQcFsNT5z_Y'); //(I%VyKUMWdwEDyh4z / u4vFXr1fZWdRHkga)Change this constant's value with Merchant key downloaded from portal
define('PAYTM_MERCHANT_MID', 'Franch06162233000595'); //(PaytmS01829682567544 / TECHOP10964184510936) Change this constant's value with MID (Merchant ID) received from Paytm
define('PAYTM_MERCHANT_WEBSITE', 'WEBPROD'); //(WEBSTAGING / TECHweb/TECHwap) Change this constant's value with Website name received from Paytm
define('PAYTM_INDUSTRY_TYPE_ID', 'Retail105'); //(WEBSTAGING / TECHweb/TECHwap) Change this constant's value with Website name received from Paytm

$PAYTM_STATUS_QUERY_NEW_URL='https://securegw-stage.paytm.in/merchant-status/getTxnStatus';
$PAYTM_TXN_URL='https://securegw-stage.paytm.in/theia/processTransaction';

if (PAYTM_ENVIRONMENT == 'PROD') {
	$PAYTM_STATUS_QUERY_NEW_URL='https://securegw.paytm.in/merchant-status/getTxnStatus';
	$PAYTM_TXN_URL='https://securegw.paytm.in/theia/processTransaction';
}
define('PAYTM_REFUND_URL', '');
define('PAYTM_STATUS_QUERY_URL', $PAYTM_STATUS_QUERY_NEW_URL);
define('PAYTM_STATUS_QUERY_NEW_URL', $PAYTM_STATUS_QUERY_NEW_URL);
define('PAYTM_TXN_URL', $PAYTM_TXN_URL);
?>