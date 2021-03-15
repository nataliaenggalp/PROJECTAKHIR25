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
                         Ubah Password
                        
                    </h1>
                </div>
            
            </div>
         
            <div class="row">
                <div class="col-lg-12">

                    <div id="deskripsi">
               


<?php 
$usernameperusahaan = $_SESSION['usernameperusahaan'];
$query = mysqli_query($con, "select * from dataperusahaan where usernameperusahaan='$usernameperusahaan'") or die(mysqli_error());
$data = mysqli_fetch_array($query);
?>



    <form name="update_data" action="updatepass.php" method="post">
    <input type="hidden" name="perusahaan_id" value="<?php echo $data['perusahaan_id']; ?>" />
    <table border="0" cellpadding="5" cellspacing="10">
    <tbody>

        <tr>
            <td>Password Yang Baru </td>
            <td> : </td>
            <td><input type="password" name="password" required="required" /></td>
        </tr>

        
        <tr>
            <td align="left" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>

     
    </tbody>
</table>
</form>
                
            </div>

    </div>
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>
                </div>
              
            </div>
         
        </div>
        
        <div id="footer"><center>&copy:2020 Natalia Enggal Pamungkas</center></div></div>
</body>
</html>






