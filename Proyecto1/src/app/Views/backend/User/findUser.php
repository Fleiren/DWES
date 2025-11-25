<?php
include_once DIRECTORIO_TEMPLATE_BACKEND."head.php";
include_once DIRECTORIO_TEMPLATE_BACKEND."header.php";
include_once DIRECTORIO_TEMPLATE_BACKEND."main.php";

?>

    <form action="/user/find" method="post" >
        <select id="tipoBusqueda" name="tipoBusqueda">
            <option value="email">email</option>
            <option value="username">Nombre usuario</option>
            <option value="uuid">id</option>
        </select>
        <input type="text" id="input_text" name="text">
        <input type="submit">
    </form>


<?php
include_once include_once DIRECTORIO_TEMPLATE_BACKEND."footer.php";
