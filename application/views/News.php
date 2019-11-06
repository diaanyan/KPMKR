<?php
if(!isset($_SESSION['nama'])){
    redirect(base_url("logadmin"));
} ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin- Manage News</title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo base_url('assets/sbAdmin/css/bootstrap.min.css')?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo base_url('assets/sbAdmin/css/sb-admin.css')?> rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=<?php echo base_url('assets/sbAdmin/font-awesome/css/font-awesome.min.css')?> rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

              <!-- Navigation -->

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Admin KPMKR</a>
            </div>
            <!-- Top Menu Items -->
            
            <ul class="nav navbar-right top-nav">
                
                <li class="">
                    <a href="<?php echo base_url().'logadmin/logout' ?>" class="dropdown-toggle" >
                        <i class="fa fa-power-off"></i> Log Out
                    </a>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                         <a href="<?php echo base_url('homeadmin/index');?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('crud/index');?>"><i class="fa fa-fw fa-bar-chart-o"></i> Manage Users Account</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('crud/gallery');?>"><i class="fa fa-fw fa-table"></i> Manage Gallery</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('crud/news');?>"><i class="fa fa-fw fa-edit"></i> Manage News</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('crud/message');?>"><i class="fa fa-comments"></i> Manage Messages</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Manage News
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'homeadmin'?>">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> News
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                       
                        <form role="form" method="POST" action="<?php echo base_url().'index.php/crudNews/create'?>" enctype="multipart/form-data">
                            <h3>Tambah Berita Baru</h3>
                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input class="form-control" name="judul" placeholder="Ex. Pendaftaran Summer Camp telah dibuka!">
                            </div>

                            <div>
                                <table>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                </tr>
                                <tr>
                                    <td><input class= "form-control" type="text" name="tanggal" placeholder="Ex. 09"></td>
                                    <td ><input class= "form-control"  type="text" name="bulan" placeholder="Ex. Sep"></td>
                                    <td ><input class= "form-control"  type="text" name="tahun" placeholder="Ex. 2017"></td>
                                </tr>
                                </table>
                            </div>
                           
                            <br>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="image" size="20">
                               
                            </div>

                            <div class="form-group">
                                <label>Isi berita</label>
                                <textarea class="form-control" rows="8" name="isiberita" placeholder="tulis berita di sini"></textarea>
                            </div>
                            <div><input type="submit" class="btn btn-info" value="Save"></div>

                        </form>

                       
                    </div>
                        <div>
                            <h3>Lihat Semua Berita</h3>
                             <a href="<?php echo base_url('crudNews/readData') ?>"><button type="button" class="btn btn-lg" style="text-align: center">See All</button></a>
                        </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/sbAdmin/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/sbAdmin/bootstrap.min.js'?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url().'assets/sbAdmin/js/plugins/morris/raphael.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/sbAdmin/js/plugins/morris/morris.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/sbAdmin/js/plugins/morris/morris-data.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

</body>

</html>
