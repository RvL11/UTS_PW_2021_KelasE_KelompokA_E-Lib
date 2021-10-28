<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "Projek-UTS";

    $con = mysqli_connect($host, $user, $pass, $name);
    
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
    }

    // // Koneksi DB Hosting InifinityFree
    // $host = "sql111.epizy.com";
    // $user = "epiz_30173163";
    // $pass = "fqAXyAd7jnhwW";
    // $name = "epiz_30173163_db_elib";
    // $con = mysqli_connect($host, $user, $pass, $name);
    
    // if(mysqli_connect_errno()){
    //     echo "Failed to connect to MySQL : " . mysqli_connect_error();
    // }
?>