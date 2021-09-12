# Exemplo formulário
- Para começar, instale o Laragon (caso ainda não tenha) e o Chrome (pode usar outro navegador no dia a dia, sem problema, mas nossa referência é o Chrome).
- Na tela principal do Laragon, clique em "root". Uma pasta irá se abrir. Copie este projeto para dentro da pasta.
- Na tela principal do Laragon, clique em "Database" e entre no gerenciador de banco de dados (HeidiSQL).
- Crie um banco de dados chamado "ghtest".
- Dentro do banco ghtest, copie e execute o script "exemplo.sql" que está dentro deste projeto. O script criará uma tabela chamada "pessoas".
- No index.php, crie seu formulário com os campos (inputs) de acordo com a estrutura no banco. Coloque como "action" o script que está em MVC/AddCadastro.php.
- Faça o envio do formulário, e verifique com que nomes os campos estão sendo enviados para o servidor. Se necessário, use a aba Network do Chrome Dev Tools (https://developer.chrome.com/docs/devtools/network/).
- Quem vai receber os seus dados do lado do servidor é o AddCadastro.php. Pegue os dados e grave no banco conforme a referência que é mostrada lá.
- Pronto! A partir disso, você pode expandir o seu cadastro, fazer cadastros novos ou até tentar desenvolver alguma funcionalidade a mais.