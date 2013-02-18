<?php
/* FORMULÁRIO DE CONTATO CRIADO POR MARCIANO DIAS
EMAIL: contato.marcianodias@gmail.com */

$nome = "$_POST[nome]"; //pega o nome do remetente
$email = "$_POST[email]"; //pega o email do remetente
$receptor = "contato@sevenmp.com.br"; //seu email
$mensagem = "$_POST[mensagem]"; //mensagem
$assunto = "$_POST[assunto]"; //assunto
#Pega o nome e o email e mostra no cabeçalho do email receptor
$header = "From: ". $Nome . " <" . $email . ">rn"; 

#condições de envio. Se os campos nome, email, assunto e 
#mensagem não forem preenchido será mostrado uma mensagem de erro.
if (($nome == "") || ($email == "") || ($assunto == "") || ($mensagem == "")) 
{
    echo "Atencao! Todos os campos do formulario devem ser preenchidos.";
}
else #caso todos os campos sejam preenchido, o envio sera realizado.
{
    if(mail($receptor, $assunto, $mensagem, $header))
        echo "$nome, seu emai foi enviado com sucesso!";
    else
        echo "O email falhou ao enviar";
}
?>


<a href="formulario.html">Voltar</a>