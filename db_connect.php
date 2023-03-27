<?php 
$conn =mysqli_connect('localhost:3307','root',1598,'hello');

if(!$conn){
    die("error".mysqli_connect_error());
}

?>