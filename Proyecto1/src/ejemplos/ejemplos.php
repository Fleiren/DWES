<?php

    //Mostrar texto por pantalla
    echo "Hola mundo";
    print("Este es un mensaje que se muestra</br>");

    $mensaje="Este es un parrafo";

    ?>

    <p><?=$mensaje?></p>
<!-- Contenido en HTML -->
<?php
//Definir una variable
    $variable1 = "Mensaje1";
    $variable2 = "Mensaje2";

    echo $variable1.$variable2;

    echo "<p style='background-color:blue;color:red'>".$variable2." </p>";
$variable2 = 1;
//Definir una constante

    const PI = 3.1416;
    $variable2++;
    echo PI*$variable2;