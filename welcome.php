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
    	
    echo "<div class='wrapper'>";
    echo "<h1>Seja bem vindo: ". $_SESSION['usuarioNome'] . "</h1>"; 
    }
?>    

<br>
<a href="cadastro.php" class="btn btn-primary">Cadastrar</a>
<a href="listar.php" class="btn btn-success">Listar</a>
<a href="logout.php" class="btn btn-danger">Sair</a>

</div>    
</body>
</html>

