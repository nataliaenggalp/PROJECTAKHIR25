<?php include('config.php');
include('cek-login.php');
?>

<html>
<head>
    <title>Lowongan Kerja</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="lowongan, pekerjaan, kerja, pekerja, perusahaan, lowongankita, kita">
    <meta name="description" content="lowongankita merupakan website yang menyediakan lowongan pekerjaan. dilowongan kita anda bisa melamar pekerjaan yang terlah di daftarkan oleh perusahaan - perusahaan yang membutuhkan pekerja">
    <meta name="author" content="lowongankita">
    
     <link rel="stylesheet" media="screen" href="css/style.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <link href="css/sb-admin-2.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div id="wrapper">

        <Header class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="nav navbar-top-links" align="center">
                <img class="brand" src="images/header2.jpg">
            </div>
        </header>
   
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <ul class="nav navbar-top-links navbar-left">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home fa-fw"></i> Home
                    </a>
                </li>
                <li>
                    <a href="lowongan.php"><i class="fa  fa-file-o  fa-fw"></i> Lowongan
                    </a>
                </li>
                <li>
                    <a href="tentangkami.php"><i class="fa  fa-group  fa-fw"></i> Tentang Kami
                    </a>
                </li>
                <li>
                    <a href="kontak.php"><i class="fa fa-book fa-fw"></i> kontak
                    </a>
                </li>
               
            </ul>
          

            <ul class="nav navbar-top-links navbar-right">
                <?php 
                            if (!empty($_SESSION['usernamecalonpekerja'])) {
                            ?>
                                <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="calonpekerja/index.php">
                                <i class="fa fa-user fa-fw"></i> Masuk Halaman Calonpekerja</a></li>
                                <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="logout.php">
                                <i class="fa fa-user fa-fw"></i> Logout</a></li>
                            <?php
                            } else if (!empty($_SESSION['usernameperusahaan']) ) {
                            ?>
                                <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="perusahaan/index.php">
                                <i class="fa fa-user fa-fw"></i> Masuk Halaman Perusahaan</a></li>
                                <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="logout.php">
                                <i class="fa fa-user fa-fw"></i> Logout</a></li>
                            <?php    
                            } else  {
                                ?>
                                <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="daftar.php">
                                <i class="fa fa-user fa-fw"></i> Daftar</a></li>
                                <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="pilihlogin.php">
                                <i class="fa fa-user fa-fw"></i> Login</a></li>
                           <?php
                            }
                            ?>
               
            </ul>
           
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                         Pendaftaran
                        
                    </h1>
                </div>
               
            </div>
            
            <div class="row">
                <div class="col-lg-12">
				<div class="container">
                    

                    <script src="js/js/jquery.min.js"></script>
                    <script src="js/js/bootstrap.min.js"></script>

                    <div id="deskripsi">
                        <strong>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#perusahaan" data-toggle="tab">Perusahaan</a></li>
                                <li><a href="#calonpekerja" data-toggle="tab">Calon Pekerja</a></li>
                            </ul>
                            <div class="tab-content">
                                <ul class="tab-pane active" id="perusahaan">
                                    <h2>Silahkan Daftar Sebagai Perusahaan</h2>
                                    <form name="input_data" action="perusahaan/insert.php" method="post">
                                        <table>
                                            <tbody>
											
                                                <div class="form-group row">
												<label for="username" class="col-sm-2 col-form-label">Username</label>
												<div class="col-sm-10">
												<input type="text" name ="usernameperusahaan" class="form-control" id="username" required="required">
												</div>
												</div>
                                                <div class="form-group row">
												<label for="password" class="col-sm-2 col-form-label">Password</label>
												<div class="col-sm-10">
												<input type="password" name ="password" class="form-control" id="password" required="required">
												</div>
												</div>
                                                <div class="form-group row">
												<label for="namaperusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
												<div class="col-sm-10">
												<input type="text" name ="namaperusahaan" class="form-control" id="namaperusahaan" required="required">
												</div>
												</div>
                                                <div class="form-group row">
												<label for="emailperusahaan" class="col-sm-2 col-form-label">Email Perusahaan</label>
												<div class="col-sm-10">
												<input type="text" name ="emailperusahaan" class="form-control" id="emailperusahaan" required="required">
												</div>
												</div>
                                                <div class="form-group row ">
												<label for="noteleponperusahaan" class="col-sm-2 col-form-label">No Telepon Perusahaan</label>
												<div class="col-sm-10">
												<input type="text" name ="noteleponperusahaan" class="form-control" id="noteleponperusahaan" required="required">
												</div>
												</div>
                                                <div class="form-group row">
												<label for="alamatperusahaan" class="col-sm-2 col-form-label"> Alamat Perusahaan</label>
												<div class="col-sm-10">
												<input type="text" name ="alamatperusahaan" class="form-control" id="alamatperusahaan" required="required">
												</div>
												</div>
                                                <div class="form-group row">
												<label for="deskripsiperusahaan" class="col-sm-2 col-form-label"> Deskripsi Perusahaan</label>
												<div class="col-sm-10">
												<input type="text" name ="deskripsiperusahaan" class="form-control" id="deskripsiperusahaan" required="required">
												</div>
												</div>
                                               <div class="form-group row">
												<label for="jenispekerjaanyangadadiperusahaan" class="col-sm-2 col-form-label">Jenis Pekerjaan</label>
												<div class="col-sm-10">
												<input type="text" name ="jenispekerjaanyangadadiperusahaan" class="form-control" id="jenispekerjaanyangadadiperusahaan" required="required">
												</div>
												</div>
                                                <tr><td align="left" colspan="3"><input type="submit" name="submit" value="Daftar" class="btn btn-primary my-1" ></td></tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </ul>
                                <ul class="tab-pane" id="calonpekerja">
                                    <h2>Silahkan Daftar Sebagai Calon Pekerja</h2>
                                    <form enctype="multipart/form-data" name="input_data" action="calonpekerja/insert.php" method="post">
                                        <table border="0" cellpadding="5" cellspacing="0">
                                            <tbody>
                                                <div class="form-group row">
												<label for="usernamecalonpekerja" class="col-sm-2 col-form-label"> Username</label>
												<div class="col-sm-10">
												<input type="text" name ="usernamecalonpekerja" class="form-control" id="usernamecalonpekerja" required="required">
												</div>
												</div>
                                                <div class="form-group row">
												<label for="password" class="col-sm-2 col-form-label">Password</label>
												<div class="col-sm-10">
												<input type="password" name ="password" class="form-control" id="password" required="required">
												</div>
												</div>
                                                <div class="form-group row">
												<label for="namacalonpekerja" class="col-sm-2 col-form-label"> Nama Lengkap </label>
												<div class="col-sm-10">
												<input type="text" name ="namacalonpekerja" class="form-control" id="namacalonpekerja" required="required">
												</div>
												</div>
                                                <div class="form-group row">
												<label for="kotacalonpekerja" class="col-sm-2 col-form-label"> Kota</label>
												<div class="col-sm-10">
												<input type="text" name ="kotacalonpekerja" class="form-control" id="kotacalonpekerja" required="required">
												</div>
												</div>
												<div class="form-group row">
												<label for="provinsicalonpekerja" class="col-sm-2 col-form-label">Provinsi</label>
												<div class="col-sm-10">
												<input type="text" name ="provinsicalonpekerja" class="form-control" id="provinsicalonpekerja" required="required">
												</div>
												</div>
                                                <div class="form-group row">
												<label for="alamatcalonpekerja" class="col-sm-2 col-form-label"> Alamat</label>
												<div class="col-sm-10">
												<input type="text" name ="alamatcalonpekerja" class="form-control" id="alamatcalonpekerja" required="required">
												</div>
												</div>
                                                <div class="form-group row">
												<label for="emailcalonpekerja" class="col-sm-2 col-form-label">Email</label>
												<div class="col-sm-10">
												<input type="text" name ="emailcalonpekerja" class="form-control" id="emailcalonpekerja" required="required">
												</div>
												</div>
                                                <div class="form-group row">
												<label for="noteleponcalonpekerja" class="col-sm-2 col-form-label"> No telepon</label>
												<div class="col-sm-10">
												<input type="text" name ="noteleponcalonpekerja" class="form-control" id="noteleponcalonpekerja" required="required">
												</div>
												</div>
                                                <div class="form-group row">
												<label for="pendidikanterakhir" class="col-sm-2 col-form-label"> Pendidikan Terakhir</label>
												<div class="col-sm-10">
												<input type="text" name ="pendidikanterakhir" class="form-control" id="pendidikanterakhir" required="required">
												</div>
												</div>
                                                <div class="form-group row">
												<label for="skilldankeahlian" class="col-sm-2 col-form-label">Skill & Keahlian</label>
												<div class="col-sm-10">
												<input type="text" name ="skilldankeahlian" class="form-control" id="skilldankeahlian" required="required">
												</div>
												</div>
                                                    <input type="submit" name="submit" value="Daftar"  class="btn btn-primary my-1"></p>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
									</div>
                                </ul>
                            </div>
                        </strong>
                    </div>
                </div>
            </div>
			</div>
           
        </div>
       
    </div>
    
    <div id="footer"><center> &copy 2020 Natalia Enggal Pamungkas </center></div>
</div>
</body>
</html>




