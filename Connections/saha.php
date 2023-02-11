<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_saha = "localhost";
$database_saha = "mido";
$username_saha = "root";
$password_saha = "Trading123"; 
$saha = mysqli_connect($hostname_saha, $username_saha, $password_saha, $database_saha) or trigger_error(mysqli_error($saha),E_USER_ERROR);
 
mysqli_set_charset( $saha, 'utf8');
?>