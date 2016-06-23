<?php

/*
 * RC4 symmetric cipher encryption/decryption
 *
 * @license Public Domain
 * @param string key - secret key for encryption/decryption
 * @param string str - string to be encrypted/decrypted
 * @return string
 */


/* RC $*/
function rc4($key, $str) {

//pembangkitan kunci
	$s = array();
	for ($i = 0; $i < 4; $i++) {
		$s[$i] = $i;
	}
	$j = 0;
	for ($i = 0; $i < 4; $i++) {
		//ord return asci char
		$j = ($j + $s[$i] + ord($key[$i % strlen($key)])) % 4;
		$x = $s[$i];
		$s[$i] = $s[$j];
		$s[$j] = $x;
	}
	$i = 0;
	$j = 0;
	$res = '';

	for ($y = 0; $y < strlen($str); $y++) {
		$i = ($i + 1) % 4;
		$j = ($j + $s[$i]) % 4;
		$x = $s[$i];
		$s[$i] = $s[$j];
		$s[$j] = $x;
		$res .= $str[$y] ^ chr($s[($s[$i] + $s[$j]) % 4]);
	}
	return $res;
}


function rc4Decrypt($key, $res) {
	return rc4($key, $res);
}
?>
