<?php
session_start();

if ($_SESSION['authuser'] !=1){
echo "Sorry ,but you don't have permission";
exit();
}
?>

<!DOCTYPE html>
<html>
<body>