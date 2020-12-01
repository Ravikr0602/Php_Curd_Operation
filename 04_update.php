<?php

include '01_conn.php';

if(isset($_POST['update']))
{
  $uid= $_GET['uid'];
  $uname= $_POST['uname'];
  $pass= $_POST['pass'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $mobile_no = $_POST['mobile_no'];

$sql="UPDATE `curdoperation` SET `uid`='$uid' , `uname` ='$uname' , `pass`='$pass' , `address`= '$address', `email`='$email', `mobile_no`='$mobile_no' WHERE `uid`= $uid";
$result= mysqli_query($conn, $sql);

header('location:03_display.php');

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

    <h2>Please Update your record.</h2>

<?php

 include '01_conn.php';

 $uid = $_GET['uid'];

 $select = "SELECT * FROM `curdoperation` WHERE `uid`= $uid ";
 $res= mysqli_query($conn, $select);
 
 $ro = mysqli_fetch_assoc($res);

 ?>

    <div class="formBox">
    <div class="inputBox w50">
         <label>User_id: </label>
         <input type="number" name="uid" value= "<?php echo $ro['uid']; ?>"><br>
    </div>
    <div class="inputBox w50">     
         <label>User_Name: </label>
         <input type="text" name="uname" value= "<?php echo $ro['uname']; ?>"><br>
    </div>
    <div class="inputBox w50"> 
         <label>Password: </label>
         <input type="text" name="pass" value= "<?php echo $ro['pass']; ?>"><br>
    </div>
    <div class="inputBox w50"> 
         <label>User_Address: </label>
         <input type="text" name="address" value= "<?php echo $ro['address']; ?>"><br>
    </div>
    <div class="inputBox w50"> 
         <label>Email: </label>
         <input type="Email" name="email" value= "<?php echo $ro['email']; ?>"><br>
    </div>
    <div class="inputBox w50"> 
         <label>User_Mobile_No: </label>
         <input type="number" name="mobile_no" value= "<?php echo $ro['mobile_no']; ?>"><br>
    <div> 
    <div class="inputBox w50">
     <button value="Submit" type="submit" name="update">Submit</button>
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




