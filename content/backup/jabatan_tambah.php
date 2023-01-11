<?php
   if(!defined('INDEX')) die("");
?>

<h4 class="mt-2">Tambah Jabatan</h4>
<hr>
<form method="post" action="?hal=jabatan_insert">
   
   <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>   
      <div class="col-sm-4">
		<input class="form-control" type="text" id="nama" name="nama">
	  </div> 
   </div>

   <button type="submit" class="btn btn-info"><i class="oi oi-task"></i> Simpan</button>
   <button type="reset" class="btn btn-warning"><i class="oi oi-circle-x"></i> Batal</button>
   
</form>