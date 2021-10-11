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
     background-image:url("bgimage/b7.jpg");
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
            </div>
            </div>
            <div class="col-md-4">
                <div class="alert">
                <br>
                <div class="d-flex justify-content-end">
                <a href="admin.php" class="nav-link text-light text-uppercase font-weight-bold" id="header">
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
                    admin panel
                </p>
                <br>
           
                <a href="tapp.php" class="nav-link" id="dashboard">
                   
                    temporary approval
                </a>

                <a href="rcorg.php" class="nav-link" id="dashboard">
                   rc approval
                </a>
                    
                <a href="mrc.php" class="nav-link" id="dashboard">
                    
                    manage rc apply
                </a>

                
               
               
            </div>
            <div class="col-md-9 ">

<div class="card">
            <div class="card-header text-light bg-dark font-weight-bold">
                <i class="fas fa-database"></i>
                    RC Given History
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Engine No</th>
                            <th>Phone Number</th>
                            <th>Temporary RC</th>
                            <th> Smart RC </th>
                           
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
</div>


            
        </div>
    </div>

</body>
</html>