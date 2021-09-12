<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/exemplo.css">
    <title>Cadatros</title>
</head>
<body>
    <a href="/update.php">update</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Mome</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>
        <?php include('./MVC/getCadastros.php')?>
    </table>
</body>
</html>