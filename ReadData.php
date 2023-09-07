<?php

require ('config.php');

$retriveData = "SELECT * from `form1`";
$sqlquery = mysqli_query($connection, $retriveData);
if($sqlquery){
    // print_r($sqlquery);
    if(mysqli_num_rows($sqlquery) > 0){
        $row = mysqli_fetch_assoc($sqlquery);
        // print_r($row);
        echo $row['id'];
        echo $row['name'];
        echo $row['email'];
        echo $row['password'];

    }
}