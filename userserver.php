<?php 
    include('usersession.php');
	$db = mysqli_connect('localhost', 'root', '', 'bdors');

	
    $fname = "";
    $lname = "";
    $email = "";
    $uname = ""; 
    $pwd = "";
    $edit_state = false;
	

    if (isset($_GET['id'])) {
	$id = $_GET['id'];
	}
	
    
	if (isset($_POST['save'])) {
		$_SESSION['msg'] = "Click the Edit Button First"; 
        header('location: usersetting.php');
    } 

  
    if (isset($_POST['update'])){
        $fname = $_POST['FirstName'];
        $lname = $_POST['LastName'];
        $email = $_POST['Email'];
        $uname = $_POST['Username'];
        $pwd = $_POST['Password'];
		$id = $_GET['id'];
		
        $sql = mysqli_query($db, "UPDATE user SET FirstName='$fname', LastName='$lname', Email='$email', Username='$uname', Password='$pwd' WHERE Username = '$user_check'");
        echo "<script type='text/javascript'>alert('Update Successful!'); window.location.href = 'usersetting.php';</script>";
	    header("location: usersetting.php");
    }

    $results = mysqli_query($db, "SELECT * FROM user WHERE Username = '$user_check'");
?>