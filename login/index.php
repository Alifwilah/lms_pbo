{# <?php
require 'functions.php';
if(isset($_POST["register"]) ) {
    if(isset($_POST["name"]) && isset($_POST["email_reg"]) && isset($_POST["pass_reg"])) {
        // Selanjutnya, Anda dapat menggunakan nilai $_POST dengan aman di sini.
        if(registrasi($_POST)>0){
            echo    "<script>
                        alert('User baru berhasil ditambahkan');
                    </script>";
        } else{
            echo mysqli_error($conn);
        }
    }

    
}

if(isset($_POST["login"])){
    $username = $_POST["email"];
    $password = $_POST["password"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="" method="post">
                <h1>Create Account</h1>
                <span>or use your email for registeration</span>
                <input type="text" placeholder="Name" name="name" id="name">
                <input type="email" placeholder="Email" name ="email_reg" id="email_reg">
                <input type="password" placeholder="Password" name="pass_reg" id="pass_reg">
                <button type="submit" name="register">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="" method="post">
                <h1>Sign In</h1>
                <span>use your email password</span>
                <label for="email"></label>
                <input type="email" placeholder="Email" id="email">
                <input type="password" placeholder="Password" id="password">
                <a href="#">Forget Your Password?</a>
                <button type="submit" name="login">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html> #}