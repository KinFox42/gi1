<?php
include 'punto_4.html';
//Linea de codigo con if
    if (isset($_POST['datos'])) {
        $a=1;
        $cantidad=$_POST['cantidad'];
//         while ($a <= $cantidad) {
//             echo 'Hola mundo'.$a. '<br>';
//             $a++;
        }
//     }
// Linea de codigo con for
//     for ($a=1; $a <= $cantidad ; $a++) { 
//         echo 'Hola mundo'.$a. '<br>';
//     }

do {
    echo 'Hola mundo' .$a. '<br>';
    $a++;
} while ($a <= $cantidad);
?>