<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$assunto = addslashes($_POST['assunto']);
$mensagem = addslashes($_POST['mensagem']);

$to = "projetohanadev@gmail.com";
$subject = $assunto;
$body = "Nome: ".$nome. "\n".
        "E-mail: ".$email. "\n".
        "Mensagem: ".$mensagem;

$header = "From:nathanatrix@gmail.com"."\r\n".
            "Reply-To".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

if (mail($to, $subject, $body, $header)) {
    echo("email enviado com sucesso");
} else {
    echo("erro ao eviar email");
}

?>