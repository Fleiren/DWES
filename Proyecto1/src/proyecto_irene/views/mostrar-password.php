<?php
include_once("template/head.php");
include_once("template/header.php");
include_once("auxiliar/funciones.php");

if(isset($_POST["generar"])){
    $password = generatePassword();
    echo "Contraseña: $password";
}


include_once("template/footer.php");
