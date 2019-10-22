<?php session_start(); ?>

<?php
  $koneksi = mysqli_connect("localhost","root","mysql","sttsedunew"); 

//   $q = "UPDATE agenda_bahasa SET agenda_deskripsi = REGEXP_REPLACE(agenda_deskripsi, '<img.+?//>', '')";
//   mysqli_query($koneksi, $q);

  if(isset($_POST['btnSubmit'])){
      $target_dir = '../events-poster/';
      $target_file = $target_dir . basename($_FILES['tbImgEvent']['name']);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

      if($uploadOk == 0){
        echo "File not uploaded";
      }else{
        $res = move_uploaded_file($_FILES['tbImgEvent']['tmp_name'], $target_file);
        if(!$res){
            echo "gagal";
        }
      }

      $ejudul = $_POST['tbNamaEvent'];
      $edeskripsi = $_POST['tbDescEvent'];
      $edate = $_POST['tbDateEvent'];
      $elokasi = $_POST['tbLokasiEvent'];
      $eTag = $_POST['tbEventTag'];
      $eposter = basename($_FILES['tbImgEvent']['name']);

      $query = "INSERT INTO event (`event_judul`, `event_tgl`, `event_desc`, `event_lokasi`, `event_img`, `event_tags`) VALUES ('$ejudul', '$edate', '$edeskripsi', '$elokasi', '$eposter', '$eTag')";
      $res = mysqli_query($koneksi, $query);

      if($res){
        $alert = true;
      }
  }

  if(isset($_POST['btnEdit'])){
      $id = $_POST['btnEdit'];
      $query = "SELECT * FROM event WHERE event_id = " . $id;
      $edit = mysqli_query($koneksi, $query)->fetch_array(); 
  }

  if(isset($_POST['btnSubmitEdit'])){
    $id = $_POST['tbIdEvent'];
    $ejudul = $_POST['tbNamaEvent'];
    $edeskripsi = $_POST['tbDescEvent'];
    $edate = $_POST['tbDateEvent'];
    $elokasi = $_POST['tbLokasiEvent'];
    $eTag = $_POST['tbEventTag'];

    $query = "UPDATE event SET event_judul='$ejudul', event_desc='$edeskripsi', event_tgl='$edate', event_lokasi='$elokasi', event_tags='$etag' WHERE event_id = '$id'";
    $res = mysqli_query($koneksi, $query);
    echo mysqli_error($koneksi);
  }

  if(isset($_POST['btnDelete'])){
      $id = $_POST['btnDelete'];
      $query = "DELETE FROM event WHERE event_id = '$id'";
      mysqli_query($koneksi, $query);
  }

  $query = "SELECT * FROM agenda_bahasa";
  $data = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style>
        .form-hidden {
            display: none;
        }
    </style>
    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="index.php" class="logo">
                <span class="logo-mini">STTS</span>
                <span class="logo-lg">STTS</span>
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <!-- <span class="logo-mini"><b>A</b>LT</span> -->
                <!-- logo for regular state and mobile devices -->
                <!-- <span class="logo-lg"><b>Admin</b>LTE</span> -->
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs"><?php echo ucfirst($_SESSION['userdata']['Username']); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    <p>
                                        <?php echo ucfirst($_SESSION['userdata']['Username']); ?>
                                    </p>
                                </li>
                                <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <form method="post">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Change Password</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-danger btn-flat" name="btnLogout">Sign
                                        Out</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo ucfirst($_SESSION['userdata']['Username']); ?></p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <!-- Optionally, you can add icons to the links -->
                    <li class="active"><a href="events.php"><i class="fa fa-calendar"></i> <span>Events</span></a></li>
                    <!-- <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Link in level 2</a></li>
              <li><a href="#">Link in level 2</a></li>
            </ul>
          </li> -->
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Hello, Admin!
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Events
                    </li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">
                <?php 
                    if(isset($alert) && $alert){
                ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Success!</h4>
                        Insert Event Berhasil!
                    </div>
                <?php
                    } elseif(isset($alert) && !$alert){
                ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Failed!</h4>
                        Insert Event Failed!
                    </div>
                <?php
                    }
                ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        List Events
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>

                    <div class="box-body">
                        <form method="post">
                            <table id="example" class="table table-responsive table-hover table-striped table-bordered"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama Event</th>
                                        <th>Deskripsi Event</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($data as $key => $value){
                                ?>
                                    <tr>
                                        <td><?= $value['agenda_id']; ?></td>
                                        <td><?= $value['agenda_judul']; ?></td>
                                        <td><?= $value['agenda_deskripsi']; ?></td>
                                        <td>
                                            <button type="submit" value="<?= $value['event_id']; ?>" name="btnEdit" class="btn btn-warning btn-flat"><i class="fa fa-edit"></i></button>
                                            <button type="submit" value="<?= $value['event_id']; ?>" name="btnDelete" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama Event</th>
                                        <th>Deskripsi Event</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </form>
                    </div>

                    <div class="box-footer text-center">
                        <button id="btnShowAddForm" class="btn btn-flat btn-success">Add New Event</button>
                    </div>
                </div>

                <div id="formAddEvent" class="box box-info form-hidden">
                    <div class="box-header with-border">
                        Add New Event
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Judul Event</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tbNamaEvent" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Deskripsi Event</label>
                                <div class="col-sm-10">
                                    <textarea name="tbDescEvent" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Date</label>
                                <div class="col-sm-10">
                                    <div class="input-group date" data-provide="datepicker">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input name="tbDateEvent" type="text" class="form-control" id="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Lokasi Event</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <input type="text" name="tbLokasiEvent" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Event Tag</label>
                                <div class="col-sm-10">
                                    <textarea name="tbEventTag" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Poster</label>
                                <div class="col-sm-10">
                                    <input type="file" name="tbImgEvent" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="text-center">
                                <button type="submit" name="btnSubmit" class="btn btn-flat btn-info">Submit
                                    Event</button>
                                <button type="submit" name="btnCancel" class="btn btn-flat btn-danger">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="formEditEvent" class="box box-warning <?php if(!isset($edit)) echo 'form-hidden'; ?>">
                    <div class="box-header with-border">
                        Edit Event
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Id</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="true" value='<?php if(isset($edit)) echo $edit['event_id']; ?>' name="tbIdEvent" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Judul Event</label>
                                <div class="col-sm-10">
                                    <input type="text" value='<?php if(isset($edit)) echo $edit['event_judul']; ?>' name="tbNamaEvent" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Deskripsi Event</label>
                                <div class="col-sm-10">
                                    <textarea name="tbDescEvent" class="form-control"><?php if(isset($edit)) echo $edit['event_desc']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Date</label>
                                <div class="col-sm-10">
                                    <div class="input-group date" data-provide="datepicker">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input name="tbDateEvent" value='<?php if(isset($edit)) echo $edit['event_tgl']; ?>' type="text" class="form-control" id="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Lokasi Event</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <input type="text" value='<?php if(isset($edit)) echo $edit['event_lokasi']; ?>' name="tbLokasiEvent" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Event Tag</label>
                                <div class="col-sm-10">
                                    <textarea name="tbEventTag" class="form-control"><?php if(isset($edit)) echo $edit['event_tags']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Poster</label>
                                <div class="col-sm-10">
                                    <input type="file" name="tbImgEvent" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="text-center">
                                <button type="submit" name="btnSubmitEdit" class="btn btn-flat btn-warning">Submit
                                    Event</button>
                                <button type="submit" name="btnCancelEdit" class="btn btn-flat btn-danger">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!--------------------------
        | Your Page Content Here |
        -------------------------->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Made with love :)
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2019 <a href="#">STTS</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- REQUIRED JS SCRIPTS -->
    <script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>




    <script>
        $(document).ready(function () {
            $('#example').DataTable();
            $('.datepicker').datepicker();

            $("#btnShowAddForm").click(function () {
                $('#formAddEvent').removeClass("form-hidden");
            });
        });
    </script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>