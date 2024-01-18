<?php
session_start();
if(isset($_SESSION['username'])){
  
  ?>



  <!DOCTYPE html>
  <html>
  <head>
  <title>Administrator</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

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
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>DASHBOARD</p>
    </a>
    <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>DONORS</p>
    </a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>PATIENTS</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->
  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
      <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">DASHBOARD</a>
      <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">DONORS</a>
      <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">PATIENTS</a>
    </div>
  </div>

  <!-- Page Content -->
  <div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <div  class="w3-padding-large" style="min-height: 650px;">
    <header class="w3-container w3-padding-32 w3-center w3-black" style="min-height: 500px;" id="home">
      <div class="w3-display-middle w3-center">
      <h1 class="w3-jumbo"> Welcome back!!</h1>
      <p>Administrator</p>
      </div>
    </header>
    </div>
    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" style="min-height: 650px;" id="about">
      <h2 class="w3-text-light-grey">Overview</h2>
      <hr style="width:200px" class="w3-opacity">

      <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
        <div class=" w3-section">
          <span class="w3-xlarge">
            <?php
            include("connection.php");

            $sql = "SELECT COUNT(*) AS count FROM donors;";
            $result = $connection->query($sql);
            $row = $result->fetch_assoc();
            $count = $row["count"];
            echo "<strong>$count</strong>";
            
            ?>
          </span><br>
          READY TO GIVE BLOOD
        </div>
      </div>

      <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
        <div class=" w3-section">
          <span class="w3-xlarge">
          <?php
            include("connection.php");

            $sql = "SELECT COUNT(*) AS count FROM patients;";
            $result = $connection->query($sql);
            $row = $result->fetch_assoc();
            $count = $row["count"];
            echo "<strong>$count</strong>";
            
            ?>
          </span><br>
          NEED BLOOD
        </div>
      </div>


      <div class="container my-5" id="bgchart">
        <h2 class="w3-text-light-grey">Blood Group chart</h2>
        <hr style="width:280px" class="w3-opacity">
        <a class="btn btn-primary" href="/bloodbank_dbms/bgcreate.php" role="button">ADD</a>
        <br>
        <br>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Type</th>
                    <th>Give to</th>
                    <th>Recieve from</th>
                    <th></th>
                </tr>
            </thead>
            <tbody style="height: 100px !important; overflow: scroll; ">
                <?php
                include "connection.php";
               
                $sql = "SELECT * FROM bloodgroup";
                $result = $connection->query($sql);

                while($row = $result->fetch_assoc()) {
                    echo"
                    <tr>
                    <td>$row[type]</td>
                    <td>$row[give_to]</td>
                    <td>$row[recieve_from]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/bloodbank_dbms/bgedit.php?type=$row[type]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/bloodbank_dbms/bgdelete.php?id=$row[type]'>Delete</a>
                    </td>
                </tr>
                    ";

                }
                ?>
                
            </tbody>
        </table>
      </div>

    <!-- End About Section -->
    </div>

    <!-- Portfolio Section -->
    <div class="w3-padding-64 w3-content" style="min-height: 650px;" id="photos">
      <div class="container my-5" id="dchart">
        <h2 class="w3-text-light-grey">Donor List</h2>
        <hr style="width:280px" class="w3-opacity">
        <a class="btn btn-primary" href="/bloodbank_dbms/dcreate.php" role="button">ADD</a>
        <br>
        <br>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>CITY</th>
                    <th>PHONE N0</th>
                    <th>AGE</th>
                    <th>GENDER</th>
                    <th>HEALTH CONDITION</th>
                    <th>BLOOD GROUP</th>
                    <th></th>
                </tr>
            </thead>
            <tbody style="height: 100px !important; overflow: scroll; ">
                <?php
                include "connection.php";
               
                $sql = "SELECT * FROM donors";
                $result = $connection->query($sql);

                while($row = $result->fetch_assoc()) {
                    echo"
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[city]</td>
                    <td>$row[phone_no]</td>
                    <td>$row[age]</td>
                    <td>$row[gender]</td>
                    <td>$row[health_condition]</td>
                    <td>$row[blood_groups]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/bloodbank_dbms/dedit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/bloodbank_dbms/ddelete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                    ";

                }
                ?>
                
            </tbody>
        </table>
      </div>




    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" style="min-height: 650px;" id="contact">
      <div class="container my-5" id="pchart">
        <h2 class="w3-text-light-grey">Patient List</h2>
        <hr style="width:280px" class="w3-opacity">
        <a class="btn btn-primary" href="/bloodbank_dbms/pcreate.php" role="button">ADD</a>
        <br>
        <br>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>CITY</th>
                    <th>PHONE N0</th>
                    <th>AGE</th>
                    <th>GENDER</th>
                    <th>HEALTH CONDITION</th>
                    <th>BLOOD GROUP</th>
                    <th>HOSPITAL</th>
                    <th></th>
                </tr>
            </thead>
            <tbody style="height: 100px !important; overflow: scroll; ">
                <?php
                include "connection.php";
               
                $sql = "SELECT * FROM patients";
                $result = $connection->query($sql);

                while($row = $result->fetch_assoc()) {
                    echo"
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[city]</td>
                    <td>$row[phone_no]</td>
                    <td>$row[age]</td>
                    <td>$row[gender]</td>
                    <td>$row[health_condition]</td>
                    <td>$row[blood_groups]</td>
                    <td>$row[hospital]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/bloodbank_dbms/pedit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/bloodbank_dbms/pdelete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                    ";

                }
                ?>
                
            </tbody>
        </table>
      </div>
 
  <!-- End Contact Section -->
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