<?php
    include_once "../conexao.php";
    
    $sql = 'SELECT * FROM administrador';
    $dados_adm = $connect->query($sql);
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
            include_once "../config.php";
            include_once "../common/head.php";
        ?>
    </head>

    <body class="">
        <div class="wrapper ">
            <?php
            include_once "../common/sidebar.php";
            ?>

            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                    <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Lista de Administrador</a>
                    </div>
                    </div>
                </nav>
                <!-- End Navbar -->

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Administrador</h4>
                                    <p class="card-category">Gerencie os administradores</p>
                                    <a href="form.php" style="float: right;">
                                        <button type="button" class="btn pull-right" style="background-color: #eeeeee; color: #9c27b0">Cadastrar</button>
                                    </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-primary">
                                                    <th>ID</th>
                                                    <th>Nome</th>
                                                    <th>E-mail</th>
                                                    <th>Telefone</th>
                                                    <th>Editar</th>
                                                    <th>Excluir</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        foreach($dados_adm as $adm):
                                                    ?>
                                                    <tr>
                                                        <td><?=$adm['id']?></td>
                                                        <td><?=$adm['nome_completo']?></td>
                                                        <td><?=$adm['email']?></td>
                                                        <td><?=$adm['telefone']?></td>
                                                        <td>
                                                            <a href="form.php?id=<?=$adm['id']?>">
                                                                <i class="material-icons">edit</i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="excluir.php?id=<?=$adm['id']?>">
                                                            <i class="material-icons">delete</i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        endforeach;
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php
                    include_once "../common/footer.php";
                ?>
            </div>
        </div>
        
        <?php
            include_once "../common/scripts.php";
        ?>
    </body>
</html>
