<?php
include 'koneksi.php';
if (isset($_POST["ok"])) {
    $NIS = $_POST["NIS"];
    $nama = $_POST["nama"];
    $id_kelas = $_POST["id_kelas"];
    $input = mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', id_kelas='$id_kelas' WHERE NIS='$NIS'");
    header("location:tabelsiswa.php");
}
?>

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

        <!-- Navbar start -->
            <div class="container-fluid bg-light">
                <div class="container px-0">
                    <nav class="navbar navbar-light navbar-expand-xl">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="text-primary display-4">UPDATE SISWA</h1>
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

        
        <!-- Appointment Start -->


              <div class="container-fluid appointment py-5" style="background: var(--bs-primary);">
            <div class="container py-5">

                <?php
    if(isset($_GET['NIS'])){
        $NIS    =$_GET['NIS'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include 'koneksi.php';
    $no = 1;
    $update    =mysqli_query($koneksi, "SELECT * FROM siswa WHERE NIS='$NIS'");
    foreach ($update as $row) {
?>

        
                <div class="section-heading">
                 <div class="row g-5 align-items-center">
                    <div class="col-lg-10">
                        <div class="appointment-form p-3">
                            <h1 class="display-4 mb-4 text-white">UPDATE SISWA</h1>
                            <form method="post" action="">
                                <div class="row gy-3 gx-4">
                                   <form action="" method="post">
       
            <div class="form-group" >
                <label style="color:black;"> NIS </label>
                <input type = "text" name="NIS" class="form-control" value="<?php echo $row['NIS']; ?>" readonly>
            </div>

             <div class="form-group" >
                            <label style="color:black;"> nama </label>
                            <input type = "text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" >
                        </div>
                        <div class="form-group" >
                            <label style="color:black;"> Id Kelas </label>
                            <input type = "text" name="id_kelas" class="form-control" value="<?php echo $row['id_kelas']; ?>" >
                        </div>
<br>
<center><button type="submit" name="ok">Submit</button></center>
           <BR>
           <center><a href="tabelsiswa.php" target="_blank"><button type="button">Lihat Siswa Lainnya</button></a></center>
       <?php } ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->



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
</BR>
</form>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>