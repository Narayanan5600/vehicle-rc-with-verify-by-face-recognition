<?php

$conn=mysqli_connect("localhost","root","","vvc");

if(isset($_POST['submit']))
{
    $district=$_POST['district'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $addressd=$_POST['addressd'];
    $idproof=$_POST['idproof'];
    $pan=$_POST['pan'];
    $invoice=$_POST['invoice'];
    $insurance=$_POST['insurance'];
    $vbname=$_POST['vbname'];
    $vmodel=$_POST['vmodel'];
    $vcolor=$_POST['vcolor'];
    $vclass=$_POST['vclass'];
    $ylaunch=$_POST['ylaunch'];
    $mcompany=$_POST['mcompany'];
    $myear=$_POST['myear'];
    $cylinder=$_POST['cylinder'];
    $hpower=$_POST['hpower'];
    $cc=$_POST['cc'];
    $scapacity=$_POST['scapacity'];
    $uweight=$_POST['uweight'];
    $fuel=$_POST['fuel'];
    $chasis=$_POST['chasis'];
    $engine=$_POST['engine'];
    $ophoto=$_POST['ophoto'];
    $vphoto=$_POST['vphoto'];
    $idprooff=$_POST['idprooff'];
    $pancopy=$_POST['pancopy'];
    $dlc=$_POST['dlc'];
    $invoicec=$_POST['invoicec'];
    $ic=$_POST['ic'];
   

    $sql="insert into userinfo(district,name, phone, address, adressd, idproof, pan, invoice, insurance, vbname, vcolor, vclass, ylaunch, mcompany, myear, cylinder, hpower, cc, scapacity, uweight, fuel, chasis, engine, ophoto, vphoto, idprooff, pancopy, dlc, invoice, ic) values('$district','$name','$phone','$address','$idproof','$pan','$invoice','$insurance','$vbname','$vmodel','$vcolor','$vclass','$ylaunch','$mcompany','$myear','$cylinder','$hpower','$cc','$scapacity','$uweight','$fuel','$chasis','$engine','$ophoto','$vphoto','$idprooff','$pancopy','$dlc','$invoice','$ic',)";

    $result=mysqli_query($conn,$sql);

    echo "<script>alert('Visitor data added successfully.');</script>";
    echo "<script>window.location.href='facev.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehicle verification system</title>

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
     background-image:url("bgimage/v3.jpg");
     background-repeat: no-repeat;
     background-attachment: scroll;
     background-position: relative;
      background-size: cover;

    }

    #header{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
        font-size: 35px; 
        letter-spacing: 2px;
    }

  
    

    #dashboard{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 22px;
        font-weight: bold;
        color: white;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

 
    
    </style>
</head>
<body>
    
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-8"> 
            <div class=" justify-content-center">
                <br>
                <div class="alert">

                    <a href="#" class="nav-link text-light text-uppercase font-weight-bold" id="header">
                        vehicle verify with face recognition
                     </a>
                </div>
                <br>
                
            </div>
            </div>
            <div class="col-md-4">
                <div class="alert">
                <br>
                <div class="d-flex justify-content-end">

                <a href="user.php" class="nav-link text-light text-uppercase font-weight-bold" id="header">
                        <i class="fas fa-user-circle"></i>
                     Logout
                     </a>
                </div>
                </div>
            </div>
            </div>

        

        <div class="row">
            <div class="col-md-3 ">
                <p class="text-center text-light font-weight-bold text-uppercase" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px; letter-spacing: 2px; border: 2px solid white; padding: 10px;">
                    <i class="fas fa-user"></i>
                    user panel
                </p>
                <br>

                <a href="newrc.php" class="nav-link" id="dashboard">
                   
                    new rc apply
                </a>

                <a href="facev.php" class="nav-link" id="dashboard">
                   face recognition
                </a>

                <a href="drc.php" class="nav-link" id="dashboard">
                    
                    download rc
                </a>

                <a href="ah.php" class="nav-link" id="dashboard">
                    applied history
                </a>

                </div>
    
    
            
                <div class="col-md-9">
                <div class="alert">
                    
                    <hr>

                    <div class="card">
                        <div class="card-header text-light bg-dark font-weight-bold">
                            <i class="fas fa-user"></i>
                                Person Details
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                <label>District</label>
                                <input type="text"  name="district" id="district" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label> Full Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone" id="phone" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" id="address" class="form-control" rows="4" required></textarea>
                                </div>

                                <div class="form-group">
                                <label> Dealer Name and Address</label>
                                <textarea type="text" name="addressd" id="addressd" class="form-control" rows="4" required></textarea>
                                </div>

                                <div class="form-group">
                                <label>ID Proof Number</label>
                                <input type="text" name="idproof" id="idproof" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label>Pan Card Number</label>
                                <input type="text" name="pan" id="pan" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label>Invoice Bill Number</label>
                                <input type="text" name="invoice" id="invoice" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label> Insurance  Number</label>
                                <input type="text" name="insurance" id="insurance" class="form-control" required>
                                </div>
                               
                                <div class="card-header text-light bg-dark font-weight-bold">
                                 <i class="fas fa-motorcycle"></i>
                                 Vehicle Details
                                </div>

                                <br>

                                <div class="form-group">
                                <label>Vehicle Brand Name</label>
                                <input type="text"  name="vbname" id="vbname" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label> Vehicle Model</label>
                                <input type="text" name="vmodel" id="vmodel" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label>Vehicle Color</label>
                                <input type="text" name="vcolor" id="vcolor" class="form-control" required>
                                </div>

                                
                                <div class="form-group">
                                <label>Vehicle Class</label>
                                <input type="text" name="vclass" id="vclass" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label>Year of Launching</label>
                                <input type="text" name="ylaunch" id="ylaunch" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label>Maker Company</label>
                                <input type="text" name="mcompany" id="mcompany" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label> Month and Year of Manufacture</label>
                                <input type="text" name="myear" id="myear" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label> Number of Cylinders</label>
                                <input type="text" name="cylinder" id="cylinder" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                <label>Horse Power </label>
                                <input type="text" name="hpower" id="hpower" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                <label> Cubic Capacity</label>
                                <input type="text" name="cc" id="cc" class="form-control" required>
                                </div>
                            
                                <div class="form-group">
                                <label>Seating Capacity</label>
                                <input type="text" name="scapacity" id="scapacity" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                <label> Unladen Weight</label>
                                <input type="text" name="uweight" id="uweight" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                <label> Fuel type </label>
                                <input type="text" name="fuel" id="fuel" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                <label>Chasis no </label>
                                <input type="text" name="chasis" id="chasis" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                <label> Engine no </label>
                                <input type="text" name="engine" id="engine" class="form-control" required>
                                </div>
                                
                                <div class="card-header text-light bg-dark font-weight-bold">
                                 <i class="fas fa-document"></i>
                                 Documents Upload
                                </div>
                                <br>

                                <form >
                                <label> Owner photo </label>
                                <br>
                                <input type="file" id="ophoto" name="ophoto" required>
                                </form>
                                <br>
                                
                                <form >
                                <label> Vehicle Photo in left side </label>
                                <br>
                                <input type="file" id="vphoto" name="vphoto" required>
                                </form>
                                <br>
                                
                                <form >
                                <label> ID Proof</label>
                                <br>
                                <input type="file" id="idprooff" name="idprooff" required>
                                </form>
                                <br>
                                
                                <form >
                                <label> Pan Card </label>
                                <br>
                                <input type="file" id="pancopy" name="pancopy" required>
                                </form>
                                <br>

                                <form >
                                <label> Driving License </label>
                                <br>
                                <input type="file" id="dlc" name="dlc" required>
                                </form>
                                <br>
                                
                                <form >
                                <label> Invoice of Vehicle</label>
                                <br>
                                <input type="file" id="invoicec" name="invoicec" required>
                                </form>
                                <br>

                                <form >
                                <label> Insurance Copy </label>
                                <br>
                                <input type="file" id="ic" name="ic" required>
                                </form>
                                <br>
                                <br>
                                <br>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" name="submit" id="submit" class="btn btn-outline-dark">
                                        <i class="fas fa-submit"></i>
                                        Apply RC
                                    </button>
                                </div>

                        
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>

    

</body>
</html>