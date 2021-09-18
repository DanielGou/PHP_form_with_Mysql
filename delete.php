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
    <div class="wrapper">
        <h2>Deletar cadastro</h2>
        <form action="./MVC/deleteCadastro.php" method="GET" target="target">
            <input type="id" name="id" placeholder="id"/>
            <input id="btnSubmitForm" type="submit" value="Submit"/>
        </form>
        
    </div>

    <iframe style="width: 100%;" name="target"></iframe>
</body>

</html>
