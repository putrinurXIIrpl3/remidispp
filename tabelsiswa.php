<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Sparlex - Spa Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->

        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid sticky-top px-0">
            <div class="container-fluid topbar d-none d-lg-block">
                <div class="container px-0">
                </div>
            </div>
            <div class="container-fluid bg-light">
                <div class="container px-0">

                    <nav class="navbar navbar-light navbar-expand-xl">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="text-primary display-4">TABEL SISWA</h1>
                        </a>
                        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars text-primary"></span>
                        </button>
                        <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                            <div class="navbar-nav mx-auto border-top">
                                <a href="admin.php" class="nav-item nav-link">Home</a>
                                <a href="siswa.php" class="nav-item nav-link active">siswa</a>
                                <a href="kelas.php" class="nav-item nav-link active">kelas</a>
                                <a href="pembayaran.php" class="nav-item nav-link active">pembayaran</a>
                                <a href="login.php" class="nav-item nav-link">logout</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->



        <!-- Header Start -->

        <!-- Header End -->


        <!-- Contact Start -->
        <div class="container-fluid contact py-5" style="background:pink;">
            <div class="container pt-5">
            <form action="" align="left" method="post">
      Cari pada kolom :
<select class="form-control" name="pilih" required>
        <option value="NIS">NIS</option>
        <option value="nama">nama</option>
        <option value="id_kelas">id_kelas</option>
</select>
    <label>Cari data :</label><br>
      <input type="text" name="textcari" size="100" />
      <input type="submit" class="btn btn-success" name="cari" value="cari" />
      <input type="submit" class="btn btn-outline-dark" style="margin-bottom: 5px; margin-right: 5px; float: right;" href="semua" value="Tampilkan semua" />
    </form><br>
    <table class="table table-bordered table-striped table-striped">
      <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Id Kelas</th>
        <th>Opsi</th>
      </tr>
      <?php
      include 'koneksi.php';
      $input="";
        if (isset($_POST["cari"])){
          $opsi=$_POST["pilih"];
          $NIS=$_POST["textcari"];
          $input=mysqli_query($koneksi, "SELECT * from siswa WHERE $opsi like '%$NIS%'");
        }else{
            $input = mysqli_query($koneksi, "SELECT * from siswa");
        }

      $no = 1;
      foreach ($input as $row) {
        echo "<tr>
                <td align='center'>$no</td>
                <td>" . $row['NIS'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $row['id_kelas'] . "</td>
                <td><a href='updatesiswa.php?NIS=$row[NIS]'>Update</a>
               <a href='hapussiswa.php?NIS=$row[NIS]'>Hapus</a></td>
                </tr>";
        $no++;
      }
      ?>
      </div
        <!-- Contact End -->



        <!-- Footer Start -->
        <!-- Footer End -->



        <!-- Copyright Start -->
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>