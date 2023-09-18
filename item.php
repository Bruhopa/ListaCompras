<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras - Nro:<?php echo($_GET["lista"])?></title>
</head>
<body>
    <h1> Lista de Compras - Nro:</h1>

    <?php 
        $db_servidor = "localhost";
        $bd_nome = "listacompras";
        $bd_usuario = "root";
        $bd_senha = "";

        try {
            $conn = new PDO("mysql:host=$db_servidor;dbname=$bd_nome",$bd_usuario,$bd_senha);
            $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


            $parametro = [':lista' => $_GET['lista']];
            $stmt = $conn-> prepare("SELECT * FROM item WHERE codigo_lista = :lista");
            $stmt->execute($parametro);
            echo("<br><ul>");
            foreach ($stmt as $linha) {
                echo("<li>".$linha["codigo"]. " - "
                .$linha("datahora"). " - "
                .$linha("descrição"). " - "
                .$linha("quantidade"). " - "
                ."</li>");
            }
        } catch(PDOException $e) {
            echo "Erro ao conectar com o banco de dados".$e->getMessage();
        }
    ?>

    <a href="index.php">Voltar</a>
</body>
</html>