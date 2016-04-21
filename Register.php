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
        <script type="text/javascript">
            function Redirect() {
                alert("Hello World");
                window.location.href='https://www.google.com';
            }
        </script>
    </head>
    <body>
        <nav class="white" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="index.php" class="brand-logo">Chicago Tourism</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="Login.php">Login</a></li>
                </ul>

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
            <div class="parallax"><img src="chicago-sunset-wallpaper.jpg" alt="Unsplashed background img 1"></div>
        </div>

        <div class="container">
            <div class="section">
                <div style="margin-left: 18%">
                <h5>Fill a simple registration form to start exploring Chicago.</h5><br>
                </div>
              <!--   Sign in   -->
              <div class="login">
                <div class="innerlogin">  
                <h4 class="header center teal-text text-lighten-2">Register</h4>
                <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
                    First Name : 
                    <input type="text" name="fname" required>
                    Last Name :
                    <input type="text" name="lname" required>
                    Date of Birth : 
                    <input name="text" type="date" required>
                    Email:
                    <input type="email" name="email" required>
                    Gender:
                    <input type="text" id="gender" list="genderss" name="gender">
                    <datalist id="genderss">
                        <option value="Male"/>
                        <option value="Female"/>
                        <option value="Do not wish to disclose"/>
                    </datalist>
                    Phone :
                    <input type="text" name="phone" required>
                    Address :
                    <input type="text" name="address" required>
                    Password:
                    <input type=password name="password">
                    Re-enter Password:
                    <input type=password name="repassword">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </form>
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


      <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/init.js"></script>
    </body>
</html>