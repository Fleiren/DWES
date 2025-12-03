<?php
    include_once DIRECTORIO_TEMPLATE_BACKEND."header.php";
?>

<filedset>
    <legend>Editar libro</legend>
    <form >
        <label for="inputTitle">Título</label>
        <input type="text" id="inputTitle" name="title" value="<?=$book->getTitle()?>">
        <label for="inputAuthor">Autor:</label>
        <input type="text" id="inputAuthor" name="author" value="<?=$book->getAuthor()?>">
        <label for="inputSynopsis">Sinopsis</label>
        <textarea id="inputSynopsis" name="synopsis"><?=$book->getSynopsis()?></textarea>
        <label for="inputPages">Páginas:</label>
        <input type="number" id="inputPages" name="pages" value="<?=$book->getPages()?>">
        <label for="inputCover">URL de la portada:</label>
        <input type="url" id="inputCover" name="cover" value="<?=$book->getCover()?>">
        <label for="inputIsbn">ISBN:</label>
        <input type="text" id="inputIsbn" name="isbn" value="<?=$book->getIsbn()?>">
        <button class="edit">Editar</button>
    </form>
</filedset>

<script>
    document.addEventListener("click", (evento)=>{
        if(evento.target.classList.contains("edit")){
            evento.preventDefault();
            const myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            const raw = JSON.stringify({
                "title":document.getElementById("inputTitle").value,
                "author":document.getElementById("inputAuthor").value,
                "synopsis":document.getElementById("inputSynopsis").value,
                "pages":document.getElementById("inputPages").value,
                "cover":document.getElementById("inputCover").value,
                "isbn":document.getElementById("inputIsbn").value
            });

            const requestOptions = {
                method: "PUT",
                headers: myHeaders,
                body: raw,
                redirect: "follow"
            };

            fetch(`http://localhost:8090/admin/book/edit/<?=$book->getUuid()?>`, requestOptions)
                .then((response) => response.json())
                .then((result) => {
                    if(result.success){
                        window.location.href = "/admin"
                    }else{
                        console.error(`Error al actualizar: ${result.error}`);
                    }
                })
                .catch((error) => console.error(error));
        }
    }, false)
</script>
</body>
</html>

