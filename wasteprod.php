<?php include 'config1.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Driving-School-Management-System</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
    <!-- Theme style --> 
    <link rel="stylesheet" href="asset/css/adminlte.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box" style="width: 70%">
        <!-- /.login-logo -->
        <div class="card card-outline">
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header" style="background-color: rgba(28,153,84);color: rgb(235,235,235)">
                            <h3 class="card-title">Profile Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="config1.php" method=post>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <!-- <div class="form-group">
                                            <img src="asset/img/profile.png" width="150" style="border-radius: 5px">
                                            <label for="exampleInputFile">Choose Profile</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-header">
                                            <span class="fa fa-user"> Profile Information</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nonbio Waste</label>
                                                    <input name="nonbio_waste" type="text" class="form-control" placeholder="nonbio waste">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Bio Waste</label>
                                                    <input name="bio waste" type="text" class="form-control" placeholder="bio waste">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Transport Date</label>
                                                    <input name="t_date" type="text" class="form-control" placeholder="transport date">
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select class="form-control">
                                             <option>Male</option>
                                             <option>Female</option>
                                          </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Birthday</label>
                                                    <input type="date" class="form-control" placeholder="last name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Contact</label>
                                                    <input type="number" class="form-control" placeholder="contact">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" placeholder="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Address</label>
                                                    <input type="email" class="form-control" placeholder="address">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card-header">
                                                    <span class="fa fa-key"> Account</span>
                                                </div>
                                            </div>-->
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="row">
                                <div class="col-6">
                                    <button name="submit" type="submit" class="btn btn-block" style="background-color: rgba(28,153,84);color: rgb(235,235,235)">Next</button>
                                </div>
                                <div class="col-6">
                                    <a href="index.php" class="text-center btn btn-block" style="font-family: fantasy;background-color: rgba(28,153,84);color: rgb(235,235,235)">Back</a>
                                </div>
                            </div><br>
                        </form>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
</body>

</html>