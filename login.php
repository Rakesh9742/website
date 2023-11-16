<!DOCTYPE html>
<html>
<head>
   <meat name="viewport" content="with=device-width,initial-scale=1.0">
    <title>sapthagiri college</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100;1,500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.php"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" aria-hidden="true" onclick="hidemenu()"></i>
                <ul>
                <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="faculty.php">FACULTY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="login.php">Login</a></li>
                    

                </ul>
            </div>
            <i class="fa fa-bars" aria-hidden="true"onclick="showmenu()"></i>
        </nav>
        <h1>LOGIN</h1>
    </section>
    <center>

        <div class="form_deg">
            <center class="title_deg">
                <h3>Login form</h3>
                <h4>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION['loginmessage'];
                    ?>
                    </h4>

            </center>
            <form action="login_check.php" method="POST" class="login_form">
                <br>
                <div>
                    <!-- <label class="label_deg"></label> -->
                    <input autofocus style="text-align: left;padding-left: 5px;" type="text" name="username" placeholder="    Username"required>
                </div>
                <br>
                <div>
                    <!-- <label class="label_deg"></label> -->
                    <input autofocus style="text-align: left;padding-left: 5px;" type="password" name="password" placeholder="    Password"required>
                </div>
                <br>
                <div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </center>
    </section>
   

    





    <script>
        var navLinks=document.getElementById("navLinks");
        function showmenu(){
            navLinks.style.right="0";
        }
        function hidemenu(){
            navLinks.style.right="-200px";
        }
    </script>

</body>
</html> 