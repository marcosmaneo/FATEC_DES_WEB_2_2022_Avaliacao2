<?php

require_once('head.html');

?>

  <div class="wrapper">
    <h1>Faça aqui seu login</h1>	
        <form action="valida.php" method="post">
            <input name="usuario" type="text" id="usuario" class="form-control" placeholder="Digite o usuário" required><br>
            <input name="senha" type="password" id="senha"class="form-control" placeholder="Digite a senha" required><br>
            <button class="btn btn-primary" type="submit">Logar</button>
       </form>
  </div>    
</body>
</html>
