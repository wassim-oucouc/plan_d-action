<?php

function read()
{
    include("configuration.php");

    $query_select = "SELECT firstname,lastname,email,password FROM users";

    $result = mysqli_query($conn,$query_select);

    // var_dump($select);
    $row = $result ->fetch_assoc();

    var_dump($row);

    while($row)
    {
        echo $row["firstname"];
        echo $row["lastname"];
        echo $row["email"];
        echo $row["password"];
    }


}

function createid()
{
    echo "------------------------------------------------------------------------------------------";
    include("configuration.php");
    $id = "32";
    $query_select_id = "SELECT firstname,lastname FROM users where $id";

    $result_select_id = mysqli_query($conn,$query_select_id);

    $row_id = $result_select_id ->fetch_assoc();
    var_dump($row_id);



}

read();

createid();


?>