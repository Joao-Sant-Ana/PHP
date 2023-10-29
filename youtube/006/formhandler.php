<?php 


    if ($_SERVER['REQUEST_METHOD'] == "POST") { //Checa se os dados foram enviados, se não, retorna para a página principal.
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $pet = htmlspecialchars($_POST['favpet']);

        if (empty($firstname) || empty($lastname)) { // Checa se o usuario preencheu todos os campos, se alguma das condições for verdadeira, ele para o codigo e retorna para página inicial.
            header("Location: form.php");//Retorna para a página
            exit(); 
        }

        echo "Info do usuario: ",
        "<br>",
        $firstname,
        "<br>",
        $lastname,
        "<br>",
        $pet;

        header("Location: form.php");
    } else {
        header("Location: form.php");
    }

