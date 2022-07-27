<?php

//$usuario = $_POST["txtUsuario"];
$usuario = "Thales";
$conteudo = $_POST["txtConteudo"];

try {
    $conexao = new PDO('mysql:host=servidor;dbname=nome do banco de dados;charset=utf8', "usuario", "senha");
    
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$comando = $conexao->prepare("insert into MENSAGENS (MEN_USUARIO, MEN_CONTEUDO) values(:USUARIO, :CONTEUDO)");
$comando->bindValue(":USUARIO", $usuario);
$comando->bindValue(":CONTEUDO", $conteudo);

$comando->execute();

//header('Location: usuario1.html');
//return "mensagem salva com sucesso";

?>