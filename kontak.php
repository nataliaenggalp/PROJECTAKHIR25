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
    <meta name="description" content="">
    <meta name="author" content="">

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<div id="wrapper">

        <!-- Header -->
        <Header class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="nav navbar-top-links" align="center">
                <img class="brand" src="header2.jpg">
            </div>
        </header>
        <!-- /Header -->

        <!-- Navigation -->
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
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-static-side -->

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
                            } else if (!empty($_SESSION['username']) ) {
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
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-static-side -->

            
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <?php
                        $query = mysqli_query($con, "select * from posting where Nav='Kontak' ");
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                        echo $data['Judul'];
                        ?> <small><?php echo $data['TglPost']; ?></small>
                        <?php $no++; } ?>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            

                	<div id="deskripsi">
				<strong>
                    <?php 
                    $query = mysqli_query($con, "select * from posting where Nav='Kontak' "); 
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <p><?php echo $data['Isi']; ?></p>
                    <br>
                    <?php $no++; } ?>
                </strong>
				
			</div>

	</div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ./Row -->
        </div>
    	<!-- /#page-wrapper -->
        <div id="footer"><center> &copy 2020 Natalia Enggal Pamungkas</center></div>
    </div>
</body>
</html>


