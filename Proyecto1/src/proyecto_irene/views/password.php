<?php
include_once("views/template/head.php");
include_once("views/template/header.php");
include_once ("../auxiliar/funciones.php");
?>
<form method="POST">
    <button type="submit" name="generar">Generar contraseña</button>
</form>
<?php
if(isset($_POST["generar"])){
    $password = generatePassword();
    echo "<p>Contraseña: $password</p>";
}
?>
<?php
include_once("views/template/footer.php");
