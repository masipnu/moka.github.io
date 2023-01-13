<?php
  session_start();
  ob_start();
  
  include "library/config.php";

  if(empty($_SESSION['username']) or empty($_SESSION['password'])){
     echo "<p align='center'> Anda harus login terlebih dahulu!</p>";
     echo "<meta http-equiv='refresh' content='0; url=login.php'>";
  }else{
    define('INDEX', true);
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>Dashboard</title>
   
    <!-- old bootstrap -->
    <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- new bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="assets/bootstrap-icons/bootstrap-icons.css">
   
    <!-- open-iconic icons -->
    <!-- <link href="open-iconic/css/open-iconic-bootstrap.min.css" rel="stylesheet"> -->
    <link href="plugin/DataTables/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="plugin/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link href="plugin/summernote/summernote-bs4.css" rel="stylesheet">


   </head>
   <body class="h-100">

   <!-- top navbar -->
      <nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-warning">
         <a class="navbar-brand" href="#">☕ Moka | Admin</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <!-- original -->
            <!-- <span class="navbar-toggler-icon"></span> -->

            <!-- modified -->
            <span class="bi-command"></span>
         </button>
         
         <!-- top navbar links -->
         <nav class="collapse navbar-collapse" id="sidebar">
            
            <ul class="navbar-nav d-sm-none">
               <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=dashboard">
                     <i class="bi-columns-gap"></i> Dashboard
                  </a>
               </li>
               <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=identitas-sekolah-view">
                     <i class="bi-building"></i> Identitas Sekolah
                  </a> 
               </li>
               <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=#">
                     <i class="bi-calendar-week"></i> Pengaturan KBM
                  </a> 
               </li>
               <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=data-guru-view">
                     <i class="bi-person-vcard"></i> Data Guru
                  </a> 
               </li>
               <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=data-siswa-view">
                     <i class="bi-person-video2"></i> Data Siswa
                  </a> 
               </li>
               <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=data-ortu-view">
                     <i class="bi-people-fill"></i> Data Orang Tua
                  </a> 
               </li>
               <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=saran-view">
                     <i class="bi-envelope-paper"></i> Saran
                  </a> 
               </li>
               <li class="nav-item"> 
               <a class="nav-link text-white" href="?hal=user-view">
                     <i class="bi-person-square"></i> Data Pengguna
                  </a> 
               </li>
               <li class="nav-item"> 
               <a class="nav-link text-white" href="logout.php">
                     <i class="bi-box-arrow-left"></i> Keluar
                  </a> 
               </li>
            </ul>

         </nav>
      </nav>
      
      <!-- sidebar -->
      <div class="container-fluid h-100">
        <div class="row h-100">
         <nav class="col-md-2 col-sm-3 bg-dark h-100 p-0 position-fixed d-none d-sm-block">
            
            <ul class="list-group list-group-flush">
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=dashboard">
                     <i class="bi-columns-gap"></i> Dashboard
                  </a>
               </li>
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=identitas-sekolah-view">
                     <i class="bi-building"></i> Identitas Sekolah
                  </a> 
               </li>
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=#">
                     <i class="bi-calendar-week"></i> Pengaturan KBM
                  </a> 
               </li>
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=data-guru-view">
                     <i class="bi-person-vcard"></i> Data Guru
                  </a> 
               </li>
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=data-siswa-view">
                     <i class="bi-person-video2"></i> Data Siswa
                  </a> 
               </li>
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=data-ortu-view">
                     <i class="bi-people-fill"></i> Data Orang Tua
                  </a> 
               </li>
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=saran-view">
                     <i class="bi-envelope-paper"></i> Saran
                  </a> 
               </li>
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="?hal=user-view">
                     <i class="bi-person-square"></i> Data Pengguna
                  </a> 
               </li>
               <li class="list-group-item bg-dark"> 
                  <a class="nav-link text-white" href="logout.php">
                     <i class="bi-box-arrow-left"></i> Keluar
                  </a> 
               </li>
            </ul>
         
         </nav>

         <!-- Bottom Navbar -->
         <nav class="navbar navbar-dark bg-dark fixed-bottom navbar-expand d-md-none d-lg-none d-xl-none">
            <ul class="navbar-nav nav-justified w-100">
               <li class="nav-item">
               <a class="nav-link text-white h5" href="?hal=identitas-sekolah-view">
                     <i class="bi-building"></i>
                  </a>
               </li>
               <li class="nav-item">
               <a class="nav-link text-white h5" href="?hal=data-guru-view">
                     <i class="bi-person-vcard"></i>
                  </a> 
               </li>
               <li class="nav-item">
               <a class="nav-link text-white h4" href="?hal=dashboard">
                     <i class="bi-command"></i>
                  </a>
               </li>
               <li class="nav-item">
               <a class="nav-link text-white h5" href="?hal=saran-view">
                     <i class="bi-envelope-paper"></i></a> 
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white h5" href="?hal=user-view">
                        <i class="bi-person-square"></i>
                     </a>
               </li>
            </ul>
         </nav>
         <!-- content -->
         <div  class="col-md-10 col-sm-9 offset-md-2 offset-sm-3 mb-5">  
           <section>
            <?php include "konten.php"; ?>
           </section>
         </div>

        </div>

      </div>
     
     <!-- <div>
      <p class="m-2 text-center text-muted">Made with <span class=text-danger>&hearts;</span> by : <b>Masipnu</b> Official</p>
     </div> -->
     
     <!-- bootstrap-js -->
     <script src="assets/bootstrap/js/bootstrap.min.js"></script>

     <!-- old-js -->
     <!-- <script src="js/jquery-3.3.1.min.js"></script> -->

     <!-- new bootstrap -->
     <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

     <script src="plugin/DataTables/js/jquery.dataTables.min.js"></script>
     <script src="plugin/DataTables/js/dataTables.bootstrap4.min.js"></script>

     <script src="plugin/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     <script src="plugin/summernote/summernote-bs4.min.js"></script>

     <script>
        $(function(){
           $('.table').DataTable();
           $('#tanggal').datepicker();
           $('#keterangan').summernote();
        });
     </script>
   </body>
</html>
<?php
   }
?>