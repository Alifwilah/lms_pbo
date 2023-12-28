<?php
require 'C:\xampp\htdocs\pbo_materi\portfolio-website\login\functions.php';

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Melakukan sanitasi input
    $username = mysqli_real_escape_string($conn, $username);

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    
    if($result) {
        // Cek apakah hasil query menghasilkan satu baris data
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);

            // Memeriksa password menggunakan password_verify()
            if(password_verify($password, $row['password'])){
                if($username === 'admin') {
                    header('Location: C:/xampp/htdocs/pbo_materi/portfolio-website/login/admin.php');
                    exit;
                } else {
                    header('Location: ./login_new/Dasboard_siswa/index.html');
                    exit;
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
    } else {
        $error = true;
    }
}

// if(isset($_POST["login"])){
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'"); // Gunakan variabel $username, bukan string 'username'

//     //cek username
//     if(mysqli_num_rows($result) === 1){
//         //cek password
//         $row = mysqli_fetch_assoc($result);
//         if(password_verify($password, $row["password"])){
//             if($username === "admin") { // Periksa jika username adalah 'admin'
//                 header('Location: C:\xampp\htdocs\pbo_materi\portfolio-website\login\admin.php');
//                 exit;
//             } else {
//                 header("Location: .\Dashboard_siswa\index.html");
//                 exit;
//             }
//         }
//     }

//     $error = true;
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelog.css">
    <title>ANGKASA</title>
</head>
<body>
    <?php if(isset($error)):?>
        <p style="color: red; font-style:italic;">username / password salah</p>
    <?php endif;?>
    <div class="login-card">
        <h2>Login</h2>
        <h3>Enter your credentials</h3>

        <form class="login-form" action="" method="post">
            <input type="text" placeholder="Username" name="username" id="username" required>
            <input type="password" placeholder="Password" name="password" id="password" required>
            <a href="#">Forget your password?</a>
            <p>Dont have a account? <a href="register.php">Register</a></p>
            <button type="submit" name="login"><a href="./login_new/Dashboard_siswa/index.html">LOGIN</button>
            
        </form>
    </div>
</body>
</html>