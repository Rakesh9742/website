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

if(isset($_POST['add_student']))
{
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_password=$_POST['password'];
    $usertype="student";



    $check="SELECT * FROM user WHERE username='$username'";
    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1)
    {
        echo "<script type='text/javascript'>
        alert('Username Exist.Try another one');
        </script>";
    }

    else
    {

    
    



    $sql="INSERT INTO user(username,email,phone,usertype,password) VALUES('$username','$user_email','$user_phone','$usertype','$user_password')";
        $result=mysqli_query($data,$sql);
    
    if($result)
    {
        echo "<script type='text/javascript'>
    alert('Student added');
    </script>";
    }
    else{
        echo"upolad faield";
    }
}

}






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin  dashboard</title>
    <style type="text/css">
        label
        {
            display:inline-block;
            text-align:right;
            width: 100px;
            padding-top :10px;
            padding-bottom:10px;

        }
        .div_deg{
            background-color:gold;
            width: 400px;
            height: 250px;
            padding-top :10px;
            padding-bottom:10px;
        }
    </style>
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
            <a href="view_student.php">viwe student</a>
        </li>
        <!-- <li>
            <a href="">view teacher</a>
        </li>
        <li>
            <a href="">Add course</a>
        </li>
        <li>
            <a href="">viwe course</a>
        </li> -->
    </ul>


</aside>

<div class="content">
    <h1>    Student information</h1>
    <div class="div_deg">
        <form action="#" method="POST">
            <div>
                <label>username</label>
                <input type="text" name="name">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label>Phone</label>
                <input type="number" name="phone">
            </div>
            <div>
                <label>password</label>
                <input type="text" name="password">
                <div>
                <!-- <label>Date of Birth</label> -->
                <!-- <input type="varchar" name="Date of Birth"> -->
            </div>
            </div>
            <div>
                <center>
                <input type="submit" class="btn btn-primary" name="add_student" value="Add student">
    </center>
            </div>
        </form>
    </div>
</div>
</body>
</html>
