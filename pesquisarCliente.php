<?php 
 require_once 'restricaoAcesso.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesquisar cliente</title>
    <style>
        th,td{
            padding: 0;
            border: 2px solid black;
        }
        tr{
            background-color: #ddd;
        }
        td{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="recuperarCliente.php" method="POST" id="formulario">
        <input type="text" placeholder="Nome do cliente" size="100" name="nome" id="campoNome">
        <input type="submit" id="btnPesquisar" value="Pesquisar" onclick="receberPesquisa(event)" >
        <label for="">Resultados:</label>
        <br>
        <div id="tabela"></div>
    </form>
    <script src="js/utilities/jquery.js"></script>
    <script src="js/utilities/ajax.js"></script> 
   <script src="js/utilities/manipularTabela.js"></script> 
   <script src="js/controller/clienteController.js"></script>
   <script src="js/model/clienteModel.js"></script>
   <script src="js/view/clienteView.js"></script>
</body>
</html>