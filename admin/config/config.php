<?php
$mysqli = new mysqli("localhost","root","phamthithanhhong","web_hethongsoatve");

// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nỗi MYSQLi bị lỗi" . $mysqli->connect_error;
  exit();
}
?>