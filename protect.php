<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
    body {
            margin: 0;
            padding: 0;
            background-image: url('IMG/dd.gif');
            background-size: cover; 
            background-attachment: fixed;
            font-family: 'Helvetica Neue', sans-serif;
        }

    .caixa-erro {
        background-color: rgba(0, 0, 0, 0.50);
            padding: 13px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            border: 5px solid purple;
            max-width: 287px;
            margin-left: 476.5px;
            margin-top: 390px;
    }

    p {
        color: red;
        font-family: 'Helvetica Neue', sans-serif;
        font-size: 22px;
        text-align: center;
    }
    a{

            color: hotpink;
            text-decoration: none;
        

    }
</style>
<?php
$mensagemErro = '';

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION["id"])) {
    $mensagemErro = 'Você não pode acessar esta página, engraçadinho.';
    echo "<div class='caixa-erro'>";
    echo "<p>$mensagemErro</p>";
    echo "<p><a href='index.php'>Entrar</a></p>";
    echo "</div>";
    die();
}
?>
</head>
<body>
</body>
</html>
