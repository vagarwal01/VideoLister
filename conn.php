<?php
    $servername="localhost";
    $username="bhajnfqx_VA";
    $password="VAbhajans*01";
    $database="bhajnfqx_bhajans";

    $conn=mysqli_connect($servername, $username, $password, $database);
    if(!$conn) {
        die("connection failed: ".mysqli_connect_error());
        
    }
?>