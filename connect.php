<?php
session_start();
$con=mysqli_connect('localhost','root','','farepayer');

if($con){
    echo 'successful';
}
else{
    echo 'not connected';
}
?>