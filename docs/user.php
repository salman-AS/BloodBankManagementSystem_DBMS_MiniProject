<?php
session_start();
if(isset($_SESSION['username'])){
  
    

$id="";
$name="";
$city="";
$phone_no="";
$age="";
$gender="";
$health_condition="";
$blood_groups="";
$hospital="";
$errorMessage= "";
$successMessage= "";

  ?>

  <!DOCTYPE html>
  <html>
  <head>
  <title>User</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="form.css">

  <style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
  .w3-row-padding img {margin-bottom: 12px}
  /* Set the width of the sidebar to 120px */
  .w3-sidebar {width: 120px;background: #222;}
  /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
  #m  ain {margin-left: 120px}
  /* Remove margins from "page content" on small screens */
  @media only screen and (max-width: 600px) {#main {margin-left: 0}}
  </style>
  </head>
  <body class="w3-black">

  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="images/pic4.png" style="width:100%">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>DONATE</p>
    </a>
    <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>REQUEST</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->
  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
      <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">DONATE</a>
      <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">REQUEST</a>
    </div>
  </div>

  <!-- Page Content -->
  <div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <div  class="w3-padding-large" style="min-height: 650px;">
    <header class="w3-container w3-padding-32 w3-center w3-black" style="min-height: 500px;" id="home">
      <div class="w3-display-middle w3-center">
      <h1 class="w3-jumbo"> Welcome back!!</h1>
      <p>User</p>
      </div>
    </header>
    </div>
    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" style="min-height: 650px;" id="about">
      <h2 class="w3-text-light-grey fs-2">Register as Donor</h2>
      <hr style="width:275px" class="w3-opacity">

      <div class="container my-5 fs-3 w3-text-lgrey">

        <?php if( !empty($errorMessage)){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button id='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ID</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="id" values="<?php echo $id; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="name" values="<?php echo $name; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">City</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="city" values="<?php echo $city; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="phone_no" values="<?php echo $phone_no; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Age</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="age" values="<?php echo $age; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="gender" values="<?php echo $gender; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Health</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="health_condition" values="<?php echo $health_condition; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Blood Group</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="blood_groups" values="<?php echo $blood_groups; ?>"> 
                </div>
            </div>
        <?php
        if( !empty($successMessage) ){
            echo "
            <div class='row mb-3>
                <div class='offset-sm-3 col-sm-6>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button id='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>
            </div>
            ";
        }
        ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <input type="submit" class="btn btn-primary" id="submit2" name="add" value="Register" />
                </div>
                <div class='col-sm-3 d-grid'>
                    <a class="btn btn-outline-primary" href="/bloodbank_dbms/user.php#about" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    <!-- End About Section -->
    </div>
    <!-- Portfolio Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" style="min-height: 650px;" id="photos">
      <h2 class="w3-text-light-grey fs-2">Request for Blood</h2>
      <hr style="width:275px" class="w3-opacity">
    <div class="container my-5 fs-3 w3-text-lgrey">

        <?php if( !empty($errorMessage)){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button id='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ID</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="id" values="<?php echo $id; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="name" values="<?php echo $name; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">City</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="city" values="<?php echo $city; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="phone_no" values="<?php echo $phone_no; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Age</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="age" values="<?php echo $age; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="gender" values="<?php echo $gender; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Health</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="health_condition" values="<?php echo $health_condition; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Blood Group</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="blood_groups" values="<?php echo $blood_groups; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Hospital</label>
                <div class='col-sm-6'>
                    <input id="text" class="form-control" name="hospital" values="<?php echo $hospital; ?>"> 
                </div>
            </div>
        <?php
        if( !empty($successMessage) ){
            echo "
            <div class='row mb-3>
                <div class='offset-sm-3 col-sm-6>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button id='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>
            </div>
            ";
        }
        ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <input type="submit" class="btn btn-primary" id="submit2" name="add" value="Request" />
                </div>
                <div class='col-sm-3 d-grid'>
                    <a class="btn btn-outline-primary" href="/bloodbank_dbms/user.php#photos" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    </div>
  <!-- End Portfolio Section -->
  </div>

  <div class="w3-padding-64 w3-content w3-text-grey" style="min-height: 650px;">
  <h2 class="w3-text-light-grey">Contact Us</h2>
    <hr style="width:200px" class="w3-opacity">
  <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Kuttipuram, KERALA</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: 9876543210</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: bloodbank_dbms@gmail.com</p>
  </div><br>
  <div style="position: absolute; top: 10px; right: 10px;">
    <a type="button" class="btn btn-dark data-mdb-ripple-init" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a>
  </div>
  </div>
  <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <!-- End footer -->
  </footer>


  <?php
include("connection.php");

if($_POST['add'] == "Register") {

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $city=$_POST["city"];
    $phone_no=$_POST["phone_no"];
    $age=$_POST["age"];
    $gender=$_POST["gender"];
    $health_condition=$_POST["health_condition"];
    $blood_groups=$_POST["blood_groups"];
    do{
        if( empty($id) || empty($name) || empty($city) || empty($phone_no) || empty($age) || empty($gender) || empty($health_condition) || empty($blood_groups)){
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "INSERT INTO donors (id, name, city,phone_no,age,gender,health_condition,blood_groups)" .
                "VALUES ('$id','$name','$city','$phone_no','$age','$gender','$health_condition','$blood_groups')";
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        
        $id="";
        $name="";
        $city="";
        $phone_no="";
        $age="";
        $gender="";
        $health_condition="";
        $blood_groups="";
        $successMessage = "NEW RECORD ADDED SUCCESFULLY";

        header("location: /bloodbank_dbms/user.php#about");
    } while (false);
}
} 



else if($_POST['add'] == "Request") {

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $city=$_POST["city"];
    $phone_no=$_POST["phone_no"];
    $age=$_POST["age"];
    $gender=$_POST["gender"];
    $health_condition=$_POST["health_condition"];
    $blood_groups=$_POST["blood_groups"];
    $hospital=$_POST["hospital"];
    do{
        if(empty($name) || empty($city) || empty($phone_no) || empty($age) || empty($gender) || empty($health_condition) || empty($blood_groups) || empty($hospital)){
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "INSERT INTO patients (id, name, city,phone_no,age,gender,health_condition,blood_groups,hospital)" .
                "VALUES ('$id','$name','$city','$phone_no','$age','$gender','$health_condition','$blood_groups','$hospital')";
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        
        $id="";
        $name="";
        $city="";
        $phone_no="";
        $age="";
        $gender="";
        $health_condition="";
        $blood_groups="";
        $hospital= "";
        $successMessage = "NEW RECORD ADDED SUCCESFULLY";

        header("location: /bloodbank_dbms/user.php#photos");
    } while (false);
}
}

?>

  <!-- END PAGE CONTENT -->
  </div>

  </body>
  </html>

<?php
}
else {
  header("Location: index.php");
  exit();
}
?>