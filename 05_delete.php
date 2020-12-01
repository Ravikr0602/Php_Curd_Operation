<?php

include '01_conn.php';

    $uid =$_GET['uid'];
    
    $sql= "DELETE FROM `curdoperation` WHERE `uid` = $uid";
    $result = mysqli_query($conn,$sql);
    
   header('location:03_display.php');

    


?>