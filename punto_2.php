<?php
include 'punto_2.html';

$correctas = null;
$incorrectas = null;
$blanco = null;
$total = null;
$total_correctas = null;


if (isset($_POST['operador'])) {
    $correctas = $_POST['incorrectas'];
    $incorrectas = $_POST['correctas'];
    $blanco = $_POST['blanco'];
//operacion multiplicar x 4
    $total_correctas = $correctas * 4;
//operacion restar x 1
    $total = $total_correctas - $incorrectas;
        echo 'La cantidad total de puntos es: ' .$total;

}
?>