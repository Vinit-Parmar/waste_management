<?php 

include "wms.php"; 

if (isset($_GET['user_id'])) {

    $user_id = $_GET['user_id'];

    $sql = "DELETE FROM `users` WHERE `user_id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
        echo "<script>window.open('recycle-center.php');</script>";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>