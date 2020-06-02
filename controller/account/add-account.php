<?php
include_once '../../db_connect/db.php';

$values = $_POST["data"];
$check = "
        SELECT * FROM users 
            WHERE email = '$values[2]' 
                LIMIT 1";
$result = mysqli_query($connection, $check);
$result = mysqli_num_rows($result);
if ($result == 0) {
    $salt = "moorparkIsGrate";
    $values[3] = sha1($values[3] . $salt);
    $insertQuery = "
            INSERT INTO `users`(`LastName`, `FirstName`, `Password`, `email`, `admin`)
                VALUES ('$values[1]', '$values[0]', '$values[3]', '$values[2]', $values[4])";
    mysqli_query($connection, $insertQuery);
    echo 1;
} else {
    echo 0;
}
$connection->close();
