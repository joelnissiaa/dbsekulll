<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>





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

        /* Button Styles 

    .btn {
        width: 100%;
        height: 40px;
        margin-bottom: 20px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #5c636a;
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

    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data Siswa</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="number" class="form-control w-50" id="nis" placeholder="Masukkan NIS" min="1"
                            name="nis" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="namasiswa" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control form-control-md w-50" id="namasiswa"
                            placeholder="Masukkan Nama Siswa" name="namasiswa" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control form-control-md w-50" id="alamat"
                            placeholder="Masukkan Alamat" name="alamat" autocomplete="off" required>
                    </div>
                    <div class="form-floating">
                        <select class="form-select form-control-md w-50" id="floatingSelectGrid" name="jeniskelamin">
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan </option>
                        </select>
                        <label for="floatingSelectGrid">Jenis Kelamin</label>
                    </div>

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control form-control-md w-50" id="kelas"
                            placeholder="Masukkan Kelas" name="kelas" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control w-50" id="ttl" name="ttl" max="01-01-2006" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input class="form-control form-control-sm w-50" id="foto" name="foto" type="file">
                    </div>

                    <hr>
                    <a href="produk.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    require_once "koneksi.php"; // Include the database connection
    
    if (isset($_POST["simpan"])) {
        $nis = $_POST["nis"];
        $namasiswa = $_POST["namasiswa"];
        $alamat = $_POST["alamat"];
        $jeniskelamin = $_POST["jeniskelamin"];
        $ttl = $_POST["ttl"];
        $kelas = $_POST["kelas"];
        $foto = $_FILES["foto"];

        $errors = array();

        // Check for empty fields
        if (empty($nis) || empty($namasiswa) || empty($alamat) || empty($jeniskelamin) || empty($ttl) || empty($kelas) || empty($foto)) {
            array_push($errors, "All fields are required");
        }

        // Validate data types (more robust)
        if (!is_numeric($nis) || $nis <= 0) {  // Check for positive numbers
            array_push($errors, "NIS must be a positive number");
        }

        // File upload handling (most robust)
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);  // Create directory if it doesn't exist
        }

        if ($foto["error"] == UPLOAD_ERR_NO_FILE) {
            array_push($errors, "Please select a file to upload.");
            $uploadOk = 0; // Set uploadOk even if no file, to prevent other file errors.
        } else { // Only proceed if a file was selected
            $target_file = $target_dir . basename($foto["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $check = getimagesize($foto["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                array_push($errors, "File is not an image.");
                $uploadOk = 0;
            }

            if ($foto["size"] > 500000000) { // 5MB limit
                array_push($errors, "Sorry, your file is too large (max 5MB).");
                $uploadOk = 0;
            }

            $allowed_types = array("jpg", "jpeg", "png", "gif");
            if (!in_array($imageFileType, $allowed_types)) {
                array_push($errors, "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
                $uploadOk = 0;
            }

            if ($uploadOk == 1) { // Only try to move if other checks passed
                if (move_uploaded_file($foto["tmp_name"], $target_file)) {
                    $foto_path = $target_file;
                } else {
                    array_push($errors, "Sorry, there was an error uploading your file.");
                    $uploadOk = 0;
                }
            }
        } // End of file selected check.
    
        // Check for duplicate product name (if needed)
        $sql = "SELECT * FROM siswa WHERE nis = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            die("SQL error");
        }
        mysqli_stmt_bind_param($stmt, "s", $nis);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            array_push($errors, "Product with this name already exists!");
        }
        mysqli_stmt_close($stmt);

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        } else {
            $sql = "INSERT INTO produk (nis, namasiswa, alamat, jeniskelamin, ttl, kelas, foto) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                die("SQL error");
            }
            mysqli_stmt_bind_param(
                $stmt,
                "ssssss",
                $nis,
                $namasiswa, // Use $foto_path (even if it might be empty if no file)
                $alamat,
                $jeniskelamin,
                $ttl,
                $kelas,
                $foto
            );

            if (mysqli_stmt_execute($stmt)) {  // Check for successful execution
                echo "<div class='alert alert-success'>Product added successfully.</div>";
                // header("Location: index.php"); // Redirect after successful insertion.
                // exit();
            } else {
                echo "<div class='alert alert-danger'>Error inserting product: " . mysqli_error($conn) . "</div>"; // Display MySQL error
            }

            mysqli_stmt_close($stmt);
        }
    }
    ?>




</body>

</html>