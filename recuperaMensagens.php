<?php

try {
    $conexao = new PDO("mysql:host=seu servidor;dbname=sua base de dados;charset=utf8", "seu usuário", "sua senha");
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$comando = $conexao->prepare("select MEN_USUARIO, MEN_CONTEUDO, MEN_DATA from MENSAGENS order by MEN_DATA DESC limit 10;");
$comando->execute();

$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);


$vetor = [];
foreach ($resultado as $key => $value) {
            
    $vetor[$key] = $value;
}
echo json_encode($vetor);