<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>
<html>

<head>
<title>Halaman Alumni - Hai Alumni</title>
<?php
    include_once('gfile/head.php');
?>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
            include_once('gfile/header.php');
            
        ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Hai Alumni</small>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                       <div class="panel panel-default">
            <!--<div class="panel-heading"> Formulir Input Loker </div> -->
            <div class="panel-body" align="center">
                <h1> Hai Mutia, Selamat Siang </h1>
                <h2> Sudah mamam belum??? </h2>
            </div>
        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="asset/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="asset/js/plugins/morris/raphael.min.js"></script>
    <script src="asset/js/plugins/morris/morris.min.js"></script>
    <script src="asset/js/plugins/morris/morris-data.js"></script>

</body>

</html>
