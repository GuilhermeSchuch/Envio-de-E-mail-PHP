<?php
    $destinatario = "email@gmail.com";
    $assunto = "Assunto";

    $_REQUEST['nome'];
    $_REQUEST['telefone'];
    $_REQUEST['email'];
    $_REQUEST['assunto'];

    $corpo = "<strong>Mensagem de contado</strong><br><br>";
    $corpo .= "<strong>Nome:</strong> $nome";
    $corpo .= "<strong>Telefone:</strong> $telefone";
    $corpo .= "<strong>Email:</strong> $email";
    $corpo .= "<strong>Mensagem:</strong> $assunto";

    $headers = "Content-Type: text/html; charset=utf-8\n";
    $headers .= "From: $email Reply-to: $email\n";
    
    @mail($destinatario, $assunto, $corpo, $headers);
    header("location: index.php?msg=enviado");
?>