<?php

  include_once "../config.php";
  include_once "../login/check_login.php";

  include_once "../conexao.php";

  $sql = 'select * from noticias';
  $not = $connect->query($sql);

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
            <a class="navbar-brand" href="javascript:;">Tabelas de Notícias</a>
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
                  <h4 class="card-title ">NOTÍCIAS DE GAMES</h4>
                  <p class="card-category"> Todas as notícias cadastradas</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                  
                      <th>
                          NOTÍCIAS
                      </th>
                      <th>
                          EDITAR
                      </th>

                      <th>
                          EXCLUIR
                      </th>
                      </thead>  
                      
                        <?php
                          foreach($not as $noticia):
                        ?>
    
                        <tbody>
                          <tr>
                            <td>
                              <?=$noticia['titulo']?>
                            </td>
                            <td class="text-primary">
                            <a href="cadastro.php?id=<?= $noticia['id']?>">
                                <i class="material-icons">edit</i>
                              </a>
                            </td>
                            <td class="text-primary">
                              <a href="delete.php?id=<?= $noticia['id']?>">
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
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <th>
                          <a href="cadastro.php">CADASTRAR NOVA NOTÍCIA</a>
                      </th>
                      </thead>  
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

    if ($_GET['msg'] == 'deleteerro') {
      echo '
        <script>
          alert("Não foi possível excluir essa noticia")
        </script> ';
    } elseif ($_GET['msg'] == 'deletesucess') {
      echo '
        <script>
          alert("Notícia excluída com sucesso")
        </script> ';
    }
  ?>

</body>

</html>
