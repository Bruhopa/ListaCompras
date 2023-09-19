<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar Item</title>
</head>
<body>
    <script language="JavaScript">
        if (window.confirm("Confirmar exclusão do item: "+<?=$_GET["codigo"]?>)) {
            <?php 
            //Abrir Conexao com Banco de Dados
            require_once "conexao.php";
            //Executar a Inclusão
            try {
                $parametro = ['codigo' => $_GET['codigo']];
                $stmt = $conn->prepare("DELETE FROM item WHERE item.codigo = :codigo");
                if ($stmt->execute($parametro)) {
                    echo "Inclusão bem sucedida !";
                };
                echo "<br>";
                echo "<a href='./index.php'>Voltar</a>";
            } catch(PDOException $e) {
                echo "<pre>";
                echo "Erro ao executar".$e->getMessage();
                echo "</pre>";
            }
            ?>
        } else {
            history.back();
        }
    </script>
</body>
</html>