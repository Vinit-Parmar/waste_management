<?php 

include "wms.php";

$sql = "SELECT * FROM users";
if (isset($_POST['submit'])) {
   $fname = $_POST['fname'];
   $mname = $_POST['mname'];
   $lname = $_POST['lname'];
   $uname = $_POST['uname'];
   $pass = $_POST['pass'];
   $area = $_POST['area'];
   $sql1 = "INSERT INTO `users` VALUES (NULL,'$fname','$mname','$lname','$uname','$pass','$area')";
$conn->query($sql1);
}

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Waste-Management-System</title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="../asset/css/adminlte.min.css">
   <link rel="stylesheet" href="../asset/css/style.css">
   <link rel="stylesheet" href="../asset/tables/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <style type="text/css">
      table tr td {
         padding: 0.3rem !important;
      }
      td a.btn{
         font-size: 0.7rem;
      }
   </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
      <nav class="main-header navbar navbar-expand navbar-light" style="background-color: rgb(86,181,42)">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
         </ul>
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link" href="#" role="button">
                  <img src="../asset/img/avatar.png" class="img-circle" alt="User Image" width="40" style="margin-top: -8px;">
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="../index.php">
                  <i class="fas fa-sign-out-alt"></i>
               </a>
            </li>
         </ul>
      </nav>
      <aside class="main-sidebar sidebar-light-primary">
         <!-- Brand Logo -->
         <a href="index.php" class="brand-link">
      <img src="../asset/img/logo.png" alt="DSMS Logo" width="200">
      </a>
      <div class="sidebar">
         <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
               data-accordion="false">
               <li class="nav-item">
                  <a href="index.php" class="nav-link">
                     <img src="../asset/img/dashboard.png" width="30">
                     <p>
                        Dashboard
                     </p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="recycle-center.php" class="nav-link">
                     <img src="../asset/img/recycle-center.png" width="30">
                     <p>
                        Recycling Center
                     </p>
                  </a>
               </li>
               <!-- <li class="nav-item">
                  <a href="garbage-type.php" class="nav-link">
                     <img src="../asset/img/garbage-type.png" width="30">
                     <p>
                        Garbage Type
                     </p>
                  </a>
               </li> -->
               <li class="nav-item">
                  <a href="member.php" class="nav-link">
                     <img src="../asset/img/member.png" width="30">
                     <p>
                        Members
                     </p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="records.php" class="nav-link">
                     <img src="../asset/img/records.png" width="30">
                     <p>
                        Collection Record
                     </p>
                  </a>
               </li>
               <!-- <li class="nav-item">
                  <a href="#" class="nav-link">
                     <img src="../asset/img/report.png" width="30">
                     <p>
                        Reports
                     </p>
                     <i class="right fas fa-angle-left"></i>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="garbage-type-report.php" class="nav-link">
                           <i class="nav-icon far fa-circle"></i>
                           <p>Garbage Type</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="income-report.php" class="nav-link">
                           <i class="nav-icon far fa-circle"></i>
                           <p>Income by Center</p>
                        </a>
                     </li>
                  </ul>
               </li> -->
            </ul>
         </nav>
      </div>
   </aside>
      <div class="content-wrapper">
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0"><img src="../asset/img/recycle-center.png" width="40"> Recycling Center</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Recycling Center</li>
                     </ol>
                  </div>
                  <a class="btn btn-sm elevation-4" href="#" data-toggle="modal" data-target="#add"
                     style="margin-top: 20px;margin-left: 10px;background-color: rgb(86,181,42)"><i
                        class="fa fa-plus-square"></i>
                     Add New</a>
               </div>
            </div>
         </div>
         <section class="content">
            <div class="container-fluid">
               <div class="card card-info elevation-2">
                  <br>
                  <div class="col-md-12">
                  <table class="table">

<thead>

    <tr>

    <th>ID</th>

    <th>First Name</th>

    <th>Middle Name</th>

    <th>Last Name</th>

    <th>Username</th>

    <th>Password</th>

    <th>Area</th>

</tr>

</thead>

<tbody> 

    <?php

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

    ?>

                <tr>

                <td><?php echo $row['user_id']; ?></td>

                <td><?php echo $row['f_name']; ?></td>

                <td><?php echo $row['m_name']; ?></td>

                <td><?php echo $row['l_name']; ?></td>

                <td><?php echo $row['user_name']; ?></td>

                <td><?php echo $row['pass']; ?></td>

                <td><?php echo $row['area']; ?></td>

                <td><a class="btn btn-info" href="update.php?user_id=<?php echo $row['user_id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?user_id=<?php echo $row['user_id']; ?>">Delete</a></td>

                </tr>                       

    <?php       }

        }

    ?>                

</tbody>

</table>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
   <div id="delete" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body text-center">
               <img src="../asset/img/sent.png" alt="" width="50" height="46">
               <h3>Are you sure want to delete this Junkshop?</h3>
               <div class="m-t-20">
                  <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn btn-danger">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="map" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-body text-center">
               <form>
                           <div class="card-header">
                              <h5><img src="../asset/img/recycle-center.png" width="40"> Junkshop Location</h5>
                           </div>
                  <div class="card-body">
                     <div class="mapouter"><div class="gmap_canvas"><iframe width="750" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=manila&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:700px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:700px;}</style></div></div>
                  </div>

                  <div class="card-footer">
                     <a href="#" class="btn btn-info" data-dismiss="modal">Close</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div id="edit" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-md">
         <div class="modal-content">
            <div class="modal-body text-center">
              <form method="POST">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card-header">
                              <h5><img src="../asset/img/recycle-center.png" width="40"> Junkshop Information</h5>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">First Name</label>
                                    <input name="fname" type="text" class="form-control" placeholder="First Name">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Middle Name</label>
                                    <input name="mname" type="text" class="form-control" placeholder="Middle Name">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Last Name</label>
                                    <input name="lname" type="text" class="form-control" placeholder="Last Name">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Username</label>
                                    <input  name="uname" type="text" class="form-control" placeholder="Username">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Password</label>
                                    <input  name="pass" type="password" class="form-control" placeholder="Password">
                                 </div>   
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Area</label>
                                    <input  name="area" type="text" class="form-control" placeholder="Area">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                     <a href="#" class="btn btn-cancel" data-dismiss="modal">Cancel</a>
                     <button type="submit" class="btn btn-save">Save</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div id="add" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-md">
         <div class="modal-content">
            <div class="modal-body text-center">
               <form>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card-header">
                              <h5><img src="../asset/img/recycle-center.png" width="40"> Junkshop Information</h5>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">First Name</label>
                                    <input name="fname" type="text" class="form-control" placeholder="First Name">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Middle Name</label>
                                    <input name="mname" type="text" class="form-control" placeholder="Middle Name">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Last Name</label>
                                    <input name="lname" type="text" class="form-control" placeholder="Last Name">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Username</label>
                                    <input  name="uname" type="text" class="form-control" placeholder="Username">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Password</label>
                                    <input  name="pass" type="password" class="form-control" placeholder="Password">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="float-left">Area</label>
                                    <input  name="area" type="text" class="form-control" placeholder="Area">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                     <a href="#" class="btn btn-cancel" data-dismiss="modal">Cancel</a>
                     <button type="submit" class="btn btn-save">Save</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
   <script src="../asset/jquery/jquery.min.js"></script>
   <script src="../asset/js/bootstrap.bundle.min.js"></script>
   <script src="../asset/js/adminlte.js"></script>
   <!-- DataTables  & Plugins -->
   <script src="../asset/tables/datatables/jquery.dataTables.min.js"></script>
   <script src="../asset/tables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="../asset/tables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
   <script src="../asset/tables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
   <script>
      $(function () {
         $("#example1").DataTable();
      });
   </script>
</body>

</html>