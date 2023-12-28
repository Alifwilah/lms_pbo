<?php
require 'C:\xampp\htdocs\pbo_materi\portfolio-website\login\functions.php';
if(isset($_POST["register"])){
    if(registrasi($_POST)>0){
        echo "<script>
                alert('user baru berhasil ditambahkan');    
        </script>";
    }else {mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylenreg.css">
    <title>Register</title>
</head>
<body>
    
    <div class="login-card">
        <h2>Register</h2>
        <h3>Enter your Identity</h3>

        <form class="login-form" action="" method="post">
            <input type="text" placeholder="Username" name="username" id="username" required>
            <input type="password" placeholder="Password" name="password" id="password" required>
            <input type="password" name="password2" id="password2" placeholder="Confirm Password" required>
            <a href="#">Forget your password?</a>
            <p>Have a account? <a href="login.php">Login</a></p>
            <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>
</html>