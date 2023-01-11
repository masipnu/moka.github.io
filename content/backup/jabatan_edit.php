<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM jabatan WHERE id_jabatan='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h4 class="mt-2">Edit Jabatan</h4>
<hr>
<form method="post" action="?hal=jabatan_update">
   <input type="hidden" name="id" value="<?= $data['id_jabatan'] ?>">

   <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>   
      <div class="col-sm-4">
         <input class="form-control" type="text" id="nama" name="nama" value="<?= $data['nama_jabatan'] ?>">
      </div> 
   </div>
   
   <button type="submit" class="btn btn-info"><i class="oi oi-task"></i> Simpan</button>
   <button type="reset" class="btn btn-warning"><i class="oi oi-circle-x"></i> Batal</button>
   
</form>