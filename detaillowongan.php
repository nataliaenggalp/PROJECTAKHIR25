<?php 
include('config.php');
include('cek-login.php');
?>


<html>
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
                <img class="brand" src="header2.jpg">
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
        <?php 
        $id = $_GET['id'];
        $query = mysqli_query($con, "select * from datalowongan,dataperusahaan where datalowongan.perusahaan_id=dataperusahaan.perusahaan_id and lowongan_id='$id'") or die(mysqli_error());
        $data = mysqli_fetch_array($query);
        ?>



        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                         <?php echo "Lowongan Pekerjaan ", $data['namapekerjaan']," ", $data['namaperusahaan'];?>
                        
                    </h1>
                </div>
               
            </div>
            
            <div class="row">
                <div class="col-lg-12">

                	<div id="deskripsi">
                		<strong>
                			<p><?php echo  $data['deskripsipekerjaan'];?>
                				<?php echo ". Lowongan ini membutuhkan beberapa pekerja dengan jumlah ", $data['jumlahorangyangdiperlukan'];?>
                				<?php echo "Dengan Persyaratan : ", "<p>- ", $data['syaratpekerjaan'];?></p></p>
                				<p><?php echo  "Pekerjaan ini merupakan pekerjaan yang bersifat ", $data['jenispekerjaan'];?></p>
                			</strong>
				
					</div>

				</div>
            </div>
                
            </div>
           
        </div>
    	
        <div id="footer"><center> &copy 2020 Natalia Enggal Pamungkas</center></div>
    </div>
</body>
</html>


