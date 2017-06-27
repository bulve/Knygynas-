<?php
$servername = 'localhost';
$username = 'root';
$password = 'pamparam';
$database = 'Knygynas';
$conn = new mysqli($servername, $username, $password, $database);
if(mysqli_error($conn)){
           echo 'Erorr' . mysqli_error($conn);
           exit();
        }else{
            echo 'All is fine';
        }
?>

