<?php
include "koneksi.php";

if (isset($_GET['id'])) { // Check if the 'id' parameter is set
    $id = $_GET['id'];

    // **Important Security: Use prepared statements to prevent SQL injection**
    $stmt = $conn->prepare("DELETE FROM user WHERE iduser = ?");  // Use a question mark as a placeholder
    $stmt->bind_param("i", $id); // "i" indicates an integer

    if ($stmt->execute()) {
        header("Location: user.php"); // Redirect back to the user list
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "User ID not provided.";
}

$conn->close();
?>