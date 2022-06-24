<?php
$mysqli = new mysqli("remotemysql.com","ivOpirzaoj","niG8UEqz3y","ivOpirzaoj");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
