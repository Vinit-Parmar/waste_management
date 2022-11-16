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

if ($result == TRUE) {

    echo "<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>";

}else{

    echo "Error:" . $sql . "<br>" . $conn->error;

}

?>