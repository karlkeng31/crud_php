<?php

define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "crud_app");

// Create connection
$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
