<?php

include '../../includes/db/conexao.php';

function insert_client($nome, $cpf, $nascimento, $email, $telefone, $endereco)
{
    // Aqui o VS code fica apresentando um erro dizendo que $mysqli não foi declarada. Não consegui achar o erro.
    $sql_code = "INSERT INTO clientes (nome, cpf, nascimento, email, telefone, endereco) 
    VALUES ('$nome', '$cpf', '$nascimento', '$email', '$telefone', '$endereco')";
    // TODO: Tratar melhor o erro. Não deixar aplicação morrer. 
    $verifc = $GLOBALS['db']->query($sql_code); //or die($$GLOBALS['db']->error);
    if($verifc){
        return true;
    }
    else{
        return $GLOBALS['db']->error;
    }
    

}
