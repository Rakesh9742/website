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
$host="localhost";
$user="root";
$password="";
$db="student";
$data=mysqli_connect($host,$user,$password,$db);
$sql="SELECT * from admission";
$result=mysqli_query($data,$sql);



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
        <!-- <li> -->
            <!-- <a href="">Add teacher</a> -->
        <!-- </li> -->
        <!-- <li> -->
            <!-- <a href="">Add course</a> -->
        <!-- </li> -->
        <!-- <li> -->
            <!-- <a href="">viwe course</a> -->
        <!-- </li> -->
    </ul>


</aside>

<div class="content">
    <center>
    <h1>Applyed for Adimission</h1>
    <br><br>
    <table border="2px">
        <tr>
            <th style="padding:20px; font-size:15px;">Name</th>
            <th style="padding:20px; font-size:15px;">Email</th>
            <th style="padding:20px; font-size:15px;">Mobile</th>
            <th style="padding:20px; font-size:15px;">course</th>
        </tr>

        <?php 
        while($info=$result->fetch_assoc())
        {
        
        ?>
        <tr>
            <td style="padding:20px; font-size:15px;">
            <?php echo"{$info['name']}"; ?>
        </td>
            <td style="padding:20px; font-size:15px;">
            <?php echo"{$info['email']}"; ?>
        
        </td>
            <td style="padding:20px; font-size:15px;"> 
            <?php echo"{$info['mobile']}"; ?> 
        </td>
            <td style="padding:20px; font-size:15px;">
            <?php echo"{$info['course']}"; ?>
        </td>
        </tr>
        <?php
        }
        ?>

    </table>
    </center>
</div>
</body>
</html>