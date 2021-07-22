<?php

include '../../includes/db/conexao.php';

function insert_client ($nome, $cpf, $nascimento, $email, $telefone, $endereco) {
// Aqui o VS code fica apresentando um erro dizendo que $mysqli não foi declarada. Não consegui achar o erro.
    $sql_code = "INSERT INTO clientes (nome, cpf, nascimento, email, telefone, endereco) 
    VALUES ('$nome', '$cpf', '$nascimento', '$email', '$telefone', '$endereco')";
    $verifc = $mysqli->query($sql_code) or die($mysqli->error);
return $verifc;
}