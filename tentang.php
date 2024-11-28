<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
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
  <link rel="icon" type="image/x-icon" href="assets/img/yc.png">
 <title>Science & Technology Company | Tentang</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <?php
    include 'menu.php';
    ?>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!--  -->
      <!--  -->

      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> Tentang Science & Technology Company</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Tentang</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-lg-12">

              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="card-title m-0">Profil</h5>
                </div>
                <div class="card-body">

                  <p>Science & Technology Company adalah perusahaan yang bergerak di bidang pengembangan solusi berbasis ilmu pengetahuan dan teknologi untuk menciptakan masa depan yang lebih baik. Dengan fokus pada inovasi, kami menggabungkan penelitian mendalam dan teknologi canggih untuk menghadirkan produk serta layanan yang mendukung transformasi digital dan keberlanjutan. Bidang keahlian kami mencakup kecerdasan buatan, energi terbarukan, bioteknologi, dan teknologi Internet of Things (IoT), yang dirancang untuk meningkatkan efisiensi dan kualitas hidup masyarakat.
                    <br>
                    <br>
                    Didukung oleh tim ahli dari berbagai disiplin ilmu dan jaringan kolaborasi global, Science & Technology Company berkomitmen untuk menciptakan teknologi yang tidak hanya inovatif, tetapi juga memberikan dampak positif bagi lingkungan dan masyarakat. Dengan pendekatan berbasis riset dan keberlanjutan, kami terus berkembang menjadi mitra terpercaya dalam mewujudkan solusi yang relevan dengan kebutuhan dunia modern. </p>
                </div>
              </div>
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="card-title m-0">Contact</h5>
                </div>
                <div class="card-body">

                  <p>Jangan lupa like fanspage kami <a href="https://fb.com/sciencetechnologycompany">fb.com/sciencetechnologycompany</a></p>
                  <p>Subscribe channel youtube kami <a href="https://youtube.com/sciencetechnologycompany">youtube.com/sciencetechnologycompany</a></p>
                 
                  </p>
                  <p>Facebook : <a href="https://fb.com/sciencetechnologycompany">fb.com/sciencetechnologycompany</a></p>
                  <p>Instagram : <a href="https://www.instagram.com/sciencetechnologycompany/">@sciencetechnologycompany</a></p>
                  <p>WA : <a href="https://api.whatsapp.com/send?phone=6281212220022">+62812-1222-0022</a></p>
                  <p>Email : dev.sciencetechnologycompany@gmail.com</>
                  </p>

                  * Kami mohon maaf yang sebesar-besarnya atas keterlambatan respon yang mungkin terjadi. Hal ini disebabkan oleh adanya aktivitas dan kesibukan lain yang harus diselesaikan oleh admin. Kami mengharapkan pengertian dan kesabaran Bapak/Ibu dalam menunggu tanggapan dari kami. Terima kasih.</p>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->


      <!--  -->
      <!--  -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2002-2024 <a href="">Science & Technology Company</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
</body>

</html>