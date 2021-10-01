<?php

if(isset($_POST['submit'])){
    $cuenta = $_POST['cuenta'];
    $servicio = $_POST['servicio'];
    $personas = $_POST['personas'];
    $calc = ((float)$cuenta * (float)$servicio) / (float)$personas;
    if(is_nan($calc)){
        header("Location:../index.php");
    }else{
    header("Location:../index.php?res=".$calc);
}
}else{
    header("Location:../index.php");
}

?>