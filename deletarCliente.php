<?php
    require 'restricaoAcesso.php';
    
    if(isset($_POST['cliente'])){
        $sql = 'delete from cliente WHERE cpf_cliente = :cpf ';
        try{
            
            $conexao = new PDO('mysql:host=localhost;dbname=db_guedesinformatica','root','');
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':cpf', $_POST['cliente']);
            $resposta = $stmt->execute();
            if($resposta){
                echo 'exclusãoFeita';
            }
        }
        catch(PDOException $e){
            echo 'erro' . $e.getMessage();
        }



    }
    
?>