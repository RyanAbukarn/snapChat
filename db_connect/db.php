<?php
global $connection;
define("localhost", "localhost:8889");
define("user", "root");
define("password", "root");
define("db_name", "MakerSpace");
$connection = mysqli_connect(localhost, user, password, db_name);
if (!$connection) die("DataBase Connection Error: " . mysqli_connect_error());

function DataBaseConection()
{
    $connection = mysqli_connect(localhost, user, password, db_name);
    if (!$connection) die("DataBase Connection Error: " . mysqli_connect_error());
    return $connection;
}
