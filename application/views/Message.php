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

    <title>Admin-Manage Users</title>

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
                    <div class="col-lg-15">
                        <h1 class="page-header">
                            Messages
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'homeadmin'?>">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-comments"></i> Messages
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                <div class="col-lg-15">    
                <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                <tr>      
                    <th>Name</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
                <?php
                foreach($data as $m){
                ?>
                <tr>
                        
                    <td><?php echo $m->name ?></td>
                    <td><?php echo $m->email ?></td>
                    <td><?php echo $m->telephone ?></td>
                    <td><?php echo $m->message ?></td>
                    <td>
                         <?php echo anchor('Message/hapus/'.$m->email,'Delete'); ?>
                    </td>
                </tr>
                <?php } ?>
                 </table>
                 
                </div>
                </div>
            
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
