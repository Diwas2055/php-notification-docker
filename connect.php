<?php
//connect.php;
// mysqli_connect(host, username, password, dbname, port, socket)
$con = mysqli_connect("127.0.0.1", "php_user", "php_password", "php_db", 3306);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
