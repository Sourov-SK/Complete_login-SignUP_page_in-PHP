<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container" id="signIn">

        <div class="form-box login">
            <form action="register.php" method="post">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="email" placeholder="Enter the email" name="email" id="email" required>
                    <i class="bi bi-envelope"></i>
                </div>
            <div class="input-box">
                <input type="password" placeholder="Enter the password" name="pass" id="pass" required>
                <i class="bi bi-lock"></i>
            </div>
            <button type="submit" name="signIn" class="btn">Login</button>
            <p>or login with social platforms</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-google"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-github"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
            </form>
        </div>



        <div class="form-box register">
            <form action="register.php" method="post">
                <h1>Register</h1>
                <div class="input-box">
                    <input type="text" placeholder="Enter the name" name="name" id="name" required>
                    <i class="bi bi-person"></i>
                </div>
                <div class="input-box">
                    <input type="email" placeholder="Enter the email" name="email" id="email" required>
                    <i class="bi bi-envelope"></i>
                </div>
            <div class="input-box">
                <input type="password" placeholder="Enter the password" name="pass" id="pass" required>
                <i class="bi bi-lock"></i>
            </div>
            <button type="submit" class="btn" name="signUp">Sign Up</button>
            <p>or register with social platforms</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-google"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-github"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Hello, Welcome!</h1>
                <p>Don't have an account?</p>
                <button class="btn register-btn">Register</button>

            </div>
            <div class="toggle-panel toggle-right">
                <h1>Welcome Back!</h1>
                <p>Already have an account?</p>
                <button class="btn login-btn">Login</button>

            </div>
        </div>

    </div>


<script src="script.js"></script>



</body>
</html>




