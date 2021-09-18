<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- se tiver curiosidade, pequise os nomes das meta tags abaixo pra entender para quê elas servem -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto MVC - GH</title>

    <link rel="stylesheet" href="src/exemplo.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>


<body>
    <a href="/cadastro.php">cadastros</a>
    <div class="wrapper">
        <h1>Projeto Formulário</h1>
        <h2>Novo cadastro</h2>
        <form action="./MVC/AddCadastro.php" method="POST" target="target">
            <input type="name" name="name" placeholder="Nome"/>
            <input type="phone" name="phone" placeholder="Telefone"/>
            <input type="email" name="email" placeholder="Email"/>
            <input id="btnSubmitForm" type="submit" value="Submit"/>
        </form>
        
    </div>

    <iframe style="width: 100%;" name="target"></iframe>
</body>

</html>
