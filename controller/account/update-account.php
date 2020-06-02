<?php
include_once '../../db_connect/db.php';
$email = $_POST["email"];
$admin = $_POST["admin"];
$query = "UPDATE `users` SET `admin`=$admin WHERE `email` ='$email' ";
echo $query;
$result = mysqli_query($connection, $query);
if ($result) {
    echo 1;
} else {
    echo 0;
}
$connection->close();
