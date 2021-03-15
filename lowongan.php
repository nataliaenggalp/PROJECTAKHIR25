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
                                <a href="calonpekerja/index.php">
                                <i class="fa fa-user fa-fw"></i> Masuk Halaman Calonpekerja</a></li>
                                <li>
                                <a href="logout.php">
                                <i class="fa fa-user fa-fw"></i> Logout</a></li>
                            <?php
                            } else if (!empty($_SESSION['usernameperusahaan']) ) {
                            ?>
                                <li>
                                <a href="perusahaan/index.php">
                                <i class="fa fa-user fa-fw"></i> Masuk Halaman Perusahaan</a></li>
                                <li>
                                <a href="logout.php">
                                <i class="fa fa-user fa-fw"></i> Logout</a></li>
                            <?php    
                            } else  {
                                ?>
                                <li>
                                <a href="daftar.php">
                                <i class="fa fa-user fa-fw"></i> Daftar</a></li>
                                <li>
                                <a href="pilihlogin.php">
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
                        <i class="fa  fa-search"></i> List Lowongan Pekerjaan
                        
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
                                            
                                        </tr>
                                    
                                    
                                    <?php 
                                    $query = mysqli_query($con, "select * from datalowongan order by lowongan_id desc");
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
									
                                        <tr class="gradeA">
                                            <td>
                                                <th><?php echo "Nama Pekerjaan : ", $data['namapekerjaan'];?></th>
                                                <th><?php echo "Jenis Pekerjaan : ", $data['jenispekerjaan']; ?></th>
                                                <th><?php echo "Jumlah Orang yang dibutuhkan :", $data['jumlahorangyangdiperlukan']; ?></th>
                                                <th><?php echo "Status Lowongan : ", $data['statuslowonganpekerjaan']; ?></th>
                                                <th><br><a href="detaillowongan.php?id=<?php echo $data['lowongan_id']; ?>">Lihat Selengkapnya</a>
                                            </td>
                                        </tr>
										</thead>
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
