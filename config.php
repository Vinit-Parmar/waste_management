<?php
$server='localhost';
$username='root';
$password='';
$database='wms';

$conn=mysqli_connect($server,$username,$password,$database);
if($conn->connect_error){
    die("Connection failed!".$conn->connect_error);
}
if(isset($_POST['submit'])){ //isset checks that whether if a connection is established or not
    $reg_first_name=$_POST['reg_first_name'];
    $reg_mid_name=$_POST['reg_mid_name'];
    $reg_last_name=$_POST['reg_last_name'];
    $user_name=$_POST['user_name'];
    $pass=$_POST['pass'];
    $area=$_POST['area'];

    
    // $password=$_POST['password'];
    $sql = "INSERT INTO `users`(`f_name`,`m_name`,`l_name`,`user_name`,`pass`,`area`) VALUES('$reg_first_name','$reg_mid_name','$reg_last_name','$user_name','$pass','$area')" ;
    if(mysqli_query($conn, $sql)){
        header("location:/dbms/admin/index.php");
    } else{
        echo"ERROR: Not able to execute $sql. " . mysqli_error($conn);
    }
}

session_start();
if(isset($_POST['Login'])){
    $login_user=$_POST['login_user'];
    $login_pass=$_POST['login_pass'];
    $query="SELECT * FROM users WHERE `user_name`='$login_user' AND `pass`='$login_pass'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    // if(mysqli_num_rows($result)==1){
    if($result){
        header("location:register.php");
    } else{
        $error='<br><br>EmailId or Password is Incorrect';
    }
}

?>