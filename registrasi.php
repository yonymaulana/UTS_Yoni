<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register PASWA 2022</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <img class="img-profile" src="<?= ('assets/img/Asset_6.png'); ?>" width="150">
                                <h1 class="h4 text-gray-900 mb-4"><b>Form Pendaftaran Paswa</b></h1>
                            </div>
                            <form method="post" action="data_peserta.php" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label><b>NIM</b></label>
                                        <input type="text" class="form-control form-control-user" placeholder="NIM" name="nim">
                                    </div>
                                    <div class="col-sm-6">
                                        <label><b>Nama</b></label>
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Nama Lengkap" name="nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label><b>Tempat Lahir</b></label>
                                        <input type="text" class="form-control form-control-user" placeholder="Tempat Lahir" name="tempat_lahir">
                                    </div>
                                    <div class="col-sm-6">
                                        <label><b>Tanggal Lahir</b></label>
                                        <input type="date" class="form-control form-control-user" placeholder="Tanggal Lahir" name="tanggal_lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label><b>Program Studi</b></label>
                                        <select class="form-control form-control-user" Placeholder="Program Studi" name="prodi">
                                            <option value="0">--Pilih Program Studi--</option>
                                            <option value="TI">Teknik Informatika</option>
                                            <option value="SI">SIstem Informasi</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label><b>Semester</b></label>
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
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label><b>Kelas</b></label>
                                        <select class="form-control form-control-user" data-placeholder="Kelas" name="kelas">
                                            <option value="0">--Pilih Kelas--</option>
                                            <option value="Pagi">Pagi</option>
                                            <option value="Malam">Malam</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label><b>Nomor Handphone</b></label>
                                        <input type="text" class="form-control form-control-user" placeholder="No. HP" name="no_hp">
                                    </div>
                                    <div class="col-sm-6">
                                        <label><b>Email</b></label>
                                        <input type="email" class="form-control form-control-user" placeholder="Email" name="email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label><b>Jenis Kelamin</b></label>
                                        <select class="form-control form-control-user" Placeholder="Jenis Kelamin" name="jenis_kelamin">
                                            <option value="0">--Pilih Jenis Kelamin--</option>
                                            <option value="1">Laki-Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label><b>Agama</b></label>
                                        <select class="form-control form-control-user" data-placeholder="Agama" name="agama">
                                            <option value="0">--Pilih Agama--</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label><b>Alamat</b></label>
                                    <input type="text" placeholder="Alamat" name="alamat">
                                </div>

                                <div class="form-group">
                                    <label><b>Foto</b></label>
                                    <input type="file" placeholder="Foto" name="foto">
                                </div>

                                <input type="submit" class="btn btn-primary btn-user btn-block">
                                </a>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>