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
                                    $query1 = mysqli_query($con, "select * from datacalonpekerja,datacurriculumvitae,datalowongan,dataperusahaan where datacalonpekerja.calonpekerja_id=datacurriculumvitae.calonpekerja_id and datacurriculumvitae.lowongan_id=datalowongan.lowongan_id and datalowongan.perusahaan_id=dataperusahaan.perusahaan_id and usernamecalonpekerja='$usernamecalonpekerja'");
                                    $no = 1;

                                while ($data1 = mysqli_fetch_array($query1)){
                               
                               if(!empty($data1['statuslamaran'])){
                                ?>
                                
                                <li><a href="view-lamaran-detail.php?id=<?php echo $data1['curriculum_id']; ?>"><i class="fa fa-user fa-fw"></i> Lowongan anda pada perusahaan <?php echo $data1['namaperusahaan'];?> dengan nama pekerjaan <?php echo $data1['namapekerjaan'];?> telah <b><?php echo $data1['statuslamaran'];?></b></a></li>
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
                         Data Lowongan Pekerjaan <?php echo $_SESSION['usernamecalonpekerja']; ?>
                        
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
                                    <thead>
                                        <tr>
                                            <label>Tabel Lamaran Pekerjaan Saya :</label>
                                        </tr>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Lowongan</th>
                                            <th>Perusahaan</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $usernamecalonpekerja = $_SESSION['usernamecalonpekerja'];
                                    $query = mysqli_query($con, "select * from datacalonpekerja,datacurriculumvitae,datalowongan,dataperusahaan where datacalonpekerja.calonpekerja_id=datacurriculumvitae.calonpekerja_id and datacurriculumvitae.lowongan_id=datalowongan.lowongan_id and datalowongan.perusahaan_id=dataperusahaan.perusahaan_id and usernamecalonpekerja='$usernamecalonpekerja'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr class="gradeA">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['namapekerjaan']; ?></td>
                                            <td><?php echo $data['namaperusahaan']; ?></td>
                                            <td>
                                                <a href="view-lamaran-detail.php?id=<?php echo $data['curriculum_id']; ?>"><i class="fa fa-pencil"></i> Lihat Detail Lamaran</a>
                                            </td>
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




