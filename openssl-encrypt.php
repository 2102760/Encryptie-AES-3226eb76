<?php

$plaintext = "Hallo";
$cipher = "aes-128-gcm";
$key = "afs";
$ivlen = openssl_cipher_iv_length($cipher);
$iv = openssl_random_pseudo_bytes( $ivlen);
$encrypt = openssl_encrypt($plaintext, $cipher, $key, $options = 0, $iv, $tag);
echo "Jou encryptie is:" . PHP_EOL;
echo $encrypt . PHP_EOL;
$decrypt = openssl_decrypt($encrypt, $cipher, $key, $options = 0, $iv, $tag);
echo "Jou decryptie is:" . PHP_EOL;
echo $decrypt . PHP_EOL;