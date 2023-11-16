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
            <a href="index.html"><img src="images/logo.png"></a>
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
        <h1>About Us</h1>
    </section>
    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <p>Sapthagiri College is one of the premier college in
                     middle Karnataka strategically situated on the banks of Kunduwada lake.
                      Sapthagiri vidyalaya established in 1990, has an imposing history of 30years in field of education
                       with a vision and mission of import holistic education to our pupil.
                    Sapthagiri which constantly strives in pursuit of excellence. 
                    Imparts the kind of education that makes our country proud.
                     The name “Sapthagiri” is synonymous with creditable performance,
                      committed of training, honing of skills, manifestations, of talents.
                       Nurturing of character and development of a holistic personality.</p>
                    <a href=""class="hero-btn red-btn">EXPLORE NOW</a>
            </div>
            <div class="about-col">
                <img src="images/principal.png">
            </div>

        </div>
    </section>
    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <p>Sapthagiri College is one of the premier college in
                     middle Karnataka strategically situated on the banks of Kunduwada lake.
                      Sapthagiri vidyalaya established in 1990, has an imposing history of 30years in field of education
                       with a vision and mission of import holistic education to our pupil.
                    Sapthagiri which constantly strives in pursuit of excellence. 
                    Imparts the kind of education that makes our country proud.
                     The name “Sapthagiri” is synonymous with creditable performance,
                      committed of training, honing of skills, manifestations, of talents.
                       Nurturing of character and development of a holistic personality.</p>
                    <a href=""class="hero-btn red-btn">EXPLORE NOW</a>
            </div>
            <div class="about-col">
                <img src="images/trust.png">
            </div>

        </div>

    </section>

    
<section class="footer">
    <h1>Follow  Us</h1>
    <!-- <h3>Sapthagiri College is one of the premier college in middle Karnataka strategically situated on the banks of Kunduwada lake.</h3> -->
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