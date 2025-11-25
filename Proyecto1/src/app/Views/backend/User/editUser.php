<?php

    include_once DIRECTORIO_TEMPLATE_BACKEND."head.php";
    include_once DIRECTORIO_TEMPLATE_BACKEND."header.php";
?>

<form action="/user/<?=$usuario->getUuid()?>" method="POST">
    <label for="input_username"></label>
    <input type="text" id="input_username" name="username" value="<?=$usuario->getUsername()?>">
    <label for="input_email"></label>
    <input type="email" id="input_email" name="email" value="<?=$usuario->getEmail()?>">
    <label for="input_password"></label>
    <input type="password" id="input_password" name="password" value="<?=$usuario->getPassword()?>">
    <input type="submit" value="Editar" onclick="peticionPUT()">

    <script>
        const myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/json");
        let username = document.getElementById("input_username");
        let email = document.getElementById("input_email");
        let password = document.getElementById("input_password");

        const raw = JSON.stringify({
                "username":username.value,
                "email":email.value,
                "password":password.value
            });


        const requestOptions = {
            method: "PUT",
            headers: myHeaders,
            body: raw,
            redirect: "follow"
        };

        fetch("http://localhost:8080/user/<?=$usuario->getUuid()?>>/edit", requestOptions)
            .then((response) => response.text())
            .then((result) => console.log(result))
            .catch((error) => console.error(error));
    </script>
</form>


<?php
    include_once DIRECTORIO_TEMPLATE_BACKEND."footer.php";
