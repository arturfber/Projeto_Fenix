<?php
    include_once "../conexao.php";
    include_once "../categoria/get_categorias.php";

    if (isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = 'select n.*, i.imagem from noticias n inner join imagem i on i.fk_noticias_id where n.id = ' .$id;
        $dados = $connect->query($sql);

        foreach ($dados as $dado){
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

                <input type="hidden" name="id" value="<?= $id ?>">

                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>TÍTULO</label>
                          <div class="form-group">
                            <textarea name="titulo" class="form-control" rows="2"><?= $id ? $infos['titulo'] : ""?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>SUBTÍTULO</label>
                          <div class="form-group">
                            <textarea name="subtitulo" class="form-control" rows="3"><?= $id ? $infos['subtitulo'] : ""?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>TEXTO</label>
                          <div class="form-group">
                            <textarea name="texto" class="form-control" rows="7"><?= $id ? $infos['texto'] : ""?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Data yyyy-mm-dd</label>
                          <input type="text" name="data_noticia" class="form-control" value="<?= $id ? $infos['data_noticia'] : ""?>">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Autor</label>
                          <input type="text" name="autor" class="form-control" value="<?= $id ? $infos['autor'] : ""?>">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Categoria</label>

                          <select name="categoria" class="form-select">
                            <?php foreach ($categorias as $categoria): ?>
                              <option value="<?= $categoria['id']?>" 
                              <?php if($id){ 
                                if($categoria['id'] == $infos['fk_categoria_id']){
                                  echo "selected";
                                }else{
                                  echo "" ;
                                }
                                }?>>
                                <?= $categoria['nome']?> 
                              </option>
                            <?php endforeach ?>
                          </select>

                        </div>
                      </div>
                      
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Cadastrar</button>
                    <a href="index.php"><button type="button" class="btn btn-primary pull-right">Voltar</button></a>
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

    if ($_GET['msg'] == "createerro") {
      echo '
        <script>
          alert("Não foi possível cadastrar a noticia");
        </script> ';
    }
  ?>
</body>

</html>
