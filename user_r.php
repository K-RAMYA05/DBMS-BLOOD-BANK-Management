<?php
$servername="localhost";
$username="root";
$password="";
$dbname="blood_bank";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    die("Connectiion failed:".$conn->connect_error);
}
//echo"hello";

if(isset($_POST['apply'])){
        $username       =$_POST['username'];
        $email      =$_POST['email'];
        $password   =$_POST['password'];
        $gender   =$_POST['gender'];
        $bloodgrp   =$_POST['bloodgrp'];
        $age=$_POST['age'];
        $address   =$_POST['address'];
        echo"hello";
        $res = $conn->query("INSERT INTO `registrations_donor`( `username`, `email`, `password`, `gender`, `bloodgrp`, `AGE`, `address`) VALUES ('$username','$email','$password','$gender','$bloodgrp','$age','$address')");
        echo"hello2";
      if($res){
    echo "Registration successfully...";
}
}
$conn->close();

?>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">


</head>
  <body>
    <div class="container">
        <div class="logo">
           <p><h1><img src="bloodlogo.jpg" width="130px" height="100px"style="vertical-align:middle"> ONEBLOOD</h1>
            <h3>Bring a life back with your power</h3></p>   </p>           
        </div>        
        <div class="navbar">                   
                            
            <nav>
            
                <a  href="home.html">HOME </a>
                <a class="active" href="user_r.php"> DONATION </a>
                <a href="request.php">REQUEST </a>
                <a href="contact.php">FEEDBACK </a>
                
            </nav>
         
    
        
     </div>
    </br>
    
    <form action=""  method ="POST"class="signup-form">

      <!-- form header -->
      <div class="form-header">
        <h1>Donor Details</h1>
      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          
            <label for="firstname" class="label-title">First name *</label>
            <input type="text" name="username" id="firstname" class="form-input" placeholder="enter your first name" required="required" />
          
          
        </div>

        <!-- Email -->
        <div class="horizontal-group">
          <div class="form-group">
          <label for="email" class="label-title">Email*</label>
          <input type="email" name="email" id="email" class="form-input" placeholder="enter your email" required="required">
          </div>
        </div>

        <!-- Passwrod and confirm password -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="password" class="label-title">Password *</label>
            <input type="password" name="password"id="password" class="form-input" placeholder="enter your password" required="required">
          </div>
        </div>

        <!-- Gender and Hobbies -->
        <div class="horizontal-group">
        
            <label class="label-title">Gender</label>
            <div class="input-group">
              <label for="male"><input type="radio" name="gender" value="male" id="male"> Male</label>
              <label for="female"><input type="radio" name="gender" value="female" id="female"> Female</label>
            </div>
        </div>

        <!-- Source of Income and Income -->
        <div class="horizontal-group">
          
            <label class="label-title">Blood group*</label>
            <select class="form-input" id="level" name="bloodgrp" >
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
            
            </select>
        </div>

        <!-- Profile picture and Age -->
        <div class="horizontal-group">
          
            <label for="age" class="label-title" name ="age" >Age*</label>
            <input type="number" name ="age" min="18" max="80"  value="18" class="form-input">
        
        </div>
        
      <div class="horizontal-group">
          
            <label for="Address" class="label-title" name ="address" >Address*</label>
            <input type="text" name="address" id="address" class="form-input" placeholder="enter your full address" required="required" />
        
        </div>
       

      <!-- form-footer -->
      <div class="form-footer">
        <span>* required</span>
        <button type="submit" name="apply" class="btn">Apply</button>
      </div>
    </div>
      </form>
    
  </div>
    <!-- Script for range input label -->
    

  </body>
</html>