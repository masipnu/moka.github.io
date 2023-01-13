<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>☕ Moka | Monitoring Kehadiran</title>

   <!-- old-bootstrap -->
    <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- new bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

   </head>
   <body class="h-100 bg-warning d-flex align-items-center">
     <div class="container">
       <div class="row">
         <div class="col-10 col-sm-6 col-md-4 mx-auto bg-light p-4 rounded">
          <h1 class="display-3 text-center">☕</h1>
            <h3 class="text-center text-warning pb-3 mb-3 border-bottom">Silahkan Login</h3>
            <form method="post" action="ceklogin.php">
               <input class="form-control form-control-lg mb-3" type="text" placeholder="Username" name="username">
               <input class="form-control form-control-lg mb-3" type="password" placeholder="Password" name="password">
               <input class="btn btn-warning btn-lg btn-block" type="submit" value="Login">
            </form>
         </div>
       </div>
     </div>
   </body>
</html>