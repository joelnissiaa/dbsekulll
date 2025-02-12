<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="assets/img/LOGOrpl.png" rel="icon" />
    <title>Register</title>
</head>

<body>
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
                <h1 class="sitename">SMK</h1>
                <span>.PK</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login-option.php">Login Option</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <a class="btn-getstarted" href="#"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
            <?php else: ?>
                <a class="btn-getstarted" href="register.php">Register</a>
            <?php endif; ?>
        </div>
    </header>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #20664f">
                <div class="featured-image mb-3">
                    <img src="images/1.png" class="img-fluid" style="width: 250px" />
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600">Be
                    Verified
                </p>
                <small class="text-white text-wrap text-center"
                    style="width: 17rem; font-family: 'Courier New', Courier, monospace">SMK Negeri 10 Semarang</small>
            </div>

            <div class="col-md-6 right-box">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Hello, Again</h2>
                            <p>Here is the registration place for Teachera</p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="nip" class="form-control form-control-lg bg-light fs-6"
                                placeholder="NIP" required />
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="namaguru" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Nama" required />
                        </div>
                        <div class="input-group mb-3">
                            <div class="col-md">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelectGrid" name="jeniskelamin">
                                        <option value="1">Laki-laki</option>
                                        <option value="2">Perempuan </option>
                                    </select>
                                    <label for="floatingSelectGrid">Jenis Kelamin</label>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" name="kontak" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Contact" required />
                        </div>
                        <!-- <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Password" required minlength="8" />
                            </div>
                            <div class="input-group mb-1">
                                <input type="password" name="repeat_password"
                                    class="form-control form-control-lg bg-light fs-6" placeholder="Repeat Password"
                                    required />
                            </div> -->

                        <div class="mb-3"> <label for="foto" class="form-label">Foto Profil</label>
                            <input class="form-control" type="file" id="foto" name="foto">
                        </div>

                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck" />
                                <label for="formCheck" class="form-check-label text-secondary"><small>Remember
                                        Me</small></label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" name="submit" class="btn btn-lg btn-primary w-100 fs-6"
                                style="background: #20664f; color: #ffffff">Sign Up</button>
                        </div>
                    </div>
                </form>

                <?php
                require_once "koneksi.php";

                if (isset($_POST["submit"])) {
                    $nip = $_POST["nip"];
                    $namaGuru = $_POST["namaguru"];
                    $jeniskelamin = $_POST["jeniskelamin"];
                    $kontak = $_POST["kontak"];
                    $foto = $_FILES["foto"];

                    $errors = array();
                    $foto_path = "";

                    // File Upload Validation
                    if ($foto['error'] == UPLOAD_ERR_OK) { // Check if file uploaded successfully
                        $target_dir = "uploads/";
                        $original_filename = basename($foto["name"]);
                        $imageFileType = strtolower(pathinfo($original_filename, PATHINFO_EXTENSION));

                        // Generate a unique filename to avoid conflicts
                        $new_filename = uniqid() . "." . $imageFileType;
                        $target_file = $target_dir . $new_filename;
                        $uploadOk = 1;

                        $check = getimagesize($foto["tmp_name"]);
                        if ($check === false) {
                            array_push($errors, "File is not an image.");
                            $uploadOk = 0;
                        }

                        if ($foto["size"] > 5000000) {
                            array_push($errors, "File is too large (max 5MB)");
                            $uploadOk = 0;
                        }

                        $allowed_types = array("jpg", "jpeg", "png", "gif");
                        if (!in_array($imageFileType, $allowed_types)) {
                            array_push($errors, "Only JPG, JPEG, PNG & GIF files are allowed");
                            $uploadOk = 0;
                        }

                        if ($uploadOk == 1) {
                            if (move_uploaded_file($foto["tmp_name"], $target_file)) {
                                $foto_path = $target_file;
                            } else {
                                array_push($errors, "Error uploading file.");
                            }
                        }
                    } elseif ($foto['error'] != UPLOAD_ERR_NO_FILE) { // If there was an upload error (other than no file)
                        array_push($errors, "Error uploading file: " . $foto['error']);
                    }

                    if (count($errors) > 0) {
                        foreach ($errors as $error) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    } else {
                        // Prepare SQL statement
                        $sql = "INSERT INTO guru (nip, namaguru, jeniskelamin, kontak, foto) VALUES (?, ?, ?, ?, ?)";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            die("SQL error");
                        }
                        mysqli_stmt_bind_param($stmt, "sssss", $nip, $namaGuru, $jeniskelamin, $kontak, $foto_path);

                        if (mysqli_stmt_execute($stmt)) {
                            echo "<div class='alert alert-success'>Registration successful.</div>";
                        } else {
                            echo "<div class='alert alert-danger'>Error during registration: " . mysqli_error($conn) . "</div>";
                        }

                        mysqli_stmt_close($stmt);
                    }
                }
                ?>

            </div>
        </div>
    </div>

    <footer id="footer" class="footer dark-background">
        <!-- Footer content remains the same -->
    </footer>
</body>

</html>