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

$resul_pet = "SELECT * FROM animais ORDER BY nome ASC";
$resultado_pet = mysqli_query($conn, $resul_pet);
                if (($resultado_pet) AND ( $resultado_pet->num_rows != 0)) {
?>
        <div class='wrapper'>
            <h1>Lista de animais cadastrados</h1>
                <br>
                       <div class="table-responsive">
                           <table class="table table-striped table-hover table-bordered">
                               <thead>
                                   <tr>
                                       <th class="text-center">Nº Cadastro</th>
                                       <th>Nome</th>
                                       <th class="d-none d-sm-table-cell">Raça</th>
                                       <th class="d-none d-sm-table-cell">Porte</th>
                                    
                                   </tr>
                               </thead>
                               <tbody>
                                <?php
                                while ($row_pet = mysqli_fetch_assoc($resultado_pet)) {
                                    ?>
                                    <tr>
                                        <th class="text-center"><?php echo $row_pet['id']; ?></th>
                                        <td><?php echo $row_pet['nome']; ?></td>
                                        <td class="d-none d-sm-table-cell"><?php echo $row_pet['raca']; ?></td>
                                        <td class="d-none d-sm-table-cell"><?php echo $row_pet['porte']; ?></td>
                                    </tr>
<?php }}} ?>

                                </tbody>
                            </table>
                        </div>
                <span class="d-none d-md-block">
                   <a href="cadastro.php" class="btn btn-primary">cadastrar</a>
                   <a href="logout.php" class="btn btn-danger">Sair</a> 
                </span>
        </div>
    </body>
</html>
