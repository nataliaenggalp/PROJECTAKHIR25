<html>

<?php 
include('config.php');
include('cek-login.php');
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="lowongan, pekerjaan, kerja, pekerja, perusahaan, lowongankita, kita">
    <meta name="description" content="lowongankita merupakan website yang menyediakan lowongan pekerjaan. dilowongan kita anda bisa melamar pekerjaan yang terlah di daftarkan oleh perusahaan - perusahaan yang membutuhkan pekerja">
    <meta name="author" content="lowongankita">

    <title>Lowongan Kerja</title>

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
                    <a href="view-daftar.php"><i class="fa fa-book fa-fw"></i> Data Lowongan <?php echo $_SESSION['usernamecalonpekerja']; ?>
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
                         Data Detail Pelamar
                       
                    </h1>
                </div>
               
            </div>
          
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          
                        </div>
                       
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <tbody>

                                    <?php 
                                    $id = $_GET['id'];
                                    $query = mysqli_query($con, "select * from datacurriculumvitae where curriculum_id='$id'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                    
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td><?php echo $data['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Tanggal Lahir</td>
                                            <td>:</td>
                                            <td><?php echo $data['tempattanggallahir']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td>:</td>
                                            <td><?php echo $data['jeniskelamin']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td>:</td>
                                            <td><?php echo $data['agama']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tinggi Badan</td>
                                            <td>:</td>
                                            <td><?php echo $data['tinggibadan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Berat Badan</td>
                                            <td>:</td>
                                            <td><?php echo $data['beratbadan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td><?php echo $data['alamat']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>No. Telepon</td>
                                            <td>:</td>
                                            <td><?php echo $data['notelepon']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td><?php echo $data['status']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td><?php echo $data['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>SMP</td>
                                            <td>:</td>
                                            <td><?php echo $data['smp']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>SMA</td>
                                            <td>:</td>
                                            <td><?php echo $data['sma']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Perguruan Tinggi 1</td>
                                            <td>:</td>
                                            <td><?php echo $data['perguruantinggi1']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Perguruan Tinggi 2</td>
                                            <td>:</td>
                                            <td><?php echo $data['perguruantinggi2']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Perguruan Tinggi 3</td>
                                            <td>:</td>
                                            <td><?php echo $data['perguruantinggi3']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kemampuan 1 </td>
                                            <td>:</td>
                                            <td><?php echo $data['kemampuan1']; ?></td>
                                        </tr>
										<tr>
                                            <td>Kemampuan 2 </td>
                                            <td>:</td>
                                            <td><?php echo $data['kemampuan2']; ?></td>
                                        </tr>
										<tr>
                                            <td>Kemampuan 3 </td>
                                            <td>:</td>
                                            <td><?php echo $data['kemampuan3']; ?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Pengalaman 1</td>
                                            <td>:</td>
                                            <td><?php echo $data['pengalaman1']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pengalaman 2</td>
                                            <td>:</td>
                                            <td><?php echo $data['pengalaman2']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pengalaman 3</td>
                                            <td>:</td>
                                            <td><?php echo $data['pengalaman3']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Lowongan</td>
                                            <td>:</td>
                                            <td><?php echo $data['lowongan_id']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status Lamaran</td>
                                            <td>:</td>
                                            <td><b><?php echo $data['statuslamaran']; ?></b></td>
                                        </tr>
                     
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                          </div>
                           
                        </div>
                        
                    </div>
                   
                </div>
               
            </div>
           
        </div>
        

    </div>
   
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <script src="js/sb-admin-2.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>




