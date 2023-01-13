<?php
   session_start();
   include "library/config.php";

   $username = $_POST['username'];
   $password = md5($_POST['password']);

   $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
   $data = mysqli_fetch_array($query);
   $jml = mysqli_num_rows($query);

// original
   // if($jml > 0){
   //    if ($data['role']=1) {
   //       $_SESSION['username'] = $data['username'];
   //       $_SESSION['password'] = $data['password'];
   //       header('location: index-2.php');
   //    } elseif ($data['role']="2") {
   //       $_SESSION['username'] = $data['username'];
   //       $_SESSION['password'] = $data['password'];
   //       header('location: index-2.php');
   //    } elseif ($data['role']=3) {
   //       $_SESSION['username'] = $data['username'];
   //       $_SESSION['password'] = $data['password'];
   //       header('location: index-3.php');
   //    } elseif ($data['role']=4) {
   //       $_SESSION['username'] = $data['username'];
   //       $_SESSION['password'] = $data['password'];
   //       header('location: index-4.php');
   //    } elseif ($data['role']=5) {
   //       $_SESSION['username'] = $data['username'];
   //       $_SESSION['password'] = $data['password'];
   //       header('location: index-5.php');
   //    } else {
   //       $_SESSION['username'] = $data['username'];
   //       $_SESSION['password'] = $data['password'];
   //       header('location: index-6.php');
   //    } 
   // }else{
   //    echo "<p align='center'>Login Gagal</p>";
   //    echo "<meta http-equiv='refresh' content='2; url=login.php'>";
   // }


// mod-multiple-role
if($jml > 0){
      $_SESSION['username'] = $data['username'];
      $_SESSION['password'] = $data['password'];
      switch ($data['role']) {
         case 1:
         header('location: index.php');
         break;
         case 2:
         header('location: index-2.php');
         break;
         case 3:
         header('location: index-3.php');
         break;
         case 4:
         header('location: index-4.php');
         break;
         case 5:
         header('location: index-5.php');
         break;
         case 6:
         header('location: index-6.php');
         break;
         }
}else{
   echo "<head>";
   echo "<meta http-equiv='refresh' content='1.5; url=login.php'>";
   echo "<link rel='stylesheet' href='assets/bootstrap/css/bootstrap.min.css'>";
   echo "</head>";
   echo "<body class='h-100 bg-dark align-items-center d-flex'>";
   echo "<p class='text-warning display-5 m-auto' align='center'>🙏 Maaf,<br>Password/ Username anda salah!</p>";
   echo "</body>";
}

?>