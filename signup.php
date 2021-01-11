<?php
    $con=mysqli_connect('127.0.0.1','root','');

    if(!$con)
    {
        echo 'not connected to the server';
    }

    if(!mysqli_select_db($con,'userreg'))
    {
        echo 'not selected';
    }
    $Name=$_POST['username'];

    $sql="INSERT INTO trial (name) VALUES ('$Name')";

    if(!mysqli_query($con,$sql))
    {
        echo 'not inserted';
    }
    else
    {
        echo 'inserted';
    }
header("refresh:2; url=login.html");
?>