<?php

$usuario = $_POST["txtUsuario"];
$conteudo = $_POST["txtConteudo"];

try {
    $conexao = new PDO('mysql:host=localhost;dbname=chat', "root", "");
    
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$comando = $conexao->prepare("insert into mensagens (MEN_USUARIO, MEN_CONTEUDO) values(:USUARIO, :CONTEUDO)");
$comando->bindValue(":USUARIO", $usuario);
$comando->bindValue(":CONTEUDO", $conteudo);

$comando->execute();

//header('Location: usuario1.html');
//return "mensagem salva com sucesso";

?>