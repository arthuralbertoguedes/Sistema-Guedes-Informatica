<?php 
 require_once 'restricaoAcesso.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo serviço</title>
</head>
<body>
    <section>
        <div>
            <div>
                <form action="incluirServico.php" method="post">
                    <div>
                        <label for="selectServico">Escolha o tipo de serviço: </label>
                        <select name="servico" id="tipoServico" id="selectServico">
                            <option value="naoSelecionado">Tipo do serviço..</option>
                            <option value="manutencao">Manutenção de celular/computador</option>
                            <option value="formatacao">Formatação</option>
                            <option value="troca">Troca de peças</option>                   
                            <option value="instalacao">Instalação de componentes</option>   
                        </select>
                    </div>
                    <div>
                        <input type="text" placeholder="Modelo do dispositivo" size="65" name="modelo" required>
                    </div>
                    <div>
                        <label for="date">Data de entrega: </label>
                        <input type="date" placeholder="Data de entrega" name="data" id="date" required>
                    </div>    
                    <div>
                        <input type="text" placeholder="Digite o nome do cliente">
                    </div>
                   <div>
                        <label for="">Valor do serviço: </label>
                        <input type="float" placeholder="Valor" required>
                   </div>
                   <div>
                        <button type="submit" onclick="validaFormulario(event);">Finalizar</button>
                        <button type="reset">Limpar</button>
                   </div>
                </form>
            </div>
        </div>
    </section>
<script>
    function validaFormulario(event){
        let formulario = document.getElementById("tipoServico");
        if(formulario.value=='naoSelecionado'){
            alert('Escolha o serviço a ser realizado');
            event.preventDefault();
        }
    }
</script>    
</body>
</html>