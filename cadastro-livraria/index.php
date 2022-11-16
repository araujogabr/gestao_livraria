<!--Link da aula: https://www.youtube.com/watch?v=QOeDE7nPDq0&t=463s
Outra referência de CRUD COMPLETO: https://www.youtube.com/watch?v=BSqtIw_hW8M&t=1841s
-->
<?php
    if(isset($_POST['submit'])){ //[7] - Se clicar no botão vai existir uma variável "submit". Se existir, vai salvar no banco nossas informações.
        /*print_r('Nome: ' . $_POST['nome']); //[8] - Neste caso vamos primeiro fazer um teste para ver se realmente está funcionando.
        print_r('<br>');
        print_r('Autor: ' . $_POST['autor']);
        print_r('<br>');
        print_r('Data de publicação: ' . $_POST['data_publi']); // [9] - Após testar, vamos passar os parâmetros para suas variáveis. Comenta-se essa parte
        print_r('<br>');
        print_r('Editora: ' . $_POST['editora']);
        */
        include_once('config.php'); //[10] - Vamos incluir a conexao, arquivo "config.php".
        $nome = $_POST['nome']; //[11] - Vamos passar esses valores para suas respectivas variáveis;
        $autor = $_POST['autor'];
        $data_publi = $_POST['data_publi'];
        $editora = $_POST['editora'];

        $result = mysqli_query($conexao, "INSERT INTO livros(nome,autor,data_publi,editora) 
        VALUES ('$nome','$autor','$data_publi','$editora')"); //[12] - Vamos criar uma variával que vai recever a QUERY de INSERT INTO para inserir esses valores na tabela.
    }
?>

<!DOCTYPE html>
<html lang="pt-br"> <!--[1] - Coloca o idioma "pt-br"-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <!--[2] - Altera o nome da página para "Criar Conta"-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main> <!--[3] - Cria a tag <main>-->
        <h1>Bem Vindo(a)</h1>
        
        <div class="alternative"><!--[11] - Escreve "div.alternative" e dá um Enter que ele já vai gerar a div com a classe "alternative"-->
            <span>Cadastro de Livros</span> <!--[12] - Cria a tag <span> e coloca "OR" para separar os icones do formulário. A tag <span> serve para você colocar um conteúdo que na página não serve para nada além de estilizar ou ajudar a agrupar alguma informação ou conteúdo realmente útil-->
        </div> 

        <form  action="index.php" method="POST" id="form_cadastro"> <!--[13] - Cria um formulário-->
            <label for="nome"> <!--[14] - Cria a tag <label> para fazer o input dentro dele / Colocar no for="" mesmo nome do input, neste caso, "name"-->
                <span>Nome do Livro</span> <!--[15] - Cria outra tag <span> que somente servirá para estilizarmos depois-->
                <input type="text" id="nome" name="nome"> <!--[16] - Cria a caixa de input com a tag "input"-->
            </label>

            <label for="autor"> <!--[16] - Cria a tag <label> para fazer o input dentro dele / Colocar no for="" mesmo nome do input, neste caso, "email"-->
                <span>Autor</span> <!--[17] - Cria outra tag <span> que somente servirá para estilizarmos depois-->
                <input type="text" id="autor" name="autor"> <!--[18] - Cria a caixa de input com a tag "input"-->
            </label>

            <label for="data_publi"> <!--[17] - Cria a tag <label> para fazer o input dentro dele / Colocar no for="" mesmo nome do input, neste caso, "password"-->
                <span>Data de Publicação</span> <!--[18] - Cria outra tag <span> que somente servirá para estilizarmos depois-->
                <input type="date" id="data_publi" name="data_publi"> <!--[19] - Cria a caixa de input com a tag "input"-->
            </label>

            <label for="editora"> <!--[17] - Cria a tag <label> para fazer o input dentro dele / Colocar no for="" mesmo nome do input, neste caso, "password"-->
                <span>Editora</span> <!--[18] - Cria outra tag <span> que somente servirá para estilizarmos depois-->
                <input type="text" id="editora" name="editora"> <!--[19] - Cria a caixa de input com a tag "input"-->
            </label>

            <input type="submit" name="submit" value="Cadastrar Livro"> <!--[20] - Cria a tag de submissão do formulário-->
        </form>
    </main>

    <section class="images"> <!--[21] - Cria uma seção com a classe "images". Essa seção será formatada para aparecer somete na Web. Mobile vai sumir-->
        <img src="img/library.svg" alt="Mobile"> <!--[22] - Cria a tag <img> para mostra uma imagem-->
        <div class="circle"></div> <!--[23] - Cria uma div com classe "circle" onde nós vamos formatar depois aquele círculo por trás do formulário-->
    </section>

    <!--[24] - CRIE O ARQUIVO "style.css" E PARTIU CSS-->
</html>

<!--
MODIFICAÇÕES:
[1] - Criar um banco de dados com o nome "formulario" e uma tabela com nome "usuarios"
[2] - Criar o arquivo de conexão PHP
[3] - Mudar o HTML para index.php
[4] - colocar o name="submit" no botão de "Create account"
[5] - No action="" do formulário, colocar "formulario.php" e o método POST.
[6] - Criar uma estrutura para verificar se o formulário foi submetido (topo da página)

-->