<?php
	$db = mysqli_connect('localhost', 'root', '', 'bdors');
	
	
    if (isset($_GET['id'])) {
	$id = $_GET['id'];
	
	
    $sql = "UPDATE request SET Status ='Canceled', Service ='Canceled', Payment='Canceled' WHERE id='$id'";
	
	if (mysqli_query($db, $sql)) {
	    echo "<script type='text/javascript'>alert('Request Canceled!'); window.location.href = 'userrequest.php';</script>";
        } 
		else{
            echo "Error: " . $sql . " " . mysqli_error($db);
        }
        mysqli_close($db);
	}
?>	   