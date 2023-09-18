<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir na lista</title>
    <script lang="JavaScript">
        function cancelar(){
            event.preventDefault();
            window.location = "./index.php";
        }
    </script>
</head>
<body>
    <h1>Incluir na lista</h1>
    <form action="salvarlista.php">
        <label>Nome:</label>
        <input placeholder="Informe o nome do produto" name="nome">
        <button type="submit">Salvar</button>
        <button onclick="voltar">Voltar</button>
    </form>
</body>
</html>