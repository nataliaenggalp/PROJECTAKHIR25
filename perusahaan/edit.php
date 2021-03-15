<html>
<?php 
include ('config.php');
include('cek-login.php');
?>

<head>
    <title>Lowongan Kerja</title>
        
        <link rel="stylesheet" media="screen" href="css/style.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="lowongan, pekerjaan, kerja, pekerja, perusahaan, lowongankita, kita">
    <meta name="description" content="lowongankita merupakan website yang menyediakan lowongan pekerjaan. dilowongan kita anda bisa melamar pekerjaan yang terlah di daftarkan oleh perusahaan - perusahaan yang membutuhkan pekerja">
    <meta name="author" content="lowongankita">

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
                <img class="brand" src="header2.png">
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
                    <a href="lowongan.php"><i class="fa  fa-file-o  fa-fw"></i> List Lowongan
                    </a>
                </li>
                <li>
                    <a href="inputlowonganpekerjaan.php"><i class="fa  fa-group  fa-fw"></i> Mendaftarkan Lowongan
                    </a>
                </li>
                <li>
                    <a href="view-daftar.php"><i class="fa fa-book fa-fw"></i> Data Lowongan <?php echo $_SESSION['usernameperusahaan']; ?>
                    </a>
                </li>
               
            </ul>
     
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['usernameperusahaan']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="view.php"><i class="fa fa-user fa-fw"></i> Profil <?php echo $_SESSION['usernameperusahaan']; ?></a>
                        </li>
                        <li><a href="editpass.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                
                </li>
            
            </ul>
          
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                         Edit Data Diri Perusahaan
                        
                    </h1>
                </div>
              
            </div>
          
            <div class="row">
                <div class="col-lg-12">

                    <div id="deskripsi">
               
<?php 
$id = $_GET['id'];

$query = mysqli_query($con, "select * from dataperusahaan where perusahaan_id='$id'") or die(mysqli_error());

$data = mysqli_fetch_array($query);
?>





    <form name="update_data" action="update.php" method="post">
    <input type="hidden" name="perusahaan_id" value="<?php echo $id; ?>" />
    <table border="0" cellpadding="5" cellspacing="10">
    <tbody>
		 <div class="form-group row">
				<label for="judul" class="col-sm-2 col-form-label">Username</label>
				<div class="col-sm-10">
				<input type="text" name="usernameperusahaan" class="form-control" id="usernameperusahaan"required="required" value="<?php echo $data['usernameperusahaan']; ?>" disabled />
		</div>
		</div>
        <div class="form-group row ">
				<label for="judul" class="col-sm-2 col-form-label">Nama Perusahaan</label>
				<div class="col-sm-10">
				<input type="text" name="namaperusahaan" class="form-control" id="namaperusahaan" required="required" value="<?php echo $data['namaperusahaan']; ?>" />
		</div>
		</div>
        <div class="form-group row">
				<label for="judul" class="col-sm-2 col-form-label">Email Perusahaan</label>
				<div class="col-sm-10">
				<input type="text" name="emailperusahaan" class ="form-control" id="emailperusahaan"required="required" value="<?php echo $data['emailperusahaan']; ?>" />
			</div>
			</div>
        <div class="form-group row">
				<label for="judul" class="col-sm-2 col-form-label">No Telepon Perusahaan</label>
				<div class="col-sm-10">
				<input type="text" name="noteleponperusahaan" class ="form-control" id="noteleponperusahaan"required="required" value="<?php echo $data['noteleponperusahaan']; ?>" />
			</div>
			</div>
      <div class="form-group row">
				<label for="judul" class="col-sm-2 col-form-label">Alamat Perusahaan</label>
				<div class="col-sm-10">
				<input type="text" name="alamatperusahaan" class ="form-control" id="alamatperusahaan"required="required" value="<?php echo $data['alamatperusahaan']; ?>" />
			</div>
			</div>
			<div class="form-group row">
				<label for="judul" class="col-sm-2 col-form-label">Deskripsi Perusahaan</label>
				<div class="col-sm-10">
				<input type="text" name="deskripsiperusahaan" class ="form-control" id="deskripsiperusahaan"required="required" value="<?php echo $data['deskripsiperusahaan']; ?>" />
			</div>
			</div>
  
			<div class="form-group row">
				<label for="judul" class="col-sm-2 col-form-label">Jenis Pekerjaan</label>
				<div class="col-sm-10">
				<input type="text" name="jenispekerjaanyangadadiperusahaan" class ="form-control" id="jenispekerjaanyangadadiperusahaan"required="required" value="<?php echo $data['jenispekerjaanyangadadiperusahaan']; ?>" />
			</div>
			</div>
        <div>
           <input type="submit" name="submit" value="Simpan" class="btn btn-primary my-1" /></td>
        

     
    </tbody>
</table>
</form>
</div>
                
            </div>

    </div>
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>
                </div>
              
            </div>
        
        </div>
    
        <div id="footer"><center> &copy 2020 Natalia Enggal Pamungkas</center></div></div>
</body>
</html>






