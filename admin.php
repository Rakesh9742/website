<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");       
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin  dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<header class="header">
    <a href="admin.php">Admin dashboard</a>
    

    <div class="logout"> 
        <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>
</header>

<aside>
    <ul>
        <li>
            <a href="admission.php">Admission</a>
        </li>
        <li>
            <a href="add_student.php">Add student</a>
        </li>
        <li>
            <a href="view_student.php">view student</a>
        </li>
         <li> 
            <a href="index.php">Student Result</a>
        </li>
        <!-- <li> -->
            <!-- <a href="">Add course</a> -->
        <!-- </li> -->
        <!-- <li> -->
            <!-- <a href="">viwe course</a> -->
        <!-- </li> -->
    </ul>


</aside>

<div class="content">
</div>
<center>
<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FKolkata&src=MTJjYmNkY2U3NjAxNmNkMjQ5ZjVkYTA4NzIyZTdlZjFlMWNjMjZjNDZjNjY5MjBhYmUzNTQ2NjJlNjJmYTRlN0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%233F51B5&color=%230B8043" style="border:solid 1px #777" width="700" height="400"></iframe>
</center>

</body>

</html>