<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM user WHERE iduser = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Now you have the user's data in the $row array
    } else {
        echo "User not found.";
        exit(); // Stop further execution
    }
} else {
    echo "No user ID provided.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle the form submission here
    $nama_user = $_POST['nama_user'];  // Get the updated values from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    // ... get other fields ...

    $update_sql = "UPDATE user SET 
                  namauser = '$nama_user', 
                  username = '$username',
                  emailuser = '$email',
                  level = '$level'
                  -- ... update other fields ...
                  WHERE iduser = '$id'";

    if ($conn->query($update_sql) === TRUE) {
        header("Location: user.php"); // Redirect back to the user list
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
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
                        <label for="nama_user" class="form-label">Nama Lengkap:</label>
                        <input type="text" class="form-control" id="nama_user" name="nama_user"
                            value="<?php echo $row['username']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="username" name="username"
                            value="<?php echo $row['namauser']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="<?php echo $row['emailuser']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label">Level:</label>
                        <input type="text" class="form-control" id="level" name="level"
                            value="<?php echo $row['level']; ?>" required>
                    </div>
                    <a href="user.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>