<?php

    $connection = mysqli_connect('localhost','root','','userdb');

    //checking the connection

    if(mysqli_connect_errno()){
        die('Databasse connection failed'. mysqli_connect_error());

    }/*else{
        echo "Connection successful. <br>";
    }*/

?>