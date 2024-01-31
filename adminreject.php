<?php
include('connect.php');
include('adminsession.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if the request has already been denied
    $checkQuery = "SELECT * FROM request WHERE id = '$id' AND Status = 'Denied'";
    $result = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($result) == 0) {
        // If not denied, update the request status, set Service and Payment to 'Denied', and record the admin who denied the request
        $adminUsername = $_SESSION['login_admin'];
        $updateQuery = "UPDATE request SET Status ='Denied', Service ='Denied', Payment='Denied', DeniedBy = '$adminUsername' WHERE id = '$id'";

        if (mysqli_query($conn, $updateQuery)) {
            echo "<script type='text/javascript'>alert('Request Denied!'); window.location.href = 'adminpendingrequest.php';</script>";
        } else {
            echo "Error: " . $updateQuery . " " . mysqli_error($conn);
        }
    } else {
        // If already denied, show a message indicating that the request is already denied
        echo "<script type='text/javascript'>alert('Request is already denied!'); window.location.href = 'adminpendingrequest.php';</script>";
    }
}
?>