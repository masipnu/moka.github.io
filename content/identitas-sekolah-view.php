<?php
   if(!defined('INDEX')) die("");
?>

<?php
    // ambil data sekolah dari database
    $query = mysqli_query($con, "SELECT * FROM sekolah");
    $data = mysqli_fetch_array($query);
?>

<h4 class="mt-2">Identitas Sekolah</h4>
<hr>
<!-- <a class="btn btn-success" href="?hal=jabatan_tambah"><i class="oi oi-plus"></i> Tambah</a> -->
<div class="row">
    <div class="col">

        <div class="form-group row mb-2 mb-2">
            <label for="npsn" class="col-sm-4 col-form-label">NPSN</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="npsn"
                        name="npsn"
                        value="<?= $data['npsn']?>">
            </div>
        </div>

        <div class="form-group row mb-2">
            <label for="nama-sekolah" class="col-sm-4 col-form-label">Nama Sekolah</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="nama-sekolah"
                        name="nama-sekolah"
                        value="<?= $data['nama-sekolah']?>"
                        >
            </div>
        </div>

        <div class="form-group row mb-2">
            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="alamat"
                        name="alamat"
                        value="<?= $data['alamat-sekolah']?>"
                        >
            </div>
        </div>

        <div class="form-group row mb-2">
            <label for="tgl-berdiri" class="col-sm-4 col-form-label">Tanggal Pendirian</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="alamat"
                        name="alamat"
                        value="<?= $data['tgl-berdiri']?>"
                        >
            </div>
        </div>

        <div class="form-group row mb-2">
            <label for="ks" class="col-sm-4 col-form-label">Kepala Sekolah</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="alamat"
                        name="alamat"
                        value="<?= $data['ks']?>"
                        >
            </div>
        </div>

        <div class="form-group row mb-2">
            <label for="no-telp" class="col-sm-4 col-form-label">No. Telp</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="alamat"
                        name="alamat"
                        value="<?= $data['no-telp']?>"
                        >
            </div>
        </div>

        <div class="form-group row mb-2">
            <label for="email" class="col-sm-4 col-form-label">E-Mail</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="alamat"
                        name="alamat"
                        value="<?= $data['email']?>"
                        >
            </div>
        </div>

        <div class="form-group row mb-2">
            <label for="website" class="col-sm-4 col-form-label">Website</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="alamat"
                        name="alamat"
                        value="<?= $data['website']?>"
                        >
            </div>
        </div>

    <!-- modif-1 nggak jadi -->
    <!-- <ul>
        <li>
            <label for="npsn" class="col-md-4">NPSN</label><span class="text-secondary">:</span>
            <span id="nama_sekolah" class="col-md-8"><?= $data['npsn']?></span>
        </li>
        <li>
            <label for="nama_sekolah" class="col-md-4">Nama Sekolah</label><span class="text-secondary">:</span>
            <span id="nama_sekolah"class="col-md-8"><?= $data['nama-sekolah']?></span>
        </li>
        <li>
            <label for="alamat" class="col-md-4">Alamat</label><span class="text-secondary">:</span>
            <span id="alamat" class="col-md-8"><?= $data['alamat-sekolah']?></span>
        </li>
        <li>
            <label for="tgl_berdiri" class="col-md-4">Tanggal Pendirian</label><span class="text-secondary">:</span>
            <span id="tgl_berdiri"class="col-md-8"><?= $data['tgl-berdiri']?></span>
        </li>
        <li>
            <label for="ks" class="col-md-4">Kepala Sekolah</label><span class="text-secondary">:</span>
            <span id="ks" class="col-md-8"><?= $data['ks']?></span>
        </li>
        <li>
            <label for="nama_sekolah" class="col-md-4">Nama Sekolah</label><span class="text-secondary">:</span>
            <span id="nama_sekolah"class="col-md-8"><?= $data['nama-sekolah']?></span>
        </li>
        <li>
            <label for="no_telp" class="col-md-4">No. Telepon</label><span class="text-secondary">:</span>
            <span id="no_telp" class="col-md-8"><?= $data['no-telp']?></span>
        </li>
        <li>
            <label for="email" class="col-md-4">E-Mail</label><span class="text-secondary">:</span>
            <span id="email"class="col-md-8"><?= $data['email']?></span>
        </li>
        <li>
            <label for="website" class="col-md-4">Website</label><span class="text-secondary">:</span>
            <span id="website" class="col-md-8"><?= $data['website']?></span>
        </li>
    </ul> -->

    </div>
<div class="col">
<div class="form-group row mb-2">
            <div class="col-sm-12 text-center">
                <img src="images/<?= $data['logo']?>"
                        alt=""
                        style="height:250px">
            </div>
            <label for="logo" class="col-sm-12 col-form-label text-center">Logo : <?= $data['nama-sekolah']?></label>
        </div>
</div>
</div>
   </tbody>
</table>
</div>