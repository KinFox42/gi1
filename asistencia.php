<?php
//Ejercicio uno Asistencia 
include 'asistencia.html';

    $nota = null;
    $asis = null;
    define ("clases", 30);
    if(isset($_POST['nota']) && isset($_POST['asis'])){
        $nota = $_POST['nota'];
        $asis = $_POST['asis'];

        if ($nota <= 5 or $asis <($clases * 0.8)) {
            echo "Aprobo";
        }
        else {
            echo "No Aprobo";
        }
    }

?>