<?php
include('connect.php');
include('adminsession.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Use the session information to identify the admin
    $admin_check = $_SESSION['login_admin'];

    // You may need to modify the SQL query based on your database schema
    $sql = "UPDATE request SET Status = 'Approved', ApprovedBy = '$admin_check' WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Request Approved!'); window.location.href = 'adminpendingrequest.php';</script>";
    } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>