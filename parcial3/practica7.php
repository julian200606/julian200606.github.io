<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serpientes y escaleras</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        .casilla{
            height: 50px;
            margin: 3px;
        }
        .escalera{
            background-image: url('escalera.png');
            background-size: cover;           
             margin: 3px;
        }
        .snake{
            background-image: url('snake.png');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 3px;
        }
        .jugador{
            background-image: url('jugador.png');
            background-size: cover;           

        }
        </style>
</head>
<body>
    
    <div class="container">
        <h1>Práctica 7 - Serpientes y escaleras</h1><hr>
        <form action="practica7.PHP" method="POST">
            <input type="submit" value="Jugar" class="btn btn-primary">
            <div class="row">
                <?php
                    $colores=["#C39BD3", "#A9CCE3", "#D4EFDF","#FCF3CF", "#F5B7B1","#B0C4DE"];
                    if(isset($_POST["casilla"])){
                        $dado= rand(1,12);
                        echo "<h3>Resultados del dado: ".$dado."</h3>";
                        $casilla=$dado+intval($_POST["casilla"]);
                        echo "<h4>El jugador estaba en la casilla ".intval($_POST["casilla"]) ." y pasó a la casilla ".$casilla."</h4>";

                        if($casilla >= 100){
                            echo "<h1> El jugador gano </h1>";
                            $casilla = 100;
                        }
                        if($casilla == 4){
                            $casilla = 15;
                            echo "<h3> El jugador cayo en una escalera <img src='escalera.png' width='50px'> y subio a la casilla 15</h3>";
                        }
                        if($casilla == 9){
                            $casilla = 20;
                            echo "<h3> El jugador cayo en una escalera <img src='escalera.png' width='50px'> y subio a la casilla 20</h3>";
                        }
                        if($casilla == 19){
                            $casilla = 30;
                            echo "<h3> El jugador cayo en una escalera <img src='escalera.png' width='50px'> y subio a la casilla 30</h3>";
                        }
                        if($casilla == 28){
                            $casilla = 39;
                            echo "<h3> El jugador cayo en una escalera <img src='escalera.png' width='50px'> y subio a la casilla 39</h3>";
                        }
                        if($casilla == 40){
                            $casilla = 51;
                            echo "<h3> El jugador cayo en una escalera <img src='escalera.png' width='50px'> y subio a la casilla 51</h3>";
                        }
                        if($casilla == 63){
                            $casilla = 74;
                            echo "<h3> El jugador cayo en una escalera <img src='escalera.png' width='50px'> y subio a la casilla 74</h3>";
                        }
                        if($casilla == 75){
                            $casilla = 86;
                            echo "<h3> El jugador cayo en una escalera <img src='escalera.png' width='50px'> y subio a la casilla 86</h3>";
                        }
                        if($casilla == 80){
                            $casilla = 91;
                            echo "<h3> El jugador cayo en una escalera <img src='escalera.png' width='50px'> y subio a la casilla 91</h3>";
                        }
                        if($casilla == 17){
                            $casilla = 6;
                            echo "<h3> El jugador cayo en una serpiente <img src='snake.png' width='50px'> y bajo a la casilla 6</h3>";
                        }
                        if($casilla == 34){
                            $casilla = 23;
                            echo "<h3> El jugador cayo en una serpiente <img src='snake.png' width='50px'> y bajo a la casilla 23</h3>";
                        }
                        if($casilla == 62){
                            $casilla = 51;
                            echo "<h3> El jugador cayo en una serpiente <img src='snake.png' width='50px'> y bajo a la casilla 51</h3>";
                        }
                        if($casilla == 64){
                            $casilla = 53;
                            echo "<h3> El jugador cayo en una serpiente <img src='snake.png' width='50px'> y bajo a la casilla 53</h3>";
                        }
                        if($casilla == 87){
                            $casilla = 76;
                            echo "<h3> El jugador cayo en una serpiente <img src='snake.png' width='50px'> y bajo a la casilla 76</h3>";
                        }
                        if($casilla == 93){
                            $casilla = 82;
                            echo "<h3> El jugador cayo en una serpiente <img src='snake.png' width='50px'> y bajo a la casilla 82</h3>";
                        }
                        if($casilla == 95){
                            $casilla = 84;
                            echo "<h3> El jugador cayo en una serpiente <img src='snake.png' width='50px'> y bajo a la casilla 84</h3>";
                        }
                        if($casilla == 99){
                            $casilla = 88;
                            echo "<h3> El jugador cayo en una serpiente <img src='snake.png' width='50px'> y bajo a la casilla 88</h3>";
                        }
                    }

                ?>
                <?php
                    for($i=100; $i>0; $i--){
                        if($casilla==$i){
                            echo "<div class='col-1 card casilla jugador' style='background-color:".$colores[rand(0,5)].";'>".$i."</div>";
                        }elseif($i==17 ||$i==34||$i==99||$i==64||$i==95||$i==93||$i==87||$i==62){
                            echo "<div class='col-1 card casilla snake' style='background-color:".$colores[rand(0,5)].";'>".$i."</div>";
                        }elseif($i==4 ||$i==9||$i==19||$i==28||$i==40||$i==63||$i==80||$i==75){
                            echo "<div class='col-1 card casilla escalera' style='background-color:".$colores[rand(0,5)].";'>".$i."</div>";                           
                        }else{
                            echo "<div class='col-1 card casilla' style='background-color:".$colores[rand(0,5)].";'>".$i."</div>";                           
                        }
                    }
                ?>
            </div>
            <input type="hidden" name="casilla" value="<?php echo $casilla;?>">
        </form>
    </div>
</body>
</html>