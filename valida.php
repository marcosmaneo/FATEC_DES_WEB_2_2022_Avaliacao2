<?php

require_once('head.html');

session_start();   
    //Incluindo a conexão com banco de dados
    include_once("connect.php");
    
 $User = $_POST['usuario'];
 $Password = $_POST['senha'];

    //O campo usuário e senha preenchido entra no if para validar
    if((isset($User)) && (isset($Password))){
                
        //Buscar na tabela usuario os dados digitado no formulário
        $result_usuario = "SELECT * FROM usuarios WHERE nome = '$User' && senha = '$Password' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitados no formulário
        if(isset($resultado)){
            $_SESSION['usuarioNome'] = $resultado['nome'];
            $_SESSION['usuarioSenha'] = $resultado['senha'];
            $_SESSION['loggedin'] = TRUE;

            header("Location: welcome.php");
            
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{  
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: index.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: index.php");
    }
?>
</body>
</html>