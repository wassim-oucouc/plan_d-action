<?php

function create()
{
    include("configuration.php");
    $prenom = "wassime";
    $nom = "oucouc";
    $email ="wassimc12@gmail.com";
    $password = "wassim4444";


    $query = "INSERT INTO users(firstname,lastname,email,password) values('$prenom','$nom','$email','$password')";
    $insert = mysqli_query($conn,$query);
    var_dump($insert);
    if($insert)
    {
        echo "the query is good";
    }
    else
    {
        echo "the query not good";
    }
    
}

create();



?>