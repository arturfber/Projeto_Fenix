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
            <a class="navbar-brand" href="javascript:;">Icons</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Material Design Icons</h4>
                <p class="card-category">Handcrafted by our friends from
                  <a target="_blank" href="https://design.google.com/icons/">Google</a>
                </p>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="card-body">
                    <div class="iframe-container d-none d-lg-block">

                    </div>
                    <div class="col-md-12 d-none d-sm-block d-md-block d-lg-none d-block d-sm-none text-center ml-auto mr-auto">

                    </div>
                  </div>
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
