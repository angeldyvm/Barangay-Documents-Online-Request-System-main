<?php
include('connect.php');
$firstname = "";
$middlename = "";
$surname = "";
$fullname = "";
$homeadd = "";
$contact = "";
$datepicker = "";
$purposes = "";
$documents = "";
$fee = "";
$payment = "";
$service = "";
$status = "";

$db = mysqli_connect('localhost', 'root', '', 'bdors');
$result = mysqli_query($db, "SELECT * FROM request where Status='Canceled' and Username = '$user_check'");
?>