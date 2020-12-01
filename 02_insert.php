<?php

include '01_conn.php';

if(isset($_POST['done']))
{
  $uid= $_POST['uid'];
  $uname= $_POST['uname'];
  $pass= $_POST['pass'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $mobile_no = $_POST['mobile_no'];

$sql="INSERT INTO `curdoperation` (`uid`, `uname`, `pass`, `address`, `email`, `mobile_no`) VALUES ('$uid', '$uname', '$pass', '$address', '$email', '$mobile_no')";
$result= mysqli_query($conn, $sql);


}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="insert.css">

    <title>Insert in Curd operation</title>
  </head>
  <body>
  <div class="heading">
    <h1>Curd <span>Operation</span> </h1>
  <h3>Please visitor user will be fill all the fields. </h3>
  
  </div>
  <section>
  
  <div class="container">
     
        <div class="Contactinfo">

              <div>
                    <h2>View the Records</h2>
                   <p>Below the this link will be provide all the records are present who fill the form.</p>
                   <p>if you view the all records so please click the below button.</p>

                   <button><a href="03_display.php">View</a></button>

              </div>

        </div>
  
       
    <form action="" method="POST">

    <div class="ContactForm">

    <h2>Please Fill the form.</h2>

    <div class="formBox">
    <div class="inputBox w50">
         <label>User_id: </label>
         <input type="number" name="uid"><br>
    </div>
    <div class="inputBox w50">     
         <label>User_Name: </label>
         <input type="text" name="uname"><br>
    </div>
    <div class="inputBox w50"> 
         <label>Password: </label>
         <input type="text" name="pass"><br>
    </div>
    <div class="inputBox w50"> 
         <label>User_Address: </label>
         <input type="text" name="address"><br>
    </div>
    <div class="inputBox w50"> 
         <label>Email: </label>
         <input type="Email" name="email"><br>
    </div>
    <div class="inputBox w50"> 
         <label>User_Mobile_No: </label>
         <input type="number" name="mobile_no"><br>
    <div> 
    <div class="inputBox w50">
     <button value="Submit" type="submit" name="done">Submit</button>
    </div>
   </div>
    
    </div>
    </form>

  </div>
  </section>  
  
    
    
   




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>




