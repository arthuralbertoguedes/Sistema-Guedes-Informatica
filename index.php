<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Sistema </title>
</head>
<body>
    <header>
    </header>
    <section>
        <form action="valida_login.php" method = "post" class="text-center mt-5">
            <div class="form-group">
                <input type="email" placeholder="Email" size="30" name="email">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Senha" size="30" name="senha" >
            </div>
            <?php 
            if(isset($_GET['login'])){
                if($_GET['login']=='erro'){
                    echo '<div class="text-danger mb-2"> Usuário e/ou senha inválidos </div>';
                }
                if($_GET['login']=='acessoRestrito'){ 
                    echo '<div class="text-danger mb-2"> Realizar login no sistema </div>';
                }
            }   
            ?>
            <div>
                <input type="submit" value="Entrar">
            </div>
                    
            
        </form>
    </section>
  

    
<script src="js/bootstrap.min.js"></script>
</body>
</html>