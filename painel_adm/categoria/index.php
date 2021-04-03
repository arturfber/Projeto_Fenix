<?php
include_once "get_categorias.php";

if ($_GET['msg'] == "adderro") {
  $msgadd = "Ocorreu um erro ao criar a categoria!!!";
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
            <a class="navbar-brand" href="javascript:;">Table List</a>
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
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th> Nome </th>
                        <th> Editar </th>
                        <th> Excluir </th>
                      </thead>

                      <tbody>

                        <tr> 
                          <form action="add.php" id="add_cat" method="post">
                            <td>
                              <input type="text" name="nome" placeholder="Adicione uma categoria...">
                              <p class="text-danger"><?= $msgadd ?></p>
                            </td>
                            <td>
                              <a href="javascript:add_cat.submit()" onclick="loading(this)">
                                  <i class="material-icons">check</i>
                              </a>
                            </td>
                          </form>
                        </tr>

                      <?php foreach ($categorias as $categoria): ?>
                        <tr>
                          <td>
                            <form id="edit<?= $categoria['id']?>" action="edit.php" method="post">
                              <input type="hidden" name="id" id="cat<?= $categoria['id']?>" value="<?= $categoria['id']?>">
                              <input type="text" class="form-control-plaintext" name="nome" id="cat<?= $categoria['id']?>" value="<?= $categoria['nome']?>" readonly>
                          </td>
                          <td>
                            <a href="javascript:edit<?= $categoria['id']?>.submit()" onclick="loading(this)" id="submit<?=$categoria['id']?>" class="invisible">
                              <i class="material-icons">check</i>
                            </a>
                            
                            <a href="#" id="toggle_edit<?= $categoria['id']?>" onclick="toggle_edit(<?= $categoria['id']?>)">
                                <i class="material-icons">edit</i>
                            </a>
                            </form>
                          </td>
                          <td>
                            <a href="delete.php?id=<?= $categoria['id'] ?>">
                              <i class="material-icons">delete</i>
                            </a>
                          </td>
                        </tr>
                      <?php endforeach ?>
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

  <script src="edit.js"></script>
  <?php
    include_once "../common/scripts.php";
    if ($_GET['msg'] == 'delerro') {
      echo '
        <script>
          alert("Não é possível excluir essa categoria")
        </script> ';
    } elseif ($_GET['msg'] == 'delsucesso') {
      echo '
        <script>
          alert("Categoria excluída com sucesso")
        </script> ';
    }
  ?>

</body>

</html>
