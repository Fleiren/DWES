<?php

    include_once DIRECTORIO_TEMPLATE_FRONTEND . "header.php";

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
        </div>
    <?php
        }
    ?>

</div>

</body>
</html>