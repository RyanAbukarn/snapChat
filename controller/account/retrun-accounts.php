<?php
include_once '../../db_connect/db.php';

$return_arr = array();
$query = "SELECT * FROM `users`;";


$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_array($result)) {
    $return_arr[] = array(
        "first_name"   => $row['FirstName'],
        "last_name" => $row['LastName'],
        "email" => $row['email'],
        "admin" => $row['admin']
    );
}
$connection->close();
include("../../modules/account/accout-card.php");
