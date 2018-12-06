<?php 

require_once 'restricaoAcesso.php';

//Criando conexão com o banco de dados
$host = "mysql:host=localhost;dbname=db_guedesinformatica";
$usuario = "root";
$senha="";
$dadosCompletos = true;

//Tratamento de dados 
if(!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['endereco']) || !isset( $_POST['cpf'])){
    $dadosCompletos = false;
}

//Formatando dados para inserir no db
$formataDados = "('" . $_POST['nome'] . "', '" . $_POST['email'] . "', '" . $_POST['endereco'] . "', '" . $_POST['cpf']
. "', '" . $_POST['sexo'] . "');" ;
$sql = "INSERT INTO cliente (nome_cliente, email_cliente, endereco_cliente, cpf_cliente, sexo_cliente )
VALUES" . $formataDados;



if($dadosCompletos){
    try{
        $conexao = 
        new PDO($host,$usuario,$senha);
        $retorno = $conexao->query($sql);//Retorna falso em caos de insucesso na inserção do registro
        if($retorno){
            echo '<script> window.location.href = "javascript:history.back()" </script>';
            header("Location: cadastroCliente.php?insercao=true");
        }
    if($retorno==false){
        header("Location: cadastroCliente.php?insercao=false");
    }
    }
    catch(PDOException $e){
        print_r($e->getMessage());
        header("Location: cadastroCliente.php?erro=errodeconexao");
    }
}
else{
    header("Location: cadastroCliente.php?erro=valoresIncompletos");
}

 ?>