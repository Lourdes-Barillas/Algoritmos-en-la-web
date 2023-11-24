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
        <form action="" method="post">
            <H1>Register</H1>
            <div class="input-box">
                <input type="text" name="fname" placeholder="First name">
            </div>
            <div class="input-box">
                <input type="text" name="lname" placeholder="Last name">
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="E-mail">
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="input-box">
                <input type="password" name="passwordConf" placeholder="Confirm your password">
            </div>
            <button type="submit" class="btn">Sign in</button>
            <div class="register-link">
                <p>Already have an account?
                    <a href="login.php">Login</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>