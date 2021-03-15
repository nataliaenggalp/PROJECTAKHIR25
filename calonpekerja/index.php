<html>
<?php 

include('cek-login.php');
include('config.php');
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
                     <?php echo "Selamat Datang ", $_SESSION['usernamecalonpekerja']; ?>
                        
                    </h1>
                </div>
                
            </div>
           
            <div class="row">
                <div class="col-lg-12">

                    <div id="deskripsi">
                <p>Silahkan mendaftarkan lamaran pekerjaan anda di lowongan - lowongan yang ada di website kami, salam sukses.<p> 
                               
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



