<?php

include("connect.php");
 

if (isset($_GET['id'])) {
	$id = $_GET['id'];

$sql = "DELETE FROM request WHERE id = '$id'";


$result = $conn->query($sql);

if ($result == TRUE) {
	echo "<script type='text/javascript'>alert('Request Deleted!'); window.location.href = 'admindenreq.php';</script>";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
    }
?>