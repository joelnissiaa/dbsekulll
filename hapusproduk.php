<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // **Prepared Statement for Security:**
    $stmt = $conn->prepare("DELETE FROM produk WHERE idproduk = ?");
    $stmt->bind_param("i", $id); // "i" indicates an integer

    if ($stmt->execute()) {
        // After successful deletion, you might want to delete the image file as well.
        // Get the image filename first:
        $sql_get_image = "SELECT foto FROM produk WHERE idproduk = ?";
        $stmt_get_image = $conn->prepare($sql_get_image);
        $stmt_get_image->bind_param("i", $id);
        $stmt_get_image->execute();
        $stmt_get_image->bind_result($foto); // Bind the result to the $foto variable
        $stmt_get_image->fetch();
        $stmt_get_image->close();

        if (!empty($foto)) { // Check if a filename was retrieved
            $image_path = $foto; // Adjust path if necessary
            if (file_exists($image_path)) {
                unlink($image_path); // Delete the image file
            }
        }


        header("Location: produk.php"); // Redirect back to the product list
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Product ID not provided.";
}

$conn->close();
?>