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
    $nonbio_waste=$_POST['nonbio_waste'];
    $bio_waste=$_POST['bio_waste'];
    $t_date=$_POST['t_date'];
   

    
    // $password=$_POST['password'];
    $sql = "INSERT INTO `waste_produced`(`nonbio_waste`,`bio_waste`,`transport_date`) VALUES('$nonbio_waste','$bio_waste','$t_date')" ;
    if(mysqli_query($conn, $sql)){
        header("location:/dbms/admin/index1.php");
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