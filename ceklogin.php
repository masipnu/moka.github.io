<?php
   session_start();
   include "library/config.php";

   $username = $_POST['username'];
   $password = md5($_POST['password']);

   $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
   $data = mysqli_fetch_array($query);
   $jml = mysqli_num_rows($query);

   if($jml > 0){
      if ($data['role']=1) {
         $_SESSION['username'] = $data['username'];
         $_SESSION['password'] = $data['password'];
         header('location: index.php');
      } elseif ($data['role']=2) {
         $_SESSION['username'] = $data['username'];
         $_SESSION['password'] = $data['password'];
         header('location: index-2.php');
      } elseif ($data['role']=3) {
         $_SESSION['username'] = $data['username'];
         $_SESSION['password'] = $data['password'];
         header('location: index-3.php');
      } elseif ($data['role']=4) {
         $_SESSION['username'] = $data['username'];
         $_SESSION['password'] = $data['password'];
         header('location: index-4.php');
      } elseif ($data['role']=5) {
         $_SESSION['username'] = $data['username'];
         $_SESSION['password'] = $data['password'];
         header('location: index-5.php');
      } elseif ($data['role']=6) {
         $_SESSION['username'] = $data['username'];
         $_SESSION['password'] = $data['password'];
         header('location: index-6.php');
      } 
   }else{
      echo "<p align='center'>Login Gagal</p>";
      echo "<meta http-equiv='refresh' content='2; url=login.php'>";
   }
?>