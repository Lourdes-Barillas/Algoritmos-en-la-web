<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="proceso">
        <form action="" method="post">
            <h1>Calculo de numeros primos menores</h1>
            <a href="#">Instrucciones</a>
            <div class="input-box">
                <input type="text" name="numero" placeholder="Ingresa un numero">
            </div>
            <div class="respuesta">
                <?php
                    $numero = $_POST['numero'];

                    if (empty($numero)){

                    } else{
                        for($i = $numero; $i >= 1; $i--){
                            echo  $i;
                        }
                    }
                ?>
            </div>
        </form>
    </div>
</body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Quicksand', sans-serif;
    }

    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: url("css/img/luna.jpg");
        background-size: cover;
        background-position: center;
    }
    .proceso{
        border: 1px solid black;
        border-radius: .8rem;
        padding: .5rem;
        display: flex;
    }

    .proceso form a{
        display: flex;
        justify-content: center;
    }
    .input-box input{
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, .2);
        border-radius: 40px;
        font-size: 16px;
        padding: 20px 45px 20px 20px;
    }
    .proceso h1{
        color: #fff;
        font-size: 60px;
    }
    .proceso a{
        color:cornsilk;
        font-size: 20px;
        background-color: black;
        text-decoration: none;
    }
    .proceso a:hover{
        text-decoration: underline;
    }
</style>
</html>