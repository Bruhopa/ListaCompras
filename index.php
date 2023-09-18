<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $db_servidor = "localhost";
        $db_nome = "lista_compras";
        $db_usuario = "root";
        $db_senha = "";

        try{
            $conn = new PDO("mysql:host=$db_servidor;dbname=$db_nome",$db_usuario,$db_senha);
            
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "Conexão bem sucedida";

            $stmt = $conn->prepare("SELECT * FROM lista");
            $stmt->execute();
            echo "<br><ul>";
            foreach ($stmt as $linha){
                echo("<li><a href='item.php/?lista=".$linha["codigo"]."'>".$linha["codigo"]."</a> - ".$linha["nome"]."</li>");
            }
            echo "</ul>";

        }catch(PDOException $e){
            echo "Erro ao conectar Banco de Dados".$e->getMessage();
        }
    ?>
</body>
</html>