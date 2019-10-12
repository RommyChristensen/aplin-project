<?php session_start(); ?>

<?php
  include "../koneksi.php";

  if(isset($_POST['btnUpdate'])){
    $query = "SELECT * FROM user WHERE Id = " . $_POST['btnUpdate'];
    $res = mysqli_query($koneksi, $query);
    $dtUser = $res->fetch_array();
  }

  if(isset($_POST['btnDelete'])){
    $id = $_POST['btnDelete'];
    $query = "DELETE FROM user WHERE Id = $id";
    mysqli_query($koneksi, $query);
  }

  if(isset($_POST['btnLogout'])){
    session_destroy();
    header("Location: ../login.php");
  }

  if(isset($_POST['btnUpdateData'])){
    $id = $_POST['tbIdUser'];
    $un = $_POST['tbUsername'];
    $nm = $_POST['tbNama'];
    $em = $_POST['tbEmail'];

    $query = "UPDATE user SET Nama = '$nm', Email = '$em', Username = '$un' WHERE Id = $id";
    $res = mysqli_query($koneksi, $query);
  }

  $query = "SELECT * FROM user";
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
    .form-hidden{
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
      <a href="index2.html" class="logo">
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
                      <button type="submit" class="btn btn-danger btn-flat" name="btnLogout">Sign Out</button>
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
          <li><a href="events.php"><i class="fa fa-calendar"></i> <span>Events</span></a></li>
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
          <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <!-- <div class="box box-primary">
          <div class="box-header with-border">
            List Data User
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach($data as $key=>$value){
                    echo "<tr>";
                    echo "<td>".$value['Id']."</td>";
                    echo "<td>".$value['Nama']."</td>";
                    echo "<td>".$value['Email']."</td>";
                    echo "<td>".$value['Username']."</td>";
                    echo "<td>".$value['Password']."</td>";
                    echo "<td><button id='btnEdit' type='submit' name='btnUpdate' value='".$value['Id']."' class='btn btn-warning'><span class='fa fa-edit'></span></button>
                    <button id='btnDelete' type='submit' name='btnDelete' value='".$value['Id']."' class='btn btn-danger'><span class='fa fa-trash'></span></button></td>";
                    echo "</tr>";
                  }
                ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
              </table>
            </form>
          </div>
        </div>

        <div id="formUpdate" class="box box-info <?php //if(!isset($dtUser)) echo 'form-hidden' ?>">
          <div class="box-header">
            Update Data Form
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="box-body">
            <form method="post" class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-1 control-label">Id</label>
                <div class="col-sm-10">
                  <input type="text" name="tbIdUser" value="<?php if(isset($dtUser)) echo $dtUser['Id']; ?>" class="form-control" id="tbId" readonly="true" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="tbNama" value="<?php if(isset($dtUser)) echo $dtUser['Nama']; ?>" class="form-control" id="tbNama"/>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" name="tbEmail" value="<?php if(isset($dtUser)) echo $dtUser['Email']; ?>" class="form-control" id="tbEmail"/>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" name="tbUsername" value="<?php if(isset($dtUser)) echo $dtUser['Username']; ?>" class="form-control" id="tbUsername"/>
                </div>
              </div>
              <button type="submit" name="btnUpdateData" class="btn btn-success btn-flat">Update Data</button>
            </form>
          </div>
        </div> -->

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

  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 3 -->
  <script src="../bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>



  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>

  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>