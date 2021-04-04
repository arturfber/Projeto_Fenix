<?php
    include_once "../blog/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <?php
    include_once "common/head.php";
  ?>
</head>

<body class="">
  <div class="wrapper ">

    <?php
      include_once "common/sidebar.php";
    ?>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">CADASTRO</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Cadastrar</h4>
                  <p class="card-category">Cadastrar nova Notícia</p>
                </div>
                <div class="card-body">
                <form action="salvarcadastro.php" method="post">
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>TÍTULO</label>
                          <div class="form-group">
                            <textarea name="titulo" class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>SUBTÍTULO</label>
                          <div class="form-group">
                            <textarea name="subtitulo" class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>TEXTO</label>
                          <div class="form-group">
                            <textarea name="texto" class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Data yyyy-mm-dd</label>
                          <input type="text" name="data_noticia" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Autor</label>
                          <input type="text" name="autor" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Categoria</label>
                          <input type="text" name="categoria" class="form-control">
                        </div>
                      </div>
                      
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Cadastrar</button>
                    <div class="clearfix"></div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
        include_once "common/footer.php";
      ?>

    </div>
  </div>

  <?php
    include_once "common/scripts.php";
  ?>
</body>

</html>
