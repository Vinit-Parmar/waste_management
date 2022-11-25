<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Driving-School-Management-System</title>
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="asset/fontawesome/css/all.min.css"> -->
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
                        <form action="config.php" method=post style="width:14--px;height:400px;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <!-- <div class="form-group">
                                            <img src="asset/img/profile.png" width="150" style="border-radius: 5px">
                                            <div for="exampleInputFile">Choose Profile</div>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <div class="custom-file-div" for="exampleInputFile">Choose file</div>
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
                                                    <div for="exampleInputEmail1">First Name</div>
                                                    <input name="reg_first_name" type="text" class="form-control" placeholder="first name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div for="exampleInputEmail1">Middle Name</div>
                                                    <input name="reg_mid_name" type="text" class="form-control" placeholder="middle name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div for="exampleInputEmail1">Last Name</div>
                                                    <input name="reg_last_name" type="text" class="form-control" placeholder="last name">
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-4">
                                                <div class="form-group">
                                                    <div>Gender</div>
                                                    <select class="form-control">
                                             <option>Male</option>
                                             <option>Female</option>
                                          </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div for="exampleInputEmail1">Birthday</div>
                                                    <input type="date" class="form-control" placeholder="last name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div for="exampleInputEmail1">Contact</div>
                                                    <input type="number" class="form-control" placeholder="contact">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div for="exampleInputEmail1">Email</div>
                                                    <input type="email" class="form-control" placeholder="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div for="exampleInputEmail1">Address</div>
                                                    <input type="email" class="form-control" placeholder="address">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card-header">
                                                    <span class="fa fa-key"> Account</span>
                                                </div>
                                            </div>-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div for="exampleInputEmail1">Username</div>
                                                    <input name="user_name" type="text" class="form-control" placeholder="username">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div for="exampleInputEmail1">Password</div>
                                                    <input name="pass" type="password" class="form-control" placeholder="**********">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div for="exampleInputEmail1">Area</div>
                                                    <input name="area" type="text" class="form-control" placeholder="area">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="row">
                                <div class="col-6">
                                    <button name="submit" type="submit" class="btn btn-block" style="background-color: rgba(28,153,84);color: rgb(235,235,235)">Register</button>
                                </div>
                                <div class="col-6">
                                    <a href="index1.php" class="text-center btn btn-block" style="font-family: fantasy;background-color: rgba(28,153,84);color: rgb(235,235,235)">Sign In</a>
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