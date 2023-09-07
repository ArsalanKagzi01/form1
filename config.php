<?php

/* connection establishment with database
requirements: mysqli_connect("ServerName", "Username", "Password", "DATABASE");
*/

$connection = mysqli_connect("localhost", "root", "", "form");
if(!$connection){
    echo "connection failed";
}


?>
