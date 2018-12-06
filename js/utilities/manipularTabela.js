function editarTabela(nomeColuna,valorCampo,cpf){
    //Requisição AJAX que define mudanças escritas na tabela
    $.ajax({
        method: "POST",
        url: "editarCliente.php",
        data: {
            coluna: nomeColuna,
            valor: valorCampo,
            cpf: cpf
        },
        success: function(msg){
            console.log(msg);
        }
    })
}

//Função para adicionar eventos ao Botão Apagar
function addEventoApagar(){
    let botoesApagar = document.querySelectorAll('tr button');
    botoesApagar.forEach(dado=>{
        dado.addEventListener('click',function(e){
            e.preventDefault();
            let linha = this.parentNode;
            let cpfClienteClicado = linha.querySelector('td[class=Cpf]').textContent;
            apagarCliente(cpfClienteClicado);
        })
    })
}

//Função para apagar linha da tabela baseada no CPF;
function apagarCliente(cpf){
    $.ajax({
        method: 'POST',
        url: 'deletarCliente.php',
        data: {
            cliente: cpf
        },
        success: function(msg){
            if(msg='exclusãoFeita'){
                //Atualiza tabela
                receberPesquisa();
            }
        }
    })
}

//Requisição assíncrona para resultado da busca por cliente
 function receberPesquisa(e){
    if(e){
        e.preventDefault();
    }
    let dados = $('#formulario').serialize();
    $.ajax({
        method: "POST",
        url: "recuperarCliente.php",
        data: dados,
        success: function(msg){
            if(msg=='nao encontrado'){
                alert('Resultado não encontrado');
            }
            else{
                let dadosRecebidos = JSON.parse(msg);
                new clienteController(dadosRecebidos);
                let arrayDados = document.querySelectorAll('td');
                arrayDados.forEach(dados=>{
                    dados.addEventListener('click',function(e){
                        //Deixando o campo editável
                        novoInput = document.createElement('input');
                        let valorOriginal = this.textContent;
                        novoInput.value = this.textContent;
                        this.textContent = "";
                        this.appendChild(novoInput);
                        novoInput.select();
                        
                        novoInput.addEventListener('keypress',function(e){
                            if(e.key == 'Enter'){
                                        //Removendo Input editável
                                        let pai = this.parentNode;
                                        this.parentNode.textContent = this.value;
                                        this.remove();
                                        let classesDaTabela = Array.from(pai.classList);
            
                                        //Pegando o cpf do Cliente alterado para alterações no BD
                                        linhaTabela = pai.parentNode;
                                        cpfSelecionado = linhaTabela.querySelector('.Cpf');
            
                                        //Controle de qual coluna no BD deve ser editado
                                        if(classesDaTabela.indexOf('Nome')!=-1){
                                            editarTabela('nome_cliente',pai.textContent,cpfSelecionado.textContent);
                                        }
                                        else if(classesDaTabela.indexOf('Email')!=-1){
                                            editarTabela('email_cliente',pai.textContent,cpfSelecionado.textContent);
                                        }
                                        else if(classesDaTabela.indexOf('Cpf')!=-1){
                                            editarTabela('cpf_cliente',pai.textContent,cpfSelecionado.textContent);
                                        }
                                        else if(classesDaTabela.indexOf('Endereco')!=-1){
                                            editarTabela('endereco_cliente',pai.textContent,cpfSelecionado.textContent);
                                        }
                                        else if(classesDaTabela.indexOf('Sexo')!=-1){
                                            editarTabela('sexo_cliente',pai.textContent,cpfSelecionado.textContent);
                                        }
                           }
                        })
                        novoInput.addEventListener('blur',function(e){
                                    //Implementar evento de clicar fora voltar ao valor original
                                    this.parentNode.textContent = valorOriginal;
                                    this.remove();
                        })
            
                    })
                })
                addEventoApagar();
            }
        }
    }
    )
    
    //Removendo tabela anterior
    let table = document.querySelector('#tabela');
    if(table.childNodes[0]){
        table.childNodes[0].remove();
    }
}

 

