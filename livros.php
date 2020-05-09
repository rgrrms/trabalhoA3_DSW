<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" type="text/css" href="livros.css" >
</head>
<body>
    <div class="header">
        <div>
            <h1 class="titulo">Cadastre seus Livros</h1>
        </div>
        <div>
            <form method="POST" action="salvarLivros.php">
                <label for="livro">Titulo:</label>
                <input type="text" name="livro" required />
                <label for="autor">Autor:</label>
                <input type="text" name="autor" required />
                <label for="data">Periodo da Leitura:</label>
                <input type="date" name="data" required />
                <input type="submit" value="Salvar" />
                <input type="reset" value="Limpar" />
            </form>
        </div>
    </div>
    <hr>
    <div class="container">
    <form method="POST" action="excluirLivros.php">
    <table id="livros">
        <tr>
            <th>Código</th>
            <th>Livro</th>
            <th>Autor</th>
            <th>Lido em</th>
            <th class="chek"><button type="submit">Excluir</button></th>
        </tr>
        <?php
            include_once 'Conexao.php';
            $query = "SELECT * FROM livros WHERE excluido is NULL";
            $result = Conexao::consultar( $query );
            while( $livro = mysqli_fetch_array($result)){
                echo '<tr>';
                echo '    <td>'.$livro['id'].'</td>';
                echo '    <td>'.$livro['livro'].'</td>';
                echo '    <td>'.$livro['autor'].'</td>';
                echo '    <td>'.$livro['lidoEm'].'</td> ';
                echo '<td class="chek"><input name="del[]" id="'.$livro['id'].'" value="'.$livro['id'].'" type="checkbox"></td>';
                echo '</tr>';
            }
        ?>
    </table>
    </form>
    </div>
</body>
</html>
