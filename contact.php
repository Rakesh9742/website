<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
}
?>





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
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">LOGIN</a></li>

                </ul>
            </div>
            <i class="fa fa-bars" aria-hidden="true"onclick="showmenu()"></i>
        </nav>
        <h1>Contact Us</h1>
    </section>
    

        </div>
    </section>
    <section class="location">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.3456984082445!2d75.8966690751035!3d14.464828086005635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bba2f19036fd0cb%3A0x185199562b105e82!2sSapthagiri%20P%20U%20College!5e0!3m2!1sen!2sin!4v1697902517965!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="Contact-us">
        <div class="row">
            <div class="Contact-col">

            </div>
        </div>
    </div>
    
    
</div>
<div>
    <span>
        <!-- <h4>info@sapthagiripucollege.com</h4> -->
        <!-- <h5>Email us for more query</h5> -->
    </span>
</div>
</div>
<div class="apply-border">
<h1 class="adm" style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</ndsp>Admission Form</h1>

<div algin="center" class="admission_form">
    <form action="data_check.php" method="POST">
        <div class="adm_int">
            <label class="label_text"></label>
            <input autofocus style="text-align: left;padding-left: 5px;" class="input_deg" type="text" name="name" placeholder="  Name" required>

</div>
<div class="adm_int">
            <label class="label_text"></label>
            <input autofocus style="text-align: left;padding-left: 5px;" class="input_deg" type="text" name="email" placeholder="  Email" required>

</div>
<div class="adm_int">
            <label class="label_text"></label>
            <input autofocus style="text-align: left;padding-left: 5px;" class="input_deg" type="text" name="mobile" placeholder="  Contact Number" required>

</div>
<div class="adm_int">
            <label class="label_text"></label>
            <input autofocus style="text-align: left;padding-left: 5px;" class="input_deg"type="text"  name="course" placeholder="  Select a Course : PCMB/ PCMC">

</div>
<div class="adm_int">
    <input class="btn btn-primary" id="submit" type="submit" value="submit"name="submit">
        </div>
        </form>

    </section>
   
    </section>
        </div>
        </div>
<section class="footer">
    
    <!-- <h3>Sapthagiri College is one of the premier college in middle Karnataka strategically situated on the banks of Kunduwada lake.</h3> --> -->
    <span>
        <div class="cont">
        <span style="font: size 36px;">Sapthagiri PU College</span><br><br>
        <i class="fa fa-envelope"></i><a href="mailto:info@sapthagiripucollege.com"> info@sapthagiripucollege.com</a><br><br>
        <i class="fa fa-phone" style="color:red"></i><a href="tel:+919741113392"> 9741113392</a><br>
        <i class="fa fa-phone" style="color:red"></i><a href="tel:+919606648777"> 9606648777</a><br>
        <i class="fa fa-phone" style="color:red"></i><a href="tel:+919741113392"> 8192-355069</a><br>
        </div>
        <div>
        <span>
            
        </span>
    </div>
    </span>
        <div class="social-icons">
            <a href="https://www.facebook.com/sapthagiri.saptha.94/"  title="facebook"> 
              <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a>
            <a href="#" title="twitter"> 
              <i class="fa fa-twitter-square" aria-hidden="true"></i>
            </a>
            <a href="https://instagram.com/sapthagiripucollege?igshid=MzRlODBiNWFlZA==" title="instagram">  
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="https://youtube.com/@sapthagiripucollege7455?si=A7XxOJKcNxz9t0vS" title="youtube">
              <i class="fa fa-youtube-square" aria-hidden="true"></i>
            </a>
            <a href="#" title="linkedin">
              <i class="fa fa-linkedin-square" aria-hidden="true"></i>
            </a>
            <!-- <p>made by rakesh</p> -->

          </div>

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