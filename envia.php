[code lang=”php”]<?php

include_once(‘phpmailer.php’); //Chama o arquivo phpmailer.php com as funções para realizar o envio.

//#########################################
// Recebe as informações do formulário
//#########################################

$nome = $_POST[‘nome’];
$email = $_POST[’email’];
$assunto = $_POST[‘assunto’];
$mensagem = $_POST[‘mensagem’];

//#########################################
// Dados da conta de e-mail que fará o envio
//#########################################


//#########################################
// Envio do formulário
//#########################################

$to = “salusquiropraxia@gmail.com”; //Informe aqui o e-mail que deve receber a mensagem do formulário.
$from = $email;
$subject = “Contato – ” . $assunto;
$msg = $mensagem;

if (isset($_POST[‘submit’])) {
if($nome && $email && $assunto && $mensagem) {
if($smtp->Send($to, $from, $subject, $msg)){
echo “<script>alert(‘Contato enviado!’);</script>”;
echo “<script>window.location = ‘index.php’;</script>”; //Altere aqui para o endereço de sua página.
exit;
}
}

else {
echo “<script>alert(‘Preencha todos os campos!’);</script>”;
echo “<script>window.location = ‘formulario.html’;</script>”; //Altere aqui para o endereço de seu formulário
exit;
}

}

?>[/code]