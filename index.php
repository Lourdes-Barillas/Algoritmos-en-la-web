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

        <div class="process-cards">

            <div class="card">
                <div class="header">Numeros primos</div>
                <div class="body">
                    <img class="logo-proceso" src="img/Numeros-primos.png" alt="#">
                    <a href="numerosprimos.php">Entrar</a>
                </div>
            </div>

            <div class="card">
                <div class="header">Process name</div>
                <div class="body">Preview of the process</div>
            </div>

            <div class="card">
                <div class="header">Process name</div>
                <div class="body">Preview of the process</div>
            </div>

            <div class="card">
                <div class="header">Process name</div>
                <div class="body">Preview of the process</div>
            </div>

            <div class="card">
                <div class="header">Process name</div>
                <div class="body">Preview of the process</div>
            </div>

            <div class="card">
                <div class="header">Process name</div>
                <div class="body">Preview of the process</div>
            </div>
        </div>

        <h1>Mi sitio web</h1>
    </main>


    <footer>
        <p>Derechos a Lourdes Pérez</p>
        <div class="informacion">
            <p>Facebook-
            <a href="#">@lul</a>
            </p>
            <p>Instagram-<a href="#">@lulu</a>
            </p>
        </div>
    </footer>

    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header =document.querySelector("header");
            header.classList.toggle("abajo",window.scrollY>0);
            
        })
    </script>

    <style>
        .process-cards{
            padding-top: .65rem;
            background: white;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: .8rem;
        }

        .card{
            border: 1px solid black;
            border-radius: 40px;
            padding: .5rem;
        }

        .card > .header{
            margin-bottom: .25rem;
        }

        .card > .body{
            font-size: .8rem;
            color: #777;
        }
        .logo-proceso{
            width: 150px;
        }

        /*Footer */
        footer{
            background: #333;
            padding-top: .99rem;
        }
        footer p{
            color: #fff;
            font-size: .9rem;
            position: relative;
            display: flex;
            justify-content: center;
        }

        footer .informacion{
            color: #fff;
            font-size: .9rem;
            position: relative;
            justify-content: center;
            gap: .85rem;
            
        }
        footer .informacion a{
            color: #fff;
            text-decoration: none;
        }

        footer .informacion a:hover{
            color: #500;
            text-decoration: underline;
        }
    </style>
</body>
</html>