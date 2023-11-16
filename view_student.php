<?php

error_reporting(0);
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


$sql="SELECT * from user WHERE  usertype='student' ";
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

<style type="text/css">

    .table_td
    {
        padding:20px;
        background-color:skyblue;
    }
    .content
    {
        padding-left:20px;
        font-size:20px;
        color:bold;
    }
 
 
</style>

</head>
<body>

<header class="header">
    <a href="admin.php" style ="color:#241625;">Admin dashboard</a>

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
        <!-- <li>
            <a href="">Add teacher</a>
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

    <h1 style="padding:10px; font-size:50px";>Student Details</h1>

    <?php 
    if($_SESSION['message'])
    {
        echo  $_SESSION['message'];
    }

    unset( $_SESSION['message']);
    
    
    ?>


    <table border="2px">
        <tr>
            <th style="padding:20px; font-size:15px; background-color: rgb(250, 224, 243)";>UserName</th>
            <th style="padding:20px; font-size:15px; background-color: rgb(250, 224, 243)";>Phone</th>
            <th style="padding:20px; font-size:15px; background-color: rgb(250, 224, 243)";>Email</th>
            <th style="padding:20px; font-size:15px; background-color: rgb(250, 224, 243)";>Password</th>
            <th style="padding:20px; font-size:15px; background-color: rgb(250, 224, 243)";>Delete</th>
            <th style="padding:20px; font-size:15px; background-color: rgb(250, 224, 243)";>Update</th>
        </tr>

        <?php 
        while($info=$result->fetch_assoc())
        {
        
        
        
        ?>

        <tr>
            <td class="table_td">
                <?php echo "{$info['username']}"; ?>
            </td>
            <td class="table_td">
            <?php echo "{$info['phone']}"; ?>
            </td>
            <td class="table_td">
            <?php echo "{$info['email']}"; ?>
            </td>
            <td class="table_td">
            <?php echo "{$info['password']}"; ?>
            </td>
            <td class="table_td">
            <?php echo "<a class='btn btn-danger' onclick=\"javascript:return confirm('Are you sure to Delete This');\"
            href ='delete.php?student_Id={$info['Id']}'>Delete </a>";  ?>
            </td>
            <td class="table_td">
            <?php echo "<a class='btn btn-primary' href='update_student.php?student_Id={$info['Id']}'> Update</a>"; ?>
            </td>
        </tr>
        <?php 
        }
        
        ?>
    </table>
</div>
</body>
</html>