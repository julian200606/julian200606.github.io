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
            background-image: url('escalera.jpg');
            background-size: cover;           
             margin: 3px;
        }
        .serpiente{
            background-image: url('Serpiente.png');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 3px;
        }
    </style>
</head>
<body>
    <?php
        $colores=["#C39BD3", "#A9CCE3", "#D4EFDF","#FCF3CF", "#F5B7B1","#B0C4DE"]
    ?>
    <div class="container">
        <h1>Práctica 7 - Serpientes y escaleras</h1><hr>
        <form action="">
            <div class="row">
                <?php
                    for($i=100; $i>0; $i--){
                        if($i==4 ||$i==9||$i==19||$i==28||$i==40||$i==63||$i==80||$i==75){
                            echo "<div class='col-1 card escalera' style='background-color:".$colores[rand(0,5)].";'>".$i."</div>";

                        }elseif($i==17 ||$i==34||$i==99||$i==64||$i==95||$i==93||$i==87||$i==62){
                            echo "<div class='col-1 card serpiente' style='background-color:".$colores[rand(0,5)].";'>".$i."</div>";
                        }else{
                            echo "<div class='col-1 card casilla' style='background-color:".$colores[rand(0,5)].";'>".$i."</div>";                           
                        }
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>