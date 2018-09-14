<?php
/*
|--------------------------------------------------------------------------
| ABA PayWay API URL
|--------------------------------------------------------------------------
| API URL that is provided by PayWay must be required in your post form
|
*/
define('ABA_PAYWAY_API_URL', 'https://payway-dev.ababank.com/api/pwvkiriromv/');

/*
|--------------------------------------------------------------------------
| ABA PayWay API KEY
|--------------------------------------------------------------------------
| API KEY that is generated and provided by PayWay must be required in your post form
|
*/
define('ABA_PAYWAY_API_KEY', 'a03301dece230d884c3c9c6c68ad65ab');

/*
|--------------------------------------------------------------------------
| ABA PayWay Merchant ID
|--------------------------------------------------------------------------
| Merchant ID that is generated and provided by PayWay must be required in your post form
|
*/
define('ABA_PAYWAY_MERCHANT_ID', 'vkirirom');


class PayWayApiCheckout {

	/**
	 * Returns the getHash
	 * For PayWay security, you must follow the way of encryption for hash.
	 *
	 * @param string $transactionId
	 * @param string $amount
	 *
	 * @return string getHash
	 */
	public static function getHash($transactionId, $amount) {
		$hash = base64_encode(hash_hmac('sha512', ABA_PAYWAY_MERCHANT_ID . $transactionId . $amount, ABA_PAYWAY_API_KEY, true));
		return $hash;
	}

	/**
	 * Returns the getApiUrl
	 *
	 * @return string getApiUrl
	 */
	public static function getApiUrl() {
		return ABA_PAYWAY_API_URL;
	}
}