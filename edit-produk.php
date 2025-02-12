<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM produk WHERE idproduk = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "User not found.";
        exit();
    }
} else {
    echo "No user ID provided.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaproduk = $_POST['namaproduk'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $harga = $_POST['harga'];

    // Handle image upload
    $targetDir = "uploads/"; // Directory where you want to save the images (make sure it exists and has correct permissions)
    $uploadOk = 1;
    $fotoPath = $row['foto']; // Default to the existing photo if no new one is uploaded

    if (!empty($_FILES["foto"]["name"])) { // Check if a new photo was actually uploaded
        $fileName = basename($_FILES["foto"]["name"]);
        $targetFile = $targetDir . $fileName;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Basic image checks (improve these for production)
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        if (file_exists($targetFile)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        if ($_FILES["foto"]["size"] > 5000000) { // Increased file size limit (adjust as needed)
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile)) {
                $fotoPath = $targetFile; // Update the path if the upload was successful
            } else {
                echo "Sorry, there was an error uploading your file.";
                $uploadOk = 0; // Set uploadOk to 0 if there's a problem
            }
        }
    }

    if ($uploadOk == 1) { // Only update the database if the upload was successful (or no new file was selected)
        $update_sql = "UPDATE produk SET 
            namaproduk = '$namaproduk', 
            jumlah = '$jumlah', 
            tanggal = '$tanggal', 
            harga = '$harga'
            WHERE idproduk = '$id'";


        if ($conn->query($update_sql) === TRUE) {
            header("Location: produk.php");
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>
</head>

<style>
    /* Global Styles */

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: #f9f9f9;
    }

    .container {
        max-width: 800px;
        margin: 40px auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .col-md {
        flex-basis: 100%;
    }

    /* Form Styles */

    form {
        margin-top: 20px;
    }

    .form-label {
        display: block;
        margin-bottom: 10px;
    }

    .form-control {
        width: 100%;
        height: 40px;
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-control:focus {
        border-color: #aaa;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-select {
        width: 100%;
        height: 40px;
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-select:focus {
        border-color: #aaa;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-check {
        margin-bottom: 20px;
    }

    .form-check-input {
        margin-right: 10px;
    }

    .form-check-label {
        font-weight: bold;
    }





    .btn {
        width: ;
        height: 40px;
        margin-bottom: 20px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #20664f;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: rgb(29, 61, 50);
    }

    .btn-secondary {
        background-color: rgb(109, 114, 112);
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: rgb(78, 80, 79);
    }

    /* Responsive Design */

    @media (max-width: 768px) {
        .container {
            margin: 20px auto;
        }
    }

    @media (max-width: 480px) {
        .container {
            margin: 10px auto;
        }

        .form-control {
            height: 30px;
        }

        .form-select {
            height: 30px;
        }

        .btn {
            height: 30px;
        }
    }
</style>

<body>
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-person-fill"></i>&nbsp;Edit User</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=" . $id); ?>">

                    <div class="mb-3">
                        <label for="namaproduk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="namaproduk" name="namaproduk"
                            value="<?php echo $row['namaproduk']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah"
                            value="<?php echo $row['jumlah']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                            value="<?php echo $row['tanggal']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga"
                            value="<?php echo $row['harga']; ?>" required>
                    </div>

                    <a href="produk.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>