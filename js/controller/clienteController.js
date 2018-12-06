class clienteController{

    constructor(arrayDadosCliente){
        this._clientes=[];
        arrayDadosCliente.forEach((dados,index)=>{
            let novoCliente = new clienteModel(arrayDadosCliente[index].nome_cliente,
            arrayDadosCliente[index].email_cliente,
            arrayDadosCliente[index].endereco_cliente,
            arrayDadosCliente[index].cpf_cliente,
            arrayDadosCliente[index].sexo_cliente);
            this._clientes.push(novoCliente);
        })
        new clienteView(this._clientes);
    } 
}