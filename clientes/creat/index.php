<?php

include 'model.php'; 

//Por que consegue usar o GET aqui e não somente o POST?
//Queria entender melhor essa linha.
$action = isset($_GET['action']) ?$_GET['action']:'';

if($action){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $result = insert_client ($nome, $cpf, $nascimento, $email, $telefone, $endereco);
    //Não lembro pq usou !=false ao invés de ==true. Tem diferença?
    //Pq não se sabia se o retorno era um booleano.
    if($result) {
        echo 'Cliente cadastrado com sucesso!';
    }
    else {
        echo $result;
    }

}
else{
    include 'form.html';
}







