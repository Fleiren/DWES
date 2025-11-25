<?php
    $titulo="Regitrar";
    include_once DIRECTORIO_TEMPLATE_BACKEND."head.php";
    include_once DIRECTORIO_TEMPLATE_BACKEND."header.php";
?>

        <h1>Registrar usuario</h1>
        <form action="/user" method="post">

            <label for="inputUsername">Nombre de usuario</label>
            <input type="text" id="inputUsername" name="username" placeholder="Nombre de usuario" aria-label="Input de username" required>

            <label for="inputEmail">Email</label>
            <input type="email" id="inputEmail" name="email" placeholder="Introduce tu email" aria-label="Input de email" >

            <label for="inputEdad">Edad</label>
            <input type="number" id="inputEdad" name="edad" placeholder="Edad del usuario" aria-label="Input de edad" >

            <label for="inputPassword">Contraseña</label>
            <input type="password" id="inputPassword" name="password" placeholder="Contraseña" aria-label="Input de contraseña" required>

            <select name="type" required>
                <option value="normal">Normal</option>
                <option value="admin">Admin</option>
                <option value="anuncios">Anuncios</option>

            </select>

            <input type="submit" value="Registrar usuario">

        </form>
    </body>
<?php
include_once DIRECTORIO_TEMPLATE_BACKEND."footer.php";

?>
</html>