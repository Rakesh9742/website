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
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index1.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" aria-hidden="true" onclick="hidemenu()"></i>
                <ul>
                <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">course</a></li>
                    <li><a href="faculty.php">FACuLTY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="login.php">LOGIN</a></li>

                </ul>
            </div>
            <i class="fa fa-bars" aria-hidden="true"onclick="showmenu()"></i>
        </nav>
        <h1>Our Courses</h1>
    </section>
    <section class="course">
        <h1>courses we offer</h1>
        <p>PCMB  and PCMC</p>
        <div class ="row">
            <div class="courses-col">
                <h3>NEET</h3>
                <p>we are providing special coaching for medical aspirants.
                    good quality for coaching provided in this program to student.</p>
            </div> <div class="courses-col">
                <h3>KCET</h3>
                <p>we are providing special coaching for medical aspirants.
                    good quality for coaching provided in this program to student.</p>
            </div>
            <div class="courses-col">
                <h3>JEE</h3>
                <p>we are providing special coaching for medical aspirants.
                    good quality for coaching provided in this program to student.</p>
            </div>
            <div class="courses-col">
                <h3>KVPY</h3>
                <p>we are providing special coaching for research.
                    good quality for coaching provided in this program to student.</p>
            </div>
   
    </section>

    
<section class="footer">
    <h1>About Us</h1>
    <h3>Sapthagiri College is one of the premier college in middle Karnataka strategically situated on the banks of Kunduwada lake.</h3>
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
            <!-- <a href="#" title="pinterest"> -->
              <!-- <i class="fa fa-pinterest-p" aria-hidden="true"></i> -->
            </a>
            <!-- <a href="#" title="camera"> -->
              <!-- <i class="fa fa-camera-retro" aria-hidden="true"></i> -->
            </a>
            <p>copyrights @ saptagiri</p>
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