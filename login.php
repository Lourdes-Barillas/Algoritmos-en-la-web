<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="remember-forgot">
                <label>
                    <input type="checkbox">Remember me
                </label>
                <a href="#">Forgot password</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account?
                    <a href="register.php">Register</a>
                </p>
            </div>
        </form>
    </div>

    <br>
    

</body>
</html>