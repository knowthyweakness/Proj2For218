<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 4/18/2019
 * Time: 12:50 AM
 */
$servername = "sql1.njit.edu";
$username = "th223";
$password = "*******";//Not Uploading to github
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully";
}
