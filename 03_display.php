<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="display.css">
    <title>Display all the record</title>
  </head>
  <body>
    <div class="tab">
    <h1>Display all the current records....</h1>
     <table>

    <tr>
       <th>User_id: </th>
       <th>User_Name: </th>
       <th>User_Password: </th>
       <th>User_Address</th>
       <th>Email: </th>
       <th>Mobile_No: </th>
       <th colspan = "2"> Operation</th>

    </tr>
   <?php
   
   include '01_conn.php';

   $sql= "SELECT * FROM `curdoperation`";
   $result= mysqli_query($conn, $sql);

   while($row = mysqli_fetch_array($result))
   {

   ?>

    <tr>
       <td><?php echo $row['uid'];     ?> </td>
       <td><?php echo $row['uname'];   ?> </td>
       <td><?php echo $row['pass'];    ?> </td>
       <td><?php echo $row['address']; ?> </td>
       <td><?php echo $row['email'];   ?> </td>
       <td><?php echo $row['mobile_no'];?></td>
       <td><button><a href="04_update.php?uid=<?php echo $row['uid'];?>"> Update</a></button></td>
       <td><button class="del"><a href="05_delete.php?uid=<?php echo $row['uid'];?>"> Delete</a></button></td>
    </tr>

  <?php
   }
   ?>  
     </table>
</div>
<div class="inst">
<button><a href="02_insert.php">Insert</a></button>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>