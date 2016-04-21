<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Chicago Tourism</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo">Chicago Tourism</a>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Welcome to the windy city</h1>
        <div class="row center">
          <h5 class="header col s12 light">An epitome of modern architecture. A hub for pizza fans. A city filled with love</h5>
          <h5 class="header col s12 light">Come and breath in a bit of Chicago.</h5>
        </div>
        <div class="row center">
            <a href="Login.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Start Travelling</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="Chicago-Wallpaper-11.jpeg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Sign in   -->
      <div class="login">
        <div class="innerlogin">
        <h4 class="header center teal-text text-lighten-2">Sign in</h4>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
            User Name:
            <input type="text" name="username"><br>
            Password:
            <input type=password name="password">
            <input type="submit" label="submit"/>
        </form>
        <h6><a href="https://www.google.com">Forgot password?&nbsp&nbsp&nbsp&nbsp&nbsp;</a><a href="Register.php">New user?</a></h6></h6>
      </div>
      </div>
    </div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">The Project</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        
          <div style="margin-left: 75%">
          <h5 class="white-text">Quick Links</h5>
          <ul>
            <li><a class="white-text" href="#!">Contact</a></li>
            <li><a class="white-text" href="#!">About us</a></li>
            <li><a class="white-text" href="#!">Careers</a></li>
            <li><a class="white-text" href="#!">Tech Support</a></li>
          </ul>
        </div>
      </div>
    </div>
      
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Illinois Tech</a>
      </div>
    </div>
  </footer>
    <?php
        // put your code here
            if (empty($_POST['username']) || empty($_POST['password'])) {
                $error = "Username or Password is invalid";
                echo $error;
            }
            else {
               $username=$_POST['username'];
               $password=$_POST['password'];
               if($username=="krishna"&&$password="harsha"){
                   header('Location: PlacesToVisit.html');
               }
            }
        ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>