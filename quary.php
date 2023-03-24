<?php 
function query($q){
    require "db_connect.php";
    $result =mysqli_query($conn,$q);

    return $result;
    
}
?>