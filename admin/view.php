<?php 

include "wms.php";

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>users</h2>

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

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>