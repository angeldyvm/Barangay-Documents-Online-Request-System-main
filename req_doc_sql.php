<?php
    include('usersession.php');
    $requestingfor = $_POST['requestingfor'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $surname = $_POST['surname'];
    $birthdate = $_POST['birthdate'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $homeadd = $_POST['homeadd'];
    $contact = $_POST['contact'];
    $datepicker = $_POST['datepicker'];
    $purposes = $_POST['purposes'];
    $documents = $_POST['documents'];
    $fee = $_POST['fee'];
    $ValidID = $_POST['ValidID'];
    $FrontID = $_POST['FrontID'];
    $BackID = $_POST['BackID'];
    $payment = $_POST['payment'];
    $service = $_POST['service'];
    $status = $_POST['status'];
    $username =  $user_check;
    
  
    $conn = new mysqli('localhost', 'root', '', 'bdors');
    if($conn->connect_error){
    echo "$conn->connect_error";
  
    die("Connection Failed : ". $conn->connect_error);  
  } 
  
    else {
		$stmt = $conn->prepare("insert into request(Username, requestingfor, firstname, middlename, surname, Birthdate, Age, Gender, HomeAddress, Contact, DateofRequest, Purposes, Documents, Fee, ValidID, FrontID, BackID, Payment, Service, Status) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssissssssssbbsss", $username, $requestingfor, $firstname, $middlename, $surname, $birthdate, $age, $gender, $homeadd, $contact, $datepicker, $purposes, $documents, $fee, $ValidID, $FrontID, $BackID, $payment, $service, $status);
    $execval = $stmt->execute();
    

    echo "<script type='text/javascript'>alert('Your Request is Being Process');window.location.href = 'userrequest.php';</script>";
	  // header("location: userrequest.php");
    $stmt->close();
    $conn->close();
  } 
//  window.location.href = 'req_doc.php';

?>

