<html>

<?php
session_start();

if (!empty($_SESSION['usernameperusahaan'])) {
    header('location:index.php');
}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="lowongan, pekerjaan, kerja, pekerja, perusahaan, lowongankita, kita">
    <meta name="description" content="lowongankita merupakan website yang menyediakan lowongan pekerjaan. dilowongan kita anda bisa melamar pekerjaan yang terlah di daftarkan oleh perusahaan - perusahaan yang membutuhkan pekerja">
    <meta name="author" content="lowongankita">

    <title>Login Perusahaan</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="css/sb-admin-2.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">
        
        <header class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="nav navbar-top-links" align="center">
                
                <h1 class="#"> Lowongan Kerja</h1>
                <span class="#">Login Sebagai Perusahaan</span>
            </div>
        </header>
       
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i> Silahkan Masuk</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" name="login" action="otentikasi.php" method="post">
                            <fieldset>
                                <div align="center">
                                    <label>
                                        <?php 
                                        //kode php ini kita gunakan untuk menampilkan pesan eror
                                        if (!empty($_GET['error'])) {
                                            if ($_GET['error'] == 1) {
                                                echo '*username dan Password belum diisi!';
                                            } else if ($_GET['error'] == 2) {
                                                echo '*username belum diisi!';
                                            } else if ($_GET['error'] == 3) {
                                                echo '*password belum diisi!';
                                            } else if ($_GET['error'] == 4) {
                                                echo '*username dan Password tidak terdaftar!';
                                            }
                                        }
                                        ?>
                                    </label>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input class="form-control" placeholder="Username" name="usernameperusahaan" type="text" autofocus>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa  fa-key"></i></span>
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                       
                                    </label>
                                </div>
                                
                                <input type="submit" name="login" value="Login" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <script src="js/sb-admin-2.js"></script>

</body>

</html>
