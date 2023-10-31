<?php
    $server =  'localhost';
    $user = 'root';
    $password = '';
    $database = 'boozyhub';
    $conn = mysqli_connect($server, $user, $password, $database);

    if(!$conn){
        echo 'not connected';
    }
?>