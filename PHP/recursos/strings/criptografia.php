<?php

$salt = 'sfdgagad';
$password = "9265afdfgsgsd" . $salt;

echo md5($password);
echo '<hr>';
echo sha1($password);
echo '<hr>';
echo crypt($password, 'Bruno');
echo '<hr>';

$senhaCrypt = base64_encode($password);
echo $senhaCrypt;
echo '<hr>';
echo base64_decode($senhaCrypt);

echo '<hr>';
echo hash('sha512', $password); //128
