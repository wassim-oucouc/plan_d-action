<?php


function update()
{
    $id_user = '3';

    include("configuration.php");

    $query_up = "UPDATE users set firstname = 'edeiud',lastname = 'ejfijzeçf',email = 'jiezjfije' WHERE id = $id_user ;
";


    $query_update = mysqli_query($conn,$query_up);

    var_dump($query_up);


}

update();