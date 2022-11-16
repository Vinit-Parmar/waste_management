<?php 

include "wms.php";

    if (isset($_POST['update'])) {

        $user_id = $_POST['user_id'];

        $fname = $_POST['fname'];

        $mname = $_POST['mname'];

        $lname = $_POST['lname'];

        $uname = $_POST['uname'];

        $password = $_POST['password'];

        $area = $_POST['area']; 

        $sql = "UPDATE `users` SET `f_name`='$fname',`m_name`='$mname',`l_name`='$lname',`user_name`='$uname',`pass`='$password',`area`='$area' WHERE `user_id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            
            echo "<script>window.open('recycle-center.php','_self');</script>";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['user_id'])) {

    $user_id = $_GET['user_id']; 

    $sql = "SELECT * FROM `users` WHERE `user_id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $fname = $row['f_name'];

            $mname = $row['m_name'];

            $lname = $row['l_name'];

            $uname = $row['user_name'];

            $pass  = $row['pass'];

            $area = $row['area'];

            $user_id = $row['user_id'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            First name:<br>

            <input type="text" name="fname" value="<?php echo $fname; ?>">

            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

            <br>

            Middle name:<br>

            <input type="text" name="mname" value="<?php echo $mname; ?>">

            <br>

            Last name:<br>

            <input type="text" name="lname" value="<?php echo $lname; ?>">

            <br>

            Username:<br>

            <input type="text" name="uname" value="<?php echo $uname; ?>">

            <br>

            Password:<br>

            <input type="password" name="password" value="<?php echo $pass; ?>">

            <br>

            Area:<br>

            <input type="text" name="area" value="<?php echo $area; ?>">

            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?>