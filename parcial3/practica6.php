<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego del ahorcado</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
           
        }
        h1, h3, h4 {
            text-align: center;
            
        }
        hr {
            border-top: 1px solid #ccc;
            margin-top: 20px;
            margin-bottom: 30px;
            
        }
        .row {
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 40px;
            text-align: center;
            font-size: 18px;
        }
        .btn-primary {
            display: block;
            width: 100%;
        }
        .message {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            color: #FF4136;
        }
        
        .game-over {
            color: #FF851B;
        }
        
        
    </style>
</head>
<body>
    <?php
        $nombre = $_POST["jugador"];
        $palabra = $_POST["palabra"];
        $vidas = $_POST["vidas"];
        $frase = $_POST["frase"];
        $b = false;

        if(isset($_POST["frase"])){
            $letra = $_POST["letra"];
            
            // Asigna la letra al array de frase
            for($i = 0; $i < count(str_split($palabra)); $i++){
                if($palabra[$i] == $letra){
                    $frase[$i] = $letra;
                    $b = true;
                }
            }
            
            // Resta vida en caso de que no coincida la letra
            if(!$b){
                echo "<div class='message'>La letra ".$letra." no existe</div>";
                $vidas--;
            }
            
            // Valida si se terminaron las vidas
            if($vidas <= 0){
                echo "<h1 class='game-over'>Juego terminado, se agotaron las vidas!</h1>";
                echo "<a href='practica6.html'>Regresar al inicio</a>";
                return;
            }
            
            $terminado = false;
            
            // Valida si ganó
            for($j = 0; $j < count(str_split($palabra)); $j++){
                if(!$frase[$j]){
                    $terminado = true;
                }
            }

            if($terminado == false){
                echo "<h1 class='success'>¡Felicidades, ganaste!</h1>";
                echo "<a href='practica6.html'>Regresar al inicio</a>";
                return;
            }
        }
    ?>
    <div class="container">
        <form action="practica6.php" method="POST">
            <input type="hidden" value="<?php echo $nombre ?>" name="jugador">
            <input type="hidden" value="<?php echo $palabra ?>" name="palabra">
            <input type="hidden" value="<?php echo $vidas ?>" name="vidas">

            <div class="row">
                <h1>Juego del Ahorcado</h1>
                <hr>
                <h3>Nombre del jugador: <?php echo $nombre; ?></h3>
                <h4>Número de vidas: <?php echo $vidas; ?></h4>
                <?php
                    $letras = str_split($palabra);
                    for($i = 0; $i < count($letras); $i++){
                        echo "<input type='text' name='frase[]' value='".$frase[$i]."' readonly>";
                    }
                ?>
            </div>
            <div class="row mt-4">
                <div>
                    <input type="text" name="letra" maxlength="1" required>
                </div>
                <div>
                    <input type="submit" value="Enviar letra" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
