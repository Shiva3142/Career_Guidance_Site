<?php
    $server="localhost";
    $username="root";
    $password="";
    $port='3306';
    $database="career_guidance_database";
    $conn=mysqli_connect($server,$username,$password,$database,$port);
    if(!$conn)
    {
        echo "error".mysqli_connect_error($conn);
    }else{
    }
?>