<?php
session_start();
$conn = mysqli_connect("localhost","root","","hotel");
if(!$conn){
    die("cannot open connection".mysqli_connect_error());
}
?>