<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "user_management";



$conn = mysqli_connect($host,$username,$password,$dbname);



if($conn)
{
    echo "the database is connected";
}
else
{
    echo "the data is not connected";
}


?>