<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
    <link rel="stylesheet" href="css/styleHome.css">
</head>
<body>
    <header>
        <a href="#" class="logo">Algoritmos sencillos de práctica</a>
        <nav>
            <ul>
                <li><a href="#">Home</a> </li>
                <li><a href="#">About me</a> </li>
                <li><a href="#">Social media</a> </li>
                <li><a href="login.php">Account</a> </li>
            </ul>
        </nav>
    </header>
    <section class="zona1"></section>

    <main>
        <h1>Mi sitio web</h1>
    </main>

    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header =document.querySelector("header");
            header.classList.toggle("abajo",window.scrollY>0);
            
        })
    </script>
</body>
</html>