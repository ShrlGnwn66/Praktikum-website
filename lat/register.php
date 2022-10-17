<?php
include 'config.php';

session_start();

error_reporting(0);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirmpassword = md5($_POST['confirmpassword']);

    if ($password == $confirmpassword) {
        $sql = "SELECT * FROM register WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Registrasi telah selesai, silahkan login.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['confirmpassword'] = "";
            } else {
                echo "<script>alert('Periksa Kembali Masukkan Anda.')</script>";
            }
        } else {
            echo "<script>alert('Email sudah terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password tidak sama.')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="register.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="wrapper">
            <div class="wrapper-header">
                <div class="icon">
                    <i class="fa fa-user-plus fa-2x"></i>
                    </div>
                <h2 class="title">Register</h2>
            </div>

            <div class="wrapper-main">
                <form action="#" method="POST">
                    <div class="group">
                        <label for="name">Username</label>
                        <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
                    </div>

                    <div class="group">
                        <label for="email">E-mail Address</label>
                        <input type="text" placeholder="E-mail Address" name="email" value="<?php echo $email; ?>" required>
                    </div>

                    <div class="group">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                    </div>

                    <div class="group">
                        <label for="confirm_password">Confirm Paswword</label>
                        <input type="password" placeholder="Confim Password" name="confirmpassword" value="<?php echo $_POST['confirmpassword']; ?>" required>
                    </div>

                    <div class="group">
                        <input type="submit" value="Sign Up" name="submit">
                        <a href="login.php" class="btn">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    <body>
</html>