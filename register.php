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
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php" class="active">Register</a></li>
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
        <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600">Be Verified
        </p>
        <small class="text-white text-wrap text-center"
          style="width: 17rem; font-family: 'Courier New', Courier, monospace">SMK Negeri 10 Semarang</small>
      </div>

      <div class="col-md-6 right-box">
        <form action="" method="post">
          <div class="row align-items-center">
            <div class="header-text mb-4">
              <h2>Hello, Again</h2>
              <p>Here is the registration place for Users</p>
            </div>
            <div class="input-group mb-3">
              <input type="text" name="namauser" class="form-control form-control-lg bg-light fs-6"
                placeholder="Nama Lengkap" required />
            </div>
            <div class="input-group mb-3">
              <input type="text" name="username" class="form-control form-control-lg bg-light fs-6" placeholder="Nama"
                required />
            </div>
            <div class="input-group mb-3">
              <div class="col-md">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelectGrid" name="level">
                    <option value="1">Guru</option>
                    <option value="2">Siswa</option>
                    <option value="3">User</option>
                  </select>
                  <label for="floatingSelectGrid">Level</label>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control form-control-lg bg-light fs-6"
                placeholder="Email address" required />
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control form-control-lg bg-light fs-6"
                placeholder="Password" required minlength="8" />
            </div>
            <div class="input-group mb-1">
              <input type="password" name="repeat_password" class="form-control form-control-lg bg-light fs-6"
                placeholder="Repeat Password" required />
            </div>

            <div class="input-group mb-5 d-flex justify-content-between">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="formCheck" />
                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
              </div>
            </div>
            <div class="input-group mb-3">
              <button type="submit" name="submit" class="btn btn-lg btn-primary w-100 fs-6"
                style="background: #20664f; color: #ffffff">Sign Up</button>
            </div>
          </div>
        </form>
        <div class="row">
          <small>Already have an account? <a href="login.php">Sign In</a></small>
        </div>
        <?php
        if (isset($_POST["submit"])) {
          $namauser = $_POST["namauser"];
          $userName = $_POST["username"];
          $level = $_POST["level"]; // Now correctly retrieves the level value
          $emailuser = $_POST["email"];
          $password = $_POST["password"];
          $passwordRepeat = $_POST["repeat_password"];

          $errors = array();

          // Check for empty fields
          if (empty($namauser) || empty($userName) || empty($level) || empty($emailuser) || empty($password) || empty($passwordRepeat)) {
            array_push($errors, "All fields are required");
          }

          // Validate email format
          if (!filter_var($emailuser, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
          }

          // Check password length
          if (strlen($password) < 8) {
            array_push($errors, "Password must be at least 8 characters long");
          }

          // Check if passwords match
          if ($password !== $passwordRepeat) {
            array_push($errors, "Password does not match");
          }

          // Check if email already exists
          require_once "koneksi.php";
          $sql = "SELECT * FROM user WHERE emailuser = ?";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            die("SQL error");
          }
          mysqli_stmt_bind_param($stmt, "s", $emailuser);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if (mysqli_num_rows($result) > 0) {
            array_push($errors, "Email already exists!");
          }
          mysqli_stmt_close($stmt);

          // echo "<script>window.location.href = 'login.php';</script>";
          //                   exit();
        
          // Handle errors
          if (count($errors) > 0) {
            foreach ($errors as $error) {
              echo "<div class='alert alert-danger'>$error</div>";
            }
          } else {
            // Hash the password for security
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data into database
            $sql = "INSERT INTO user (namauser, username, level, emailuser, password) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              die("SQL error");
            }
            mysqli_stmt_bind_param($stmt, "sssss", $namauser, $userName, $level, $emailuser, $passwordHash);
            mysqli_stmt_execute($stmt);



            echo "<div class='alert alert-success'>You are registered successfully.</div>";
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