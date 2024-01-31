<?php
include('connect.php');


if (isset($_POST['checking_viewbtn'])) {
    $id = $_POST['id'];


    error_log("Checking view button for request ID: " . $requestId);
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM your_table WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch data and return as JSON
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo json_encode(['error' => 'Record not found']);
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
