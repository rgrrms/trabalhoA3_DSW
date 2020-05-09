<?php

include_once "Conexao.php";

$array = $_POST['del'];
apagaIds($array);

function apagaIds($array) {
    $array[] = $array;
    foreach($array as $_valor){
        //exclusão logica
        $query = "UPDATE livros SET excluido = 'S' WHERE id = $_valor";
        Conexao::executar( $query );
        header("Location: livros.php");
    }
}

