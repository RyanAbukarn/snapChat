<?php
include_once '../../db_connect/db.php';

$email = $_POST["email"];
$query = "DELETE FROM `users` WHERE `email` = '$email';";
$result = mysqli_query($connection, $query);
if ($result) {
    echo 1;
} else {
    echo 0;
}
$connection->close();
