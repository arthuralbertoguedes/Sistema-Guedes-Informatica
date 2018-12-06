class clienteModel{

    constructor(nome,email,endereco,cpf,sexo){
        this._nome = nome;
        this._email = email;
        this._cpf = cpf;
        this._endereco = endereco;
        this._sexo = sexo;
    }

    get nome(){
        return this._nome;
    }
    get email(){
        return this._email;
    }
    get cpf(){
        return this._cpf;
    }
    get endereco(){
        return this._endereco;
    }
    get sexo(){
        return this._sexo;
    }
    tamanho(){
        return 5;
    }
}