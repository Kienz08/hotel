<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fasilitas || Hotel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-info">
      <div class="container">
        <a href="assets/index3.html" class="navbar-brand">
          <span class="brand-text font-weight-light"><h4><strong>Hotel Kolektiv</strong></h4></span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="Homescreen.php" class="nav-link"><strong>Home</strong></a>
            </li>
            <li class="nav-item">
              <a href="kamar.php" class="nav-link"><strong>Kamar</strong></a>
            </li>
            <li class="nav-item">
              <a href="fasilitas.php" class="nav-link"><strong>Fasilitas</strong></a>
              <li class="nav-item">
              <a href="login.php" class="btn btn-primary" class="submit" >Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="assets/img/Kolektiv.jpg" alt="First slide" height="450">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="assets/img/Kollektiv-Hotel.jpg" alt="Second slide" height="450">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="assets/img/fasilitas_kafee.jpg" alt="Third slide" height="450">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-12">
            <div class="row">
              <?php
              $query = "SELECT * FROM galeri ORDER BY foto ASC";
              $result = mysqli_query($koneksi, $query);
              if (!$result) {
                die("Query Error: ".mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
              }

              $no = 1;

              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-4">
                  <div class="card card-outline">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <img class="d-block w-100" src="admin/gambar/<?php echo $row['foto']; ?>" height="200">
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <?php $no++; } ?>
              </div>
            </div>

          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
  </body>
  </html>