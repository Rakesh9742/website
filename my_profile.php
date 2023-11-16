<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='admin')
{
    header("location:login.php");       
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student dashboard</title>
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
    <a href="student_home.php">Student</a>

    <div class="logout"> 
        <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>
</header>

<aside>
    <ul>
        <li>
            <a href="">MY Profile</a>
        </li>
        <li>
            <a href="">My course</a>
        </li>
        <li>
            <a href="">Result </a>
        </li>
    </ul>


</aside>

<div class="content"> 
    <form> 
        <div>
            <label>Name</name>
            <input type="text" name="name">
        </div>
        <div>
            <label>Phone</name>
            <input type="number" name="phone">
        </div>
        <div>
            <label>Email</name>
            <input type="email" name="email">
        </div>
        <div>
            <label>Name</name>
            <input type="text" name="name">
        </div>
        <div>
            <label>Name</name>
            <input type="text" name="name">
        </div>

    </form>

</div>

</body>
</html>