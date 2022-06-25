<?php
// MySQL connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mouvin";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>

<?php

if (!empty($_GET['id'])) {
    // require connection

    $student_id = $_GET['id'];
   $del_query = "DELETE FROM `student` WHERE id = '" . $student_id . "'";
   
    $result = mysqli_query($conn, $del_query);
    if ($result) {
        header('index.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<body>

    
</body>
</html>
<?php


// mysql connection
$query = "SELECT * FROM `student`";

$results = mysqli_query($conn, $query);
$records = mysqli_num_rows($results);
$msg = "";
if (!empty($_GET['msg'])) {
    $msg = $_GET['msg'];
    $alert_msg = ($msg == "add") ? "New Record has been added successfully!" : (($msg == "del") ? "Record has been deleted successfully!" : "Record has been updated successfully!");
} else {
    $alert_msg = "";
}

?>


<div class="container d-flex justify-content-center">
<?php if (!empty($alert_msg)) {?>
        <div class="alert alert-success"><?php echo $alert_msg; ?></div>
<?php }?>
    <div class="info"></div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Section</th>
                </tr>
            </thead>

            <tbody>
                <?php
if (!empty($records)) {
    while ($row = mysqli_fetch_assoc($results)) {
        ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?>
                                </th>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['age']; ?></td>
                                    <td><?php echo $row['section']; ?></td>
                                    <td>
                                        <!-- <a href="edit_info.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">EDIT</a> -->
                                        <a href="index.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onClick="javascript:return confirm('Do you really want to delete?');" >DELETE</a>
                                    </td>
                                </tr>

                            <?php
}
}
?>



            </tbody>
        </table>
    </div>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

