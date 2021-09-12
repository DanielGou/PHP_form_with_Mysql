<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/exemplo.css">
    <title>Update Cadatros</title>
</head>
<body>
    <a href="/delete.php">deletar</a>
    <div class="wrapper">
        <h2>Alterar cadastro</h2>
        <form action="./MVC/updateCadastro.php" method="POST">
            <input type="id" name="id" placeholder="id"/>
            <input type="name" name="name" placeholder="Nome"/>
            <input type="phone" name="phone" placeholder="Telefone"/>
            <input type="email" name="email" placeholder="Email"/>
            <input id="btnSubmitForm" type="submit" value="Submit"/>
        </form>
    </div>
</body>
</html>