<?php
session_start();
include 'connect.php';

if(isset($_GET['token']))
{
    $token = $_GET['token'];
    $verify_query = "SELECT verify_token FROM user WHERE verify_token='$token' LIMIT 1";
    $verify_query_run = mysqli_query($conn, $verify_query);

    if(mysqli_num_rows($verify_query_run) > 0)
    {
        $row = mysqli_fetch_array($verify_query_run);
        
        if($row['verify_token'] == "0" )
        {
            $clicked_token = $row['verify_token'];
            $update_query = "UPDATE user SET verify_status='1' WHERE verify_token='$clicked_token' LIMIT 1";
            $update_query_run = mysqli_query($conn, $update_query);

            if($update_query_run)
            {
                echo "<script type='text/javascript'>alert('Your account has been verified successfully!'); window.location.href = 'login.php';</script>";
                exit(0);

            }
            else 
            {
                echo "<script type='text/javascript'>alert('Verification Failed!'); window.location.href = 'login.php';</script>";
                exit(0);

            }



        }
        else
        {
        echo "<script type='text/javascript'>alert('Email Already Verified. Please Login'); window.location.href = 'login.php';</script>";
        exit(0);


        }

    }
    else
    {
        echo "<script type='text/javascript'>alert('This token does not exist'); window.location.href = 'login.php';</script>";

    }


}
else
{
    echo "<script type='text/javascript'>alert('Not Allowed'); window.location.href = 'login.php';</script>";

}

?>