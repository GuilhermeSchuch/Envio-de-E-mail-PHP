<?php
    $msg = 0;
    @$msg = $_REQUEST["msg"];
    
    if ($msg == "enviado") {
        echo "<script>alert('Mensagem enviada com sucesso!');</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Guilherme Schuch">
    <title>Envio de E-mails</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Formulário de Contato</h1>

    <div class="container">
        <fieldset>
            <form action="enviarFormulario.php"method="post">
                <div class="nome">
                    <label for="nome">Nome:</label><br>
                    <input id="nome" name="nome" type="text" placeholder="Insira seu nome" required autofocus><br>
                </div>

                <div class="telefone">
                    <label for="telefone">Telefone:</label><br>
                    <input id="telefone" name="telefone" type="tel" placeholder="Insira seu telefone" required><br>
                </div>

                <div class="email">
                    <label for="email">Email:</label><br>
                    <input id="email" name="email" type="email" placeholder="Insira seu E-mail" required><br>
                </div>

                <div class="mensagem">
                    <label for="assunto">Mensagem</label><br>
                    <textarea name="assunto" id="assunto" placeholder="Insira sua mensagem" required></textarea><br>
                </div>

                <div class="submit">
                    <input type="submit">
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>