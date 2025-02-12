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
                <h3 class="fw-bold text-uppercase"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data Produk</h3>
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
                        <label for="namaproduk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control form-control-md w-50" id="namaproduk"
                            placeholder="Masukkan Nama Produk" name="namaproduk" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah Produk</label>
                        <input type="number" class="form-control form-control-md w-50" id="jumlah"
                            placeholder="Masukkan Jumlah Produk" name="jumlah" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Produk</label>
                        <input type="number" class="form-control form-control-md w-50" id="harga"
                            placeholder="Masukkan Harga Produk" name="harga" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control w-50" id="tanggal" name="tanggal" required>
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
        $namaproduk = $_POST["namaproduk"];
        $jumlah = $_POST["jumlah"];
        $harga = $_POST["harga"];
        $tanggal = $_POST["tanggal"];

        $errors = array();

        // Check for empty fields (improved)
        $required_fields = array("nis", "namaproduk", "jumlah", "harga", "tanggal");
        foreach ($required_fields as $field) {
            if (empty($_POST[$field])) {
                array_push($errors, ucfirst($field) . " is required"); // More user-friendly message
            }
        }


        // Validate data types and values (improved)
        if (!is_numeric($nis) || $nis <= 0) {
            array_push($errors, "NIS must be a positive number");
        }
        if (!is_numeric($jumlah) || $jumlah <= 0) {
            array_push($errors, "Jumlah Produk must be a positive number");
        }
        if (!is_numeric($harga) || $harga <= 0) {
            array_push($errors, "Harga Produk must be a positive number");
        }


        // Check for duplicate product name (if needed)
        $check_duplicate_query = "SELECT * FROM produk WHERE namaproduk = ?";
        $stmt_check = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($stmt_check, $check_duplicate_query)) {
            mysqli_stmt_bind_param($stmt_check, "s", $namaproduk);
            mysqli_stmt_execute($stmt_check);
            mysqli_stmt_store_result($stmt_check);
            if (mysqli_stmt_num_rows($stmt_check) > 0) {
                array_push($errors, "Product with this name already exists!");
            }
            mysqli_stmt_close($stmt_check);
        } else {
            die("Error preparing duplicate check query: " . mysqli_error($conn));
        }




        if (count($errors) > 0) {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>";
            foreach ($errors as $error) {
                echo "$error<br>";
            }
            echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";

        } else {
            $sql = "INSERT INTO produk (nis, namaproduk, jumlah, harga, tanggal) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                die("SQL error: " . mysqli_error($conn)); // Include error message
            }

            mysqli_stmt_bind_param($stmt, "sssss", $nis, $namaproduk, $jumlah, $harga, $tanggal);

            if (mysqli_stmt_execute($stmt)) {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>Product added successfully! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                // Optionally redirect or clear the form after successful insertion
                // header("Location: produk.php");  // Redirect to product list page.
                // exit(); // Important: Stop further execution after redirect
            } else {
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Error inserting product: " . mysqli_error($conn) . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
            }

            mysqli_stmt_close($stmt);
        }

        if (!headers_sent()) { // Check if headers have already been sent
            header("Location: produk.php");
            exit();
        } else {
            echo "<script>window.location.href='produk.php';</script>"; // Fallback redirect with JavaScript
            exit();
        }


    }

    ?>




</body>

</html>