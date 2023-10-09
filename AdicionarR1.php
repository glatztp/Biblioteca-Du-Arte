
<!DOCTYPE html>
<html lang="en">
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
            background-color: rgba(0, 0, 0, 0.3);
            padding: 30px;
            border-radius: 60px;
            box-shadow: 0 0 90px rgba(0, 0, 0, 0.2);
            text-align: center;

            
            max-width: 280px; 
            margin-left: 250px;
            margin-top: 300px;
           
           
        }

        h1{
            color: white; 
            font-size: 38px;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: brown;
            border-bottom: 5px solid #0061a9;
            background: transparent;
            color: white;
        }

        button[type="submit"] {
            background-color: #0061a9;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 17px;
            cursor: pointer;
            opacity: 0.9;
            transition: initial;
        }

        button[type="submit"]:hover {
            background-color: #0061a9;
            opacity: 3;
        }

        form {
            text-align: center;
        }



        label {
            color: white;
            font-size: 30px;
        }

        .bi {
            fill: hotpink;
        }

        .mensagem-erro {
            color: red;
            font-family: 'Helvetica Neue', sans-serif;
            font-size: 15px;
        }


    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <div class="caixa-acesso">
        <h1>Adicionar Alunos</h1>

        <form action="adicionarR2.php" method="POST">
            
            <p>
        <label for="NomeLivro">Nome do Livro:</label>
        <input type="text" id="NomeLivro" name="NomeLivro">
        </p>
        <p>
        <label for="NomeAluno">Nome do aluno reservante:</label>
        <input type="text" id="NomeAluno" name="NomeAluno">

        <label for="DataRetirada">Data de retirada:</label> <br>
        <input type="date" id="DataRetirada" name="DataRetirada">
        <br>

        <label for="DataEntrega">Data de entrega:</label> <br>
        <input type="date" id="DataEntrega" name="DataEntrega">
        <br>
        <br>

        <button type="submit">Cadastrar</button>
        </p>



            <?php 
    $mensagemErro = '';

    if(isset($_POST["NomeLivro"]) || isset($_POST["NomeAluno"]) || isset($_POST["DataRetirada"]) || isset($_POST["DataEntrega"])) {

        if(strlen($_POST["NomeLivro"]) == 0){
            $mensagemErro = 'Preencha o campo Nome do Livro';

        } else if(strlen($_POST["NomeAluno"]) == 0){
            $mensagemErro = 'Preencha o campo Nome do aluno reservante';

        } else if(strlen($_POST["DataRetirada"]) == 0){
            $mensagemErro = 'Preencha o campo Data de retirada';

        } else if(strlen($_POST["DataEntrega"]) == 0){
            $mensagemErro = 'Preencha o campo Data de entrega';

        }
    }
?>
            <?php
            if (!empty($mensagemErro)): ?>
                <p class="mensagem-erro"><?php echo $mensagemErro; ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
