<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background-image: url('IMG/aa.png');
            background-size: cover; 
            background-attachment: fixed;
            font-family: 'Helvetica Neue', sans-serif;
            font-size: 20px;
            text-align: center;
        }

        .caixa-acesso {
            background-color: rgba(0, 0, 0, 0.90);
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            text-align: center;
            border: 5px solid purple;
            max-width: 287px; 
            margin: 490px auto; /* Centraliza a caixa verticalmente e a coloca no centro horizontal */
        }

        h1 {
            color: hotpink; 
            font-size: 25px;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: brown;
            border-bottom: 5px solid purple;
            background: transparent;
            color: white;
        }

        button[type="submit"] {
            background-color: hotpink;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 17px;
            cursor: pointer;
            opacity: 0.9;
            transition: initial;
        }

        button[type="submit"]:hover {
            background-color: purple;
            opacity: 1;
        }

        form {
            text-align: center;
        }

        label {
            color: hotpink;
            font-size: 22.5px;
        }

        .bi {
            fill: hotpink;
        }

        .mensagem-erro {
            color: pink;
            font-family: 'Helvetica Neue', sans-serif;
            font-size: 20px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Professor</title>
</head>
<body>
    <div class="caixa-acesso">
    <?php
    $mensagemErro = '';
    include("conexao.php");

    
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    if (!empty($nome) && !empty($senha)) {
        $sql = "INSERT INTO professor (nome, senha) VALUES (?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);
        
        if ($stmt) {
            
            mysqli_stmt_bind_param($stmt, "ss", $nome, $senha);
            
            if (mysqli_stmt_execute($stmt)) {
                $mensagemErro = 'Professor cadastrado com sucesso';
                echo "<p class='mensagem-erro'>$mensagemErro</p>";
            } else {
                $mensagemErro = 'Erro ao cadastrar usuário';
                echo "<p class='mensagem-erro'>$mensagemErro</p>";
            }

            mysqli_stmt_close($stmt);
        } else {
            $mensagemErro = 'Erro na preparação da consulta';
            echo "<p class='mensagem-erro'>$mensagemErro</p>";
        }
    } else {
        $mensagemErro = 'Todos os campos devem ser preenchidos';
        echo "<p class='mensagem-erro'>$mensagemErro</p>";
    }

    mysqli_close($conexao);
    ?>
    <a href='index.php'>Voltar</a>
</div>

    
    <script src="seu-script.js"></script>
</body>
</html>
