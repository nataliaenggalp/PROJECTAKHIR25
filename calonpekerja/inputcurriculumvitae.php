<html>
<?php 
include('config.php');
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

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
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
                    <a href="lowongan.php"><i class="fa  fa-file-o  fa-fw"></i> List Lowongan
                    </a>
                </li>
                <li>
                    <a href="view-daftar.php"><i class="fa fa-book fa-fw"></i> Data Lamaran Pekerjaan <?php echo $_SESSION['usernamecalonpekerja']; ?>
                    </a>
                </li>
               
            </ul>
           

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['usernamecalonpekerja']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="view.php"><i class="fa fa-user fa-fw"></i> Profil <?php echo $_SESSION['usernamecalonpekerja']; ?></a>
                        </li>
                        <li><a href="editpass.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                    
                </li>
                
            </ul>

             <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> Pemberitahuan <i class="fa fa-caret-down"></i>
                    </a>
                     
                    <ul class="dropdown-menu dropdown-user">
                                <?php 
                                $usernamecalonpekerja = $_SESSION['usernamecalonpekerja'];
                                    $query = mysqli_query($con, "select * from datacalonpekerja,datacurriculumvitae,datalowongan,dataperusahaan where datacalonpekerja.calonpekerja_id=datacurriculumvitae.calonpekerja_id and datacurriculumvitae.lowongan_id=datalowongan.lowongan_id and datalowongan.perusahaan_id=dataperusahaan.perusahaan_id and usernamecalonpekerja='$usernamecalonpekerja'");
                                    $no = 1;

                                while ($data = mysqli_fetch_array($query)){
                               
                               if(!empty($data['statuslamaran'])){
                                ?>
                                
                                <li><a href="view-lamaran-detail.php?id=<?php echo $data['curriculum_id']; ?>"><i class="fa fa-user fa-fw"></i> Lowongan anda pada perusahaan <?php echo $data['namaperusahaan'];?> dengan nama pekerjaan <?php echo $data['namapekerjaan'];?> telah <b><?php echo $data['statuslamaran'];?></b></a></li>
                                <?php }?>
                                <?php $no++; }?>
                         </ul>
                   
                </li>
               
            </ul>
            
           
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Pengisian Curriculum Vitae
                        
                    </h1>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                    <div id="deskripsi">
                <?php 
$usernamecalonpekerja = $_SESSION['usernamecalonpekerja'];

$query = mysqli_query($con, "select * from datacalonpekerja where usernamecalonpekerja='$usernamecalonpekerja'") or die(mysqli_error());

$data = mysqli_fetch_array($query);
?>

<?php 
$id = $_GET['id'];

$query1 = mysqli_query($con, "select * from datalowongan where lowongan_id='$id'") or die(mysqli_error());

$data1 = mysqli_fetch_array($query1);
?>      
        
        <div id="deskripsi">
            <form name="input_data" action="insertcurriculumvitae.php" method="post">
                <table border="0" cellpadding="5" cellspacing="0">
    <tbody>
       
        
		<div class="form-group row">
				<label for="judul" class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10">
				<input type="text" name="nama" class="form-control" id="namacalonpekerja"required="required" value="<?php echo $data['namacalonpekerja']; ?>" />
		</div>
		</div>
        <div class="form-group row">
				<label for="tempattanggallahir" class="col-sm-2 col-form-label">TTL</label>
				<div class="col-sm-10">
				<input type="text" name ="tempattanggallahir" class="form-control" id="tempattanggallahir" required="required">
				</div>
				</div>
        <div class="form-group row">
				<label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-10">
				<input type="text" name ="jeniskelamin" class="form-control" id="jeniskelamin" required="required">
				</div>
				</div>
		<div class="form-group row">
				<label for="agama" class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-10">
				<input type="text" name ="agama" class="form-control" id="agama" required="required">
		</div>
		</div>
		<div class="form-group row">
				<label for="tinggibadan" class="col-sm-2 col-form-label">Tinggi Badan</label>
				<div class="col-sm-10">
				<input type="text" name ="tinggibadan" class="form-control" id="tinggibadan" required="required">
		</div>
		</div>
        <div class="form-group row">
				<label for="beratbadan" class="col-sm-2 col-form-label">Berat Badan</label>
				<div class="col-sm-10">
				<input type="text" name ="beratbadan" class="form-control" id="beratbadan" required="required">
		</div>
		</div>
        <div class="form-group row">
				<label for="judul" class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
				<input type="text" name="alamat" class="form-control" id="alamat"required="required" value="<?php echo $data['alamatcalonpekerja']; ?>" />
		</div>
		</div>
        <div class="form-group row">
				<label for="judul" class="col-sm-2 col-form-label">No Telepon</label>
				<div class="col-sm-10">
				<input type="text" name="notelepon" class="form-control" id="notelepon"required="required" value="<?php echo $data['noteleponcalonpekerja']; ?>" />
		</div>
		</div>
        <div class="form-group row">
				<label for="status" class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-10">
				<input type="text" name ="status" class="form-control" id="status" required="required">
		</div>
		</div>
         <div class="form-group row">
				<label for="judul" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
				<input type="text" name="email" class="form-control" id="email"required="required" value="<?php echo $data['emailcalonpekerja']; ?>" />
		</div>
		</div>
        
       <div class="form-group row">
				<label for="smp" class="col-sm-2 col-form-label">SMP</label>
				<div class="col-sm-10">
				<input type="text" name ="smp" class="form-control" id="smp">
		</div>
		</div>
         <div class="form-group row">
				<label for="sma" class="col-sm-2 col-form-label">SMA</label>
				<div class="col-sm-10">
				<input type="text" name ="sma" class="form-control" id="sma">
		</div>
		</div>
         <div class="form-group row">
				<label for="perguruantinggi1" class="col-sm-2 col-form-label">Perguruan Tinggi</label>
				<div class="col-sm-10">
				<input type="text" name ="perguruantinggi1" class="form-control" id="perguruantinggi1">
		</div>
		</div>
        <div class="form-group row">
				<label for="perguruantinggi2" class="col-sm-2 col-form-label">Perguruan Tinggi</label>
				<div class="col-sm-10">
				<input type="text" name ="perguruantinggi2" class="form-control" id="perguruantinggi2">
		</div>
		</div>
        <div class="form-group row">
				<label for="perguruantinggi3" class="col-sm-2 col-form-label">Perguruan Tinggi</label>
				<div class="col-sm-10">
				<input type="text" name ="perguruantinggi3" class="form-control" id="perguruantinggi3">
		</div>
		</div>
        
        <div class="form-group row">
				<label for="kemampuan1" class="col-sm-2 col-form-label">Keahlian </label>
				<div class="col-sm-10">
				<input type="text" name ="kemampuan1" class="form-control" id="kemampuan1">
		</div>
		</div>
        <div class="form-group row">
				<label for="kemampuan2" class="col-sm-2 col-form-label">Keahlian</label>
				<div class="col-sm-10">
				<input type="text" name ="kemampuan2" class="form-control" id="kemampuan2">
		</div>
		</div>
         <div class="form-group row">
				<label for="kemampuan3" class="col-sm-2 col-form-label">Keahlian</label>
				<div class="col-sm-10">
				<input type="text" name ="kemampuan3" class="form-control" id="kemampuan3">
		</div>
		</div>
       <div class="form-group row">
				<label for="pengalaman1" class="col-sm-2 col-form-label">Pengalaman</label>
				<div class="col-sm-10">
				<input type="text" name ="pengalaman1" class="form-control" id="pengalaman1">
		</div>
		</div>
        <div class="form-group row">
				<label for="pengalaman2" class="col-sm-2 col-form-label">Pengalaman</label>
				<div class="col-sm-10">
				<input type="text" name ="pengalaman2" class="form-control" id="pengalaman2">
		</div>
		</div>
       <div class="form-group row">
				<label for="pengalama31" class="col-sm-2 col-form-label">Pengalaman</label>
				<div class="col-sm-10">
				<input type="text" name ="pengalaman3" class="form-control" id="pengalaman3">
		</div>
		</div>
        <input type="hidden" name="lowongan_id" value="<?php echo $data1['lowongan_id']; ?>" />
        <input type="hidden" name="calonpekerja_id" value="<?php echo $data['calonpekerja_id']; ?>" />
        <div>
            <input type="submit" name="submit" value="Daftar" class="btn btn-primary my-1" /></td></p>
        </tr>
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
        
        <div id="footer"><center>&copy 2020 Natalia Enggal Pamungkas</center></div></div>
</body>
</html>

