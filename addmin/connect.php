<?php
    $con = new mysqli('localhost','root','','addmin');
    if(!$con){
        die(mysqli_error($con));
    }
?>