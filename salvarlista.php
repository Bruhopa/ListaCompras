<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar lista</title>
</head>
<body>
    <?php
        require_once "conexao.php";

        try{
            $parametro = ['nome' => $_GET['nome']];
            $stmt = $sconn->prepare("INSERT INTO lista (codigo,nome) VALUES (null,:nome)");
            if ($stmt->execute($parametro));{
            echo "Inclusão bem sucedida";
            }
            echo "<br>";
            echo "<a href='./index.php'>Voltar</a>";
        } catch(PDOException $e) {
            echo "<pre>";
            echo "Erro ao executar".$e->getMessage();
            echo "</pre>";
        }
    ?>
</body>
</html>