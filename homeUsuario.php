<?php 
 require_once 'restricaoAcesso.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo Usuário</title>
</head>
<body>
    <header>
    </header>
    <main>
        <section>
            <div>
                <h1>Clientes</h1>
                <a href="cadastroCliente.php">Cadastrar cliente</a>
                <a href="pesquisarCliente.php">Pesquisar cliente</a>
            </div>
            <div>
                <h1>Serviços</h1>
                <a href="cadastrarServico.php" id="">Adicionar serviço</a>
                <a href="">Agenda de serviços</a>
            </div>
            <div> 
                <h1>Relatórios</h1>
                <a href="">Novo relatório</a>
            </div>
        </section>
    </main>
    

<script src="js/utilities/jquery.js"></script>

</body>
</html>