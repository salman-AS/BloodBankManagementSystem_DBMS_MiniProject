

<!DOCTYPE html>
<html>

<head>
  <title>Blood Bank</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet" href="./login.css">
  <link rel="stylesheet" href="./card.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,
    html {
      height: 100%;
      font-family: "Inconsolata", sans-serif;
    }

    .bgimg {
      background-position: center;
      background-size: 1000px 563px;
      background-image: url("images/pic1.jpg");
      min-height: 75%;
    }

    .menu {
      display: none;
    }
  </style>
</head>

<body>

  <!-- Links (sit on top) -->
  <div class="w3-top">
    <div class="w3-row w3-padding w3-black">
      <div class="w3-col s3">
        <a href="#" class="w3-button w3-block w3-black">HOME</a>
      </div>
      <div class="w3-col s3">
        <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
      </div>
      <div class="w3-col s3">
        <a href="#menu" class="w3-button w3-block w3-black">LOGIN</a>
      </div>
    </div>
  </div>

  <!-- Header with image -->
  <header class="bgimg w3-display-container w3-grayscale-min" id="home" style="margin-top: 50px;">
    <!--div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Open from 6am to 5pm</span>
  </div-->
    <div class="w3-display-middle w3-center">
      <span class="w3-text-black" style="font-size:90px;">Donate Blood<br>Save Lives</span>
    </div>
    <!--div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">15 Adr street, 5015</span>
  </div-->
  </header>

  <!-- Add a background color and large text to the whole page -->
  <div class="w3-sand w3-grayscale w3-large">

    <!-- About Container -->
    <div class="w3-container" id="about">
      <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">BLOOD GROUPS</span></h5>
        <p>blood group of any human being will mainly fall in any one of the following groups..</p>
        <div class="col-lg-6">
          <ul>  
          <li>A positive or A negative</li>
          <li>B positive or B negative</li>
          <li>O positive or O negative</li>
          <li>AB positive or AB negative.</li>
          </ul>
        </div>
        <div class="w3-panel w3-leftbar w3-light-grey">
          <p><i>"“Compassion is in your veins. Share it through blood donation.”.</i></p>
          <p>-TheGreatZiro</p>
        </div>
        <img src="images/pic3.jpg" style="width:100%;" class="w3-margin-top">
      </div>
    </div>

    <!-- User login Container -->
    <div class="w3-container" id="menu">
      <div class="w3-content" style="max-width:700px">

        <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">LOGIN</span></h5>

        <div class="w3-row w3-center w3-card w3-padding">
          <a href="javascript:void(0)" onclick="openMenu(event, 'user');" id="myLink">
            <div class="w3-col s6 tablink">User Login</div>
          </a>
          <a href="javascript:void(0)" onclick="openMenu(event, 'admin');">
            <div class="w3-col s6 tablink">Admin Login</div>
          </a>
        </div>

        <div id="user" class="w3-container menu w3-padding-48 w3-card">
        
          <section class='login' id='ulogin'>
            <div class='head'>
              <h1 class='company'>User Login</h1>
            </div>
            <p class='msg'>Welcome back</p>
            <div class='form'>
              <form method="post" action="login.php">
                <input type="text" placeholder='Username' class='text' id='username' name='usun' required><br>
                <input type="password" placeholder='••••••••••••••' class='password' name='uspw'><br>
                <input type="submit" value="Login" class="btn-login" name="userlogin">
              </form>
            </div>
          </section>

        </div>


        


        <div id="admin" class="w3-container menu w3-padding-48 w3-card">
          
          <section class='login' id='alogin'>
            <div class='head'>
              <h1 class='company'>Admin Login</h1>
            </div>
            <p class='msg'>Welcome back</p>
            <div class='form'>
              <form method="post" action="login.php">
                <input type="text" placeholder='Username' class='text' id='username' name ='adun' required><br>
                <input type="password" placeholder='••••••••••••••' class='password' id='password' name='adpw'><br>
                <input type="submit" value="Login" class="btn-login" name="adlogin">
              </form>
            </div>
          </section>

        </div>
      </div>
    </div>

    <!-- Admin login Container -->
    <div class="w3-container" id="where" style="padding-bottom:32px;">
      <div class="w3-content" style="max-width:2000px">
        <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide"> ABOUT US</span></h5>

        <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <p class="text-center">Our mission is to create a centralized platform that connects blood donors with those in need, making the process of blood donation more efficient and accessible. Through our website, we aim to promote awareness and educate the public on the importance of regular blood donation. By leveraging technology to streamline the process and connect donors with recipients in real-time, we hope to make a positive impact on the lives of those in need of life-saving blood transfusions.</p>
                <h2 class="text-center">Team </h2>
               </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="assets/img/1.jpg">
                        <h3 class="name">Salman</h3>
                        <p class="title">bhai</p>
                        <p class="description">Salman is a valuable member of our team, bringing expertise in frontend technology as a third year Computer Engineering student at MES COLLEGE OF ENGINEERING. With a passion for staying current and continuously learning, Salman is always seeking out new opportunities to expand his knowledge and skills. </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="assets/img/2.jpg">
                        <h3 class="name">Sahal</h3>
                        <p class="title">TheGreatZiro</p>
                        <p class="description">Sahal is a valuable team member with expertise in backend technology as a third year Computer Engineering student at MES COLLEGE OF ENGINEERING. His dedication to growth and continuous learning makes him a valuable asset to any software development project. With a strong foundation in these areas,Sahal is well-equipped to make valuable contributions to the team.. </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="assets/img/3.jpg">
                        <h3 class="name">Vignesh</h3>
                        <p class="title">Stylist</p>
                        <p class="description">Vignesh is a valuable team member with expertise in frontend technology as a third year Computer Engineering student at MES COLLEGE OF ENGINEERING. His dedication to growth and continuous learning makes him a valuable asset to any software development project. With a strong foundation in these areas and a passion for staying current, vignesh is well-equipped to make valuable contributions to the team. </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="assets/img/3.jpg">
                        <h3 class="name">Sahil</h3>
                        <p class="title">Stylist</p>
                        <p class="description">Sahil is a valuable team member with expertise in backend technology as a third year Computer Engineering student at MES COLLEGE OF ENGINEERING. His dedication to growth and continuous learning makes him a valuable asset to any software development project. With a strong foundation in these areas,Sahil is well-equipped to make valuable contributions to the team. </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <div class="w3-container" id="where" style="padding-bottom:32px;">
      <div class="w3-content" style="max-width:700px">
      </div>
    </div>
    </div>

    <!-- End page content -->
  </div>

  <div class="w3-center w3-light-grey w3-padding-48 w3-large">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  </div>

  <script>
    // Tabbed Menu
    function openMenu(evt, menuName) {
      var i, x, tablinks;
      x = document.getElementsByClassName("menu");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
      }
      document.getElementById(menuName).style.display = "block";
      evt.currentTarget.firstElementChild.className += " w3-dark-grey";
    }
    document.getElementById("myLink").click();
  </script>

</body>

</html>