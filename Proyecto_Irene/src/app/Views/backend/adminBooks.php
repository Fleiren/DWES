<?php
    include_once DIRECTORIO_TEMPLATE_BACKEND."header.php";
?>

<div class="container">

    <?php
    foreach ($books as $book){
        ?>
        <div class="book-container">
            <?php if($book->getCover() !== ""){?>
                <img src="<?=$book->getCover()?>" class="book-cover">
            <?php }?>
            <h2><?=$book->getTitle()?></h2>
            <h4><?=$book->getAuthor()?></h4>
            <p><?=$book->getSynopsis()?></p>
            <p><?=$book->getPages()?></p>
            <p><?=$book->getIsbn()?></p>
            <p><?=$book->getUuid()?></p>
            <button class="delete" value="<?=$book->getUuid()?>">Eliminar </button>
            <button class="edit" value="<?=$book->getUuid()?>">Editar</button>
        </div>
        <?php
    }
    ?>
</div>
<script>
    window.onload = () => {
        console.log(document);
        document.addEventListener("click", (evento) => {
            if (evento.target.classList.contains("delete")) {


                fetch(`http://localhost:8090/admin/book/delete/${evento.target.value}`, {method:"DELETE"})
                    .then((response) => response.json())
                    .then((result) => {
                        if(result.success){
                            window.location.reload();
                        }else{
                            console.error(`${result.error}`);
                        }
                    })
                    .catch((error) => console.error(error));
            }
            if (evento.target.classList.contains("edit")) {
                window.location.href = `/admin/book/edit/${evento.target.value}`;
            }
        }, false);
    }
</script>
</body>
</html>
