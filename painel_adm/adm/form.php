<?php    
    include_once "../conexao.php";

    if (isset($_GET['id'])){
        $id = $_GET['id'];

        include_once "dados_adm.php";

        foreach ($dados_adm as $dado){
            $infos = $dado;
        }
    }else{
        $id = 0;
    }

?>

<!DOCTYPE html>
<html lang="pt">

    <head>
        <?php
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
                            <?= $id ? "<h3>Editar</h3>" : "<h3>Cadastrar</h3>" ?>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end">
                            <form class="navbar-form">
                                <div class="input-group no-border">
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                        <i class="material-icons">search</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Dados</h4>
                                        <p class="card-category"><?= $id ? "Preencha somente os campos que quiser atualizar" : "Complete os campos"?></p>
                                    </div>
                                    <div class="card-body">
                                        <form action="salvar.php" method="post">
                                            <input type="hidden" name="id" value="<?=$id?>">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Nome</label>
                                                        <input type="text" class="form-control" name="nome_completo" placeholder="<?= $id ? $infos['nome_completo'] : "" ?>" <?= $id ? "" : "required" ?>/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">E-mail</label>
                                                        <input type="email" class="form-control" name="email" placeholder="<?= $id ? $infos['email'] : "" ?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Telefone</label>
                                                        <input type="tel" class="form-control" pattern="[0-9]{5}-[0-9]{4}" name="telefone" placeholder="<?= $id ? $infos['telefone'] : "" ?>" <?= $id ? "" : "required" ?>/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Senha</label>
                                                        <input type="password" class="form-control" name="senha" <?= $id ? "" : "required" ?>/>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary pull-right">Confirmar</button>
                                            <a href="adm.php"><button type="button" class="btn btn-primary pull-right">Voltar</button></a>
                                            <div class="clearfix"></div>
                                        </form>
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