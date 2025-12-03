<?php
    include_once DIRECTORIO_TEMPLATE_BACKEND."header.php";
?>
<fieldset>
    <legend>Añadir libro</legend>
    <form action="/admin/book/create" method="post">
        <label for="inputTitle">Título</label>
        <input type="text" id="inputTitle" name="title">
        <label for="inputAuthor">Autor:</label>
        <input type="text" id="inputAuthor" name="author">
        <label for="inputSynopsis">Sinopsis</label>
        <textarea id="inputSynopsis" name="synopsis"></textarea>
        <label for="inputPages">Páginas:</label>
        <input type="number" id="inputPages" name="pages">
        <label for="inputCover">URL de la portada:</label>
        <input type="url" id="inputCover" name="cover">
        <label for="inputIsbn">ISBN:</label>
        <input type="text" id="inputIsbn" name="isbn">
        <input type="submit" value="Enviar">
    </form>
</fieldset>
</body>
</html>
