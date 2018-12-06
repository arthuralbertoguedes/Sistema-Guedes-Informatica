<?php
    require 'restricaoAcesso.php';
    try{
    $conexao = new PDO('mysql:host=localhost;dbname=db_guedesinformatica','root','');
    $sql =  " UPDATE cliente SET " . $_POST['coluna'] . " = :valor  WHERE cpf_cliente = :cpf ";
    $stmt = $conexao->prepare($sql);

    //OBS - Adiciona aspas sozinho!!, colunas portanto ficam de fora
    $stmt->bindValue(':valor',$_POST['valor']);
    $stmt->bindValue(':cpf', $_POST['cpf']);
    $resultadoConsulta = $stmt->execute();

    //Caso a alteração seja realizada com sucesso
    if($resultadoConsulta == 1){
        echo 'Registro alterado com sucesso!';
    }
    //Em caso de erro
    else{
        echo 'Erro ao alterar registro - Tente novamente mais tarde!';
    }
    }
    //Erro de conexão
    catch(PDOException $e){
        echo "Erro de conexao " . $e->getMessage();
    }
?>