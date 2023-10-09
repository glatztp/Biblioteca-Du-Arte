<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Livros</title>
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
            padding: 70px;
            border-radius: 80px;
            box-shadow: 0 0 90px rgba(0, 0, 0, 0.2);
            text-align: center;

            
            max-width: 280px; 
            margin-left: 250px;
            margin-top: 400px;
           
           
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
    
</head>
<body>
    <div class="caixa-acesso">
        
    <h1> Adicionar Livros</h1>
        <form action="adicionarL2.php" method="POST">
            <p>
                <label>Nome:</label>
                <input type="text" name="nome" />
            </p>
            <p>
                <label>Autor:</label>
                <input type="text" name="autor" />
            </p>
            <p>
                <label>Editora:</label>
                <input type="text" name="editora">
            </p>
            <p>
                <label>Gênero:</label>
                <input type="text" name="genero">
            </p>
            <p>
                <label>N° De Páginas:</label>
                <input type="text" name="paginas">
            </p>
            <p>
                <label>Sinopse:</label>
                <input type="text" name="sinopse">
            </p>
            <p>
                <label>Ano de Publicação:</label>
                <input type="text" name="ano">
            </p>
            <p>
                <label>Capa:</label>
                <input type="text" name="capa">
            </p>
            <p>
                <label>Classificação Etária:</label>
                <input type="text" name="etaria">
            </p>
            <button type="submit" class="botao-cadastrar">Cadastrar</button>
        </form>
        <?php 
        if(isset($_POST["nome"]) || isset($_POST["autor"]) || isset($_POST["editora"]) || isset($_POST["genero"]) || isset($_POST["paginas"]) || isset($_POST["sinopse"]) || isset($_POST["ano"]) || isset($_POST["capa"]) || isset($_POST["etaria"])) {

            if(strlen($_POST["nome"]) == 0 || strlen($_POST["autor"]) == 0 || strlen($_POST["editora"]) == 0 || strlen($_POST["genero"]) == 0 || strlen($_POST["paginas"]) == 0 || strlen($_POST["sinopse"]) == 0 || strlen($_POST["ano"]) == 0 || strlen($_POST["capa"]) == 0 || strlen($_POST["etaria"]) == 0){
                $mensagemErro = 'Preencha os campos vazios';
            }
        }
        ?>
        <?php if (!empty($mensagemErro)): ?>
            <p class="mensagem-erro"><?php echo $mensagemErro; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
