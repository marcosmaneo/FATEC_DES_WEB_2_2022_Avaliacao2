<?php

require_once('head.html');

session_start();   
    //Incluindo a conexão com banco de dados
    include_once("connect.php");
    //verifica se está logado
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
    }else{
?>    

<div class="wrapper">
        <h2>Efetue nos campos abaixo o cadastro dos animais: </h2>
        <form action="cadastrar.php" method="post">
            <div class="form-group">
                <input type="text" name="nome" class="form-control" value="" placeholder="Digite nome do animal" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="text" name="raca" class="form-control" value="" placeholder="Digite a raça" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="text" name="porte" class="form-control" value="" placeholder="Digite o porte" required>
                <span class="help-block"></span>
            </div>     
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="cadastrar">
                <a href="listar.php" class="btn btn-success">Listar</a>
                <a href="logout.php" class="btn btn-danger">Sair</a>
            </div>
        </form>
    </div>
<?php } ?>        
</body>
</html>