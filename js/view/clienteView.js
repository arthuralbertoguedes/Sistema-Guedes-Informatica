class clienteView{

    constructor(clientes){
        this._arrayClientes = clientes;
        this.construirTabela();
    }

    construirTabela(){
        //Criando nova tabela dinâmica
        let tableContainer = document.querySelector('#tabela');
        let novaTabela = document.createElement('table');
        //Criando titulo da tabela
        let linhaTitulo = document.createElement('tr');
        let tituloTabelaNome = document.createElement('th');
        tituloTabelaNome.textContent = "Nome";
        
        let tituloTabelaEmail = document.createElement('th');
        tituloTabelaEmail.textContent = "Email";
        let tituloTabelaEndereco = document.createElement('th');
        tituloTabelaEndereco.textContent = "Endereco";
        let tituloTabelaCpf = document.createElement('th');
        tituloTabelaCpf.textContent = "Cpf";
        let tituloTabelaSexo = document.createElement('th');
        tituloTabelaSexo.textContent = "Sexo";

        //Definindo árvore dos elementos da tabela
        linhaTitulo.appendChild(tituloTabelaNome);
        linhaTitulo.appendChild(tituloTabelaEmail);
        linhaTitulo.appendChild(tituloTabelaEndereco);
        linhaTitulo.appendChild(tituloTabelaCpf);
        linhaTitulo.appendChild(tituloTabelaSexo);
        novaTabela.appendChild(linhaTitulo);
        

        //Criando linha para cada cliente
        this._arrayClientes.forEach((dado,index)=>{
            let novaLinha = document.createElement('tr');
            let novoNome = document.createElement('td');
            novoNome.className = "Nome";
            novoNome.textContent=dado.nome;
            let novoCpf = document.createElement('td');
            novoCpf.textContent = dado.cpf;
            novoCpf.className = "Cpf";
            let novoEndereco = document.createElement('td');
            novoEndereco.textContent = dado.endereco;
            novoEndereco.className = "Endereco";
            let novoEmail = document.createElement('td');
            novoEmail.textContent = dado.email;
            novoEmail.className = "Email";
            let novoSexo = document.createElement('td');
            novoSexo.textContent = dado.sexo;
            novoSexo.className = "Sexo";

            let novoBtn = document.createElement('button');
            novoBtn.textContent = 'Apagar';

            novaLinha.appendChild(novoNome);
            novaLinha.appendChild(novoEmail);
            novaLinha.appendChild(novoEndereco);
            novaLinha.appendChild(novoCpf);
            novaLinha.appendChild(novoSexo);
            novaLinha.appendChild(novoBtn);
            novaTabela.appendChild(novaLinha);
            
        })
        
        tableContainer.appendChild(novaTabela);
        
    }

}