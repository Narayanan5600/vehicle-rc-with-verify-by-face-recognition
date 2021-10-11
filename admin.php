
<?php

session_start();

$conn=mysqli_connect("localhost","root","","vvc");

if(isset($_POST['submit']))
{
    $aid=$_POST['aid'];
    $password=$_POST['password'];
    $aname=$_POST['aname'];
    $phoneno=$_POST['phoneno'];
        $passwordrepeat=$_POST['passwordrepeat'];

    $_SESSION['aid']=$aid;

    $sql="select * from adminlogin where aid='".$_SESSION['aid']."' and Password='$password'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        {
            echo "<script>alert('Login successful.');</script>";
            echo "<script>window.location.href='alogin.php';</script>";  
        }
    }

    else
    {
        echo "<script>alert('Invalid username and password.');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vehicle verified certificate</title>

    <!--Font Awesome 5 Icons-->
    <link href="fontawesome-5/fontawesome/css/all.min.css" rel="stylesheet">

    <!--Bootstrap CSS-->
    <link href="bootstrap-4/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--Bootstrap Jquery, Popper and JavaScript-->
    <script src="bootstrap-4/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap-4/bootstrap/js/popper.min.js"></script>
    <script src="bootstrap-4/bootstrap/js/bootstrap.min.js"></script>

    <style type="text/css">
    body {
     background-image:url("bgimage/b7.jpg");
     background-repeat: no-repeat;
     background-attachment: scroll;
     background-position: relative;
      background-size: cover;

    }
   
    
body {font-family: Arial, Helvetica, sans-serif;}



input[type=text], input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


button {
  background-color: black;
  position: relative;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:0.4;
}

.cancelbtn {
  width: auto;
  padding: 14px 20px;
  background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}


.container {
  padding: 16px;
}
span.password{ 
  float: right;
  padding-top: 16px;
}

.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%;
  overflow: auto; 
  background-color: #474e5d;
  padding-top: 50px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
   border: 1px solid #888;
  width: 80%; 
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 

.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


@media screen and (max-width: 500px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}


@media screen and (max-width: 300px) {
  span.password {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
} 
</style>
<body>

<div class="col-md-12">
<div class="d-flex justify-content-end">



<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>
</div>
</div>

<div id="id01" class="modal">
<div class="col-md-7">

  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="aid"><b>Admin ID</b></label>
      <input type="text" placeholder="Enter admin id" name="email" not required>
      <label for="aname "><b>Admin Name</b></label>
      <input type="text" placeholder="Enter name" name="email"  required>
      <label for="phoneno "><b>Phone no</b></label>
      <input type="text" placeholder="Enter phone no" name="email" not required>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="passwordrepeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="passwordrepeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
  </div>
</div>



<div id="id02" class="modal">
<div class="col-md-7">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
     
    </div>

    <div class="container">
      <label for="aid"><b>Admin ID</b></label>
      <input type="text" placeholder="Enter admin id" name="aid" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="password">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
</div>
</div>
</div>
<script>

var modal = document.getElementById('id01');


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


var modal = document.getElementById('id02');


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
<div class="row">
    <div class="col-md-12">
        <div class=" justify-content-center">
        <p class="text-center font-weight-bold text-white text-uppercase" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 42px; letter-spacing: 2px;">
           
                vehicle verify with face reconition

            
            </p>
        </div>
    </div>
</div>
</body>

   
    </html>

    