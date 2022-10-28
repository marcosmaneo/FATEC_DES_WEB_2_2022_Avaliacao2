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

$Nome = $_POST['nome'];
$Raca = $_POST['raca'];
$Porte = $_POST['porte'];

    }

$Insere_Pet = "INSERT INTO animais (nome, raca, porte)
VALUES ('$Nome', '$Raca', '$Porte')";

mysqli_query($conn, $Insere_Pet);
    
    echo "<div class='wrapper'>";
    echo "<h1>Animal cadastrado com sucesso!</h1>";
    
mysqli_close($conn);

?>
<br>
   <a href="cadastro.php" class="btn btn-primary">Cadastrar</a>
   <a href="listar.php" class="btn btn-success">Listar</a>
   <a href="logout.php" class="btn btn-danger">Sair</a>
</div>    
</body>
</html>

        