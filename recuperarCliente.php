<?php
require "restricaoAcesso.php";

if(isset($_POST['nome']) && !empty($_POST['nome'])){
    //Instrução SQL para consulta
    $sql = "SELECT * FROM cliente WHERE nome_cliente LIKE :nome ";
    try{
        //Abrindo conexão através da interface PDO
        $conexao = new PDO('mysql:host=localhost;dbname=db_guedesinformatica','root','');
        //Preparando query
        $stmt = $conexao->prepare($sql);
        //Prevenindo SQL Injection
        $stmt->bindValue(':nome',$_POST['nome'] . '%');
        $stmt->execute();
        $resultadoConsulta = $stmt->fetchAll(PDO::FETCH_CLASS);
        $resultadosSeparados = [];
        //Separando linhas dos resultados para envio ao front
        foreach($resultadoConsulta as $row){
            $resultadosSeparados[] = $row;
        }
        $respostaRequisicao = json_encode($resultadosSeparados);
        //Em caso de falha da consulta
        if(!$resultadoConsulta){
            echo "nao encontrado";
        }
        //Senão retorno o JSON com o resultado
        else{
            echo $respostaRequisicao;
        }
    }
    //Capturando falhas com a conexão ao BD
    catch(PDOException $e){
        echo "erro de conexao"; 
    }

}
//Eliminandoa acesso direto
else{
    header("Location: pesquisarCliente.php?erro=acessoDireto");
}

?>