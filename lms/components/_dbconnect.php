<?php
// script to connect to the database
$servername="localhost";
$username="root";
$password="";
$database="bookstore_data";
// create a connection
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("sorry we failed to connect ".mysqli_connect_error());
}
// else{
//     echo "connection was successful";
// }
?>