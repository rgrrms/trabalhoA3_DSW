<?php

include_once "Conexao.php";

$livro = $_POST['livro'];
$autor = $_POST['autor'];
$lidoEm = $_POST['data'];

$query = "INSERT INTO livros (livro,autor,lidoEm) VALUES ( '$livro', '$autor', '$lidoEm' )";
Conexao::executar( $query );
header("Location: livros.php");





