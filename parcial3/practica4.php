<?php

$nombre = $_POST["nombre"];
$calificacion = 0;

$pregunta1 = $_POST["pregunta1"];
$pregunta2 = $_POST["pregunta2"];
$pregunta3 = $_POST["pregunta3"];
$pregunta4 = $_POST["pregunta4"];
$pregunta5 = $_POST["pregunta5"];
$pregunta6 = $_POST["pregunta6"];
$pregunta7 = $_POST["pregunta7"];
$pregunta8 = $_POST["pregunta8"];
$pregunta9 = $_POST["pregunta9"];
$pregunta10 = $_POST["pregunta10"];

echo "<h3>Pregunta 1, respuesta seleccionada: (".$pregunta1.")</h3>";

if($pregunta1 =="a"){
    $calificacion ++;
    echo "<img src='correcta.png' width='3%'<hr>";
}else{
    echo "<p>respuesta es A</p>";
    echo "<img src='incorrecta.png' width='3%'<hr>";

}

echo "<h3>Pregunta 2, respuesta seleccionada: (".$pregunta2.")</h3>";
if($pregunta2 =="a"){
    $calificacion ++;
    echo "<img src='correcta.png' width='3%'<hr>";
}else{
    echo "<p>respuesta es A</p>";
    echo "<img src='incorrecta.png' width='3%'<hr>";

}

echo "<h3>Pregunta 3, respuesta seleccionada: (".$pregunta3.")</h3>";
if($pregunta3 =="a"){
    $calificacion ++;
    echo "<img src='correcta.png' width='3%'<hr>";
}else{
    echo "<p>respuesta es A</p>";
    echo "<img src='incorrecta.png' width='3%'<hr>";

}

echo "<h3>Pregunta 4, respuesta seleccionada: (".$pregunta4.")</h3>";
if($pregunta4 =="a"){
    $calificacion ++;
    echo "<img src='correcta.png' width='3%'<hr>";
}else{
    echo "<p>respuesta es A</p>";
    echo "<img src='incorrecta.png' width='3%'<hr>";

}

echo "<h3>Pregunta 5, respuesta seleccionada: (".$pregunta5.")</h3>";
if($pregunta5 =="b"){
    $calificacion ++;
    echo "<img src='correcta.png' width='3%'<hr>";
}else{
    echo "<p>respuesta es A</p>";
    echo "<img src='incorrecta.png' width='3%'<hr>";

}

echo "<h3>Pregunta 6, respuesta seleccionada: (".$pregunta6.")</h3>";
if($pregunta6 =="a"){
    $calificacion ++;
    echo "<img src='correcta.png' width='3%'<hr>";
}else{
    echo "<p>respuesta es A</p>";
    echo "<img src='incorrecta.png' width='3%'<hr>";

}

echo "<h3>Pregunta 7, respuesta seleccionada: (".$pregunta7.")</h3>";
if($pregunta7 =="a"){
    $calificacion ++;
    echo "<img src='correcta.png' width='3%'<hr>";
}else{
    echo "<p>respuesta es A</p>";
    echo "<img src='incorrecta.png' width='3%'<hr>";

}

echo "<h3>Pregunta 8, respuesta seleccionada: (".$pregunta8.")</h3>";
if($pregunta8 =="b"){
    $calificacion ++;
    echo "<img src='correcta.png' width='3%'<hr>";
}else{
    echo "<p>respuesta es A</p>";
    echo "<img src='incorrecta.png' width='3%'<hr>";

}

echo "<h3>Pregunta 9, respuesta seleccionada: (".$pregunta9.")</h3>";
if($pregunta9 =="a"){
    $calificacion ++;
    echo "<img src='correcta.png' width='3%'<hr>";
}else{
    echo "<p>respuesta es A</p>";
    echo "<img src='incorrecta.png' width='3%'<hr>";

}

echo "<h3>Pregunta 10, respuesta seleccionada: (".$pregunta10.")</h3>";
if($pregunta10 =="a"){
    $calificacion ++;
    echo "<img src='correcta.png' width='3%'<hr>";
}else{
    echo "<p>respuesta es A</p>";
    echo "<img src='incorrecta.png' width='3%'<hr>";

}



?>