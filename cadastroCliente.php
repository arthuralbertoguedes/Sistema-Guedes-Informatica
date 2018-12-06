<?php 
   require_once 'restricaoAcesso.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>
    <form action="incluirCliente.php" method="post" id="formulario">
        <input type="text" placeholder="Nome do cliente" name="nome" required>
        <input type="email" placeholder="Email do cliente" name="email" required>
        <input type="text" placeholder="Telefone" name="telefone" required>
        <input type="text" placeholder="Endereço" name="endereco" required>
        <input type="text" placeholder="CPF" name="cpf" required>
        <label for="">Sexo</label>
        <input type="radio" name="sexo" value="Masculino" id="sexoMasculino" checked><label for="sexoMasculino">Masculino</label>
        <input type="radio" name="sexo" value="Feminino"  id="sexoFeminino"><label for="sexoFeminino">Feminino</label>
        <input type="submit" value="Cadastrar" >
        <input type="reset" value="Limpar" id="btn">
    </form>

    <?php if(isset($_GET['insercao']) && $_GET['insercao'] == 'true') { 
            echo '<div class="message"> Cliente incluído com sucesso! </div>';
            }
            else if(isset($_GET['insercao']) && $_GET['insercao'] == 'false'){
                echo '<div class="message"> Não foi possível incluir cliente </div>';    
            }
           else if(isset($_GET['erro'])){
                echo '<div class="message"> Preencha os dados corretamente</div>';    
            }
    ?>    
    
<script src="js/utilities/limparFormulario.js"></script>
<script>limpar();</script>
</body>
</html>