<?php
$db = mysqli_connect("localhost","root","","employee");
if (!$db) {
  die("connection failed :" .mysqli_connect_error());
}else
echo "";
?>
<?php
      if(isset($_POST['submit']))
       {
        $Name=$_POST['name'];
        $Role=$_POST['role'];
        $Mobile=$_POST['mobile'];
        $Manager=$_POST['manager'];
        $Office=$_POST['office'];
        $JoiningDate=$_POST['joiningdate'];

        $query="Insert into emp(Name,Role,Mobile,Manager,Office,Joiningdate)values('$Name','$Role','$Mobile','$Manager','$Office','$JoiningDate')";
        if (mysqli_query($db,$query)) {
          echo '<script>alert("Employee Registered Sucessfully")</script>';
          
        }
        else
          echo"error".$query."".mysqli_error($db);
            mysqli_close($db);
       }
 ?>
<!DOCTYPE html>
<html>
<head>

  <title>EMPLOYEE Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
</head>
<body>
<header style="height: 90px;">
  
<div class="logo">
      <h1 style="color: white; font-size: 25px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">EMPLOYEE MANAGEMENT SYSTEM</h1>
    </div>

      <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="add.php">ADD_EMPLOYEE</a></li>
         
        </ul>
      </nav>
</header>

<section>
  <br><br><br>
    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">EMPLOYEE Management System</h1><br>
        <h1 style="text-align: center; font-size: 25px;">EMPLOYEE Registration Form</h1><br>
      <form name="Registration" action="" method="post">
        <br><br>
        <div class="login">
          
          <input type="text" name="name" placeholder="Name" required=""> <br><br>
          <input type="text" name="role" placeholder="Role" required=""> <br><br>
          <input type="text" name="mobile" placeholder="Mobile" required=""><br><br><input type="text" name="manager" placeholder="Manager" required=""> <br><br>
          <input type="text" name="office" placeholder="Office" required=""><br><br>
          <input type="date" name="joiningdate" placeholder="Joining_Date" required=""><br><br>
         <button type="submit" name="submit" >submit</button><br><br>
          
        </div>
      </form>
     
    </div>
  </div>
</section>

   
</body>
</html>