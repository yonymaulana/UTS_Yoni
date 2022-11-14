<?php
include('header.php');
?>
<?php
include('side-menu.php');
?>
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="">
                <h3 class="mb-4"><b>Nama Peserta Paswa 2022</b></h3>
                <form method="post" action="peserta_pro_add.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <div class="form-floating mb-2">
                            <label for="floatingText"><b>NIM</b></label>
                            <input type="number" name="nim" class="form-control" id="floatingText" placeholder="Masukkan Nim">

                        </div>
                        <div class="form-floating mb-0">
                            <label for="floatingInput"><b>Nama Lengkap</b></label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">

                        </div>
                        <label class="form-label"><b>Program Studi</b></label>
                        <select class="form-control" Placeholder="Program Studi" name="prodi">
                            <option value="0">--Pilih Program Studi--</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>
                        <label class="form-label"><b>Semester</b></label>
                        <select class="form-control form-control-user" Placeholder="Semester" name="semester">
                            <option value="0">--Pilih Semester--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                        <label class="form-label"><b>Kelas</b></label>
                        <select class="form-control" Placeholder="Kelas" name="kelas">
                            <option value="0">--Pilih Kelas--</option>
                            <option value="Reguler Pagi">Reguler Pagi</option>
                            <option value="Reguler Malam">Reguler Malam</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                        <br>
                        <div class="form-floating mb-2">
                            <label for="floatingInput"><b>No Handphone</b></label>
                            <input type="number" name="no_hp" class="form-control" placeholder="Masukkan Nomor Telpon">

                        </div>
                        <div class="form-floating mb-2">
                            <label for="floatingInput"><b>Email</b></label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email">

                        </div>
                        <div class="form-floating mb-2">
                            <label for="floatingInput"><b>Alamat</b></label>
                            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">

                        </div>
                        <label class="form-label"><b>Jenis Kelamin</b></label>
                        <select class="form-control" Placeholder="Pilih Jenis Kelamin" name="jenis_kelamin">
                            <option value="0">--Pilih Jenis Kelamin--</option>
                            <option value="Laki Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

                        <label class="form-label"><b>Masukan Foto</b></label>
                        <input type="file" name="foto" class="form-control" placeholder="Masukan Foto">

                        <label class="form-label"><b>Agama</b></label>
                        <select class="form-control" Placeholder="Agama" name="agama">
                            <option value="0">--Pilih Agama--</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Kristen Katholik">Kristen Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budhha">Budhha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="form-floating mb-2">
                        <label for="floatingInput"><b>Tempat Lahir</b></label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">

                    </div>
                    <div class="form-floating mb-2">
                        <label for="floatingInput"><b>Tanggal Lahir</b></label>
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir">

                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="kelompok.php" class="btn btn-primary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

<?php
include('footer.php');
?>