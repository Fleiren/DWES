<?php
    include_once DIRECTORIO_TEMPLATE_FRONTEND.'head.php';
    include_once DIRECTORIO_TEMPLATE_FRONTEND.'header.php';
?>
<html>
    <head>
        <title>Iniciar sesión</title>
    </head>
    <body>
        <h1>Bienvenido a Netflix</h1>
        <form action="/user/login" method="post">
            <label for="inputUsername">Nombre de usuario</label>
            <input type="text" id="inputUsername" name="username" placeholder="Introduce tu nombre de usuario" aria-label="Input de Username">

            <label for="inputPassword">Contraseña</label>
            <input type="password" id="inputPassword" name="password" placeholder="introduce tu contraseña" aria-label="Input de Password">

            <input type="submit" value="Iniciar Sesión">
        </form>

    </body>
</html>
<?php
include_once DIRECTORIO_TEMPLATE_FRONTEND.'footer.php';