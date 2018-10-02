<?php
$key = md5("administrator");
$salt = md5("administrator");

function encryptData($data, $key){
	$data = rtrim(base64_decode(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $data, MCRYPT_MODE_ECB)));
}

function decryptData($data, $key){
	$data = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($data), MCRYPT_MODE_ECB));
}

function hashword($data, $salt){
	$data = crypt($data, '$1$' . $salt . '$'); 
}

?>