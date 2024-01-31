<?php 
	session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;



    require 'vendor/autoload.php';

    function sendemail_verify($uname,$email,$verify_token)
    {
        try{
        $mail = new PHPMailer(true);
        $mail->isSMTP();                                            //Send using SMTP
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
        
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'bgydr171@gmail.com';                     //SMTP username
    $mail->Password   = 'ylgd yyjw mlub okvm';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;  
    $mail->AuthType = 'LOGIN';                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('bgydr171@gmail.com', $uname);
    $mail->addAddress($email);     //Add a recipient

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Please Verify Your Email';
    $Email_template = "
    <h2>you have registered in bdors171</h2>
     <h5>verify your email add to login with the given link below</h5>
     <br></br>
     <a href='http://localhost/Barangay-Documents-Online-Request-System-main/Barangay-Documents-Online-Request-System-main/Barangay-Documents-Online-Request-System-main/verify_email.php?token=$verify_token'>Click me </a>";

    $mail->Body    = $Email_template;
    


    $mail->send();
    echo "Email sent successfully";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} 

    }
	
	
    if(isset($_POST['signup'])){ 
	

	include_once 'connect.php';
	

    $fname = ($_POST['FirstName']);
	$lname = ($_POST['LastName']);
    $email = ($_POST['Email']);
    $uname = ($_POST['Username']);
    $pwd =($_POST['Password']);
	$pwd2 =($_POST['CPassword']);
	$Status = $_POST['Status'];
    $verify_token = md5(rand());

    if ($pwd != $pwd2) {
    echo "<script type='text/javascript'>alert('Passwords do not match!'); window.location.href = 'login.php';</script>";
} else {
    // Check if email already exists
    $check_email_query = "SELECT Email FROM user WHERE Email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($conn, $check_email_query);

    if (mysqli_num_rows($check_email_query_run) > 0) {
        echo "<script type='text/javascript'>alert('Email ID already exists!'); window.location.href = 'login.php';</script>";
    } else {
        // Insert user data
        $sql = "INSERT INTO user (FirstName, LastName, Email, Username, Password, verify_token) VALUES ('$fname', '$lname', '$email', '$uname', '$pwd', '$verify_token')";
        
        if (mysqli_query($conn, $sql)) {
            sendemail_verify($uname, $email, $verify_token);
            
            echo "<script type='text/javascript'>alert('Registration Successful! Please verify your email address.'); window.location.href = 'login.php';</script>";
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);


    }
?>