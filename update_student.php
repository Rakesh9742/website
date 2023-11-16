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

$Id=$_GET['student_Id'];
$sql="SELECT * FROM user WHERE Id='$Id' ";

$result=mysqli_query($data,$sql);
$info=$result->fetch_assoc();



if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="UPDATE user SET username='$name', phone='$phone', email='$email', password='$password' WHERE Id='$Id' ";

    $result2=mysqli_query($data,$query);
    if($result2)
    {
        header("location:view_student.php");
    }

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
        label
        {
            display:inline-block;
            text-align:right;
            width: 100px;
            padding-top :10px;
            padding-bottom:10px;

        }
        .div_deg{
            background-color:skyblue;
            width: 450px;
            height: 300px;
            padding-top :10px;
            padding-bottom:10px;
        }
    </style>
 
 
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

    <h1 style="padding:10px; font-size:20px";>Update student Details</h1>
    <div class="div_deg">
        <form action="#" method="POST">
            
            <div>
                <label>UserName</label>
                <input type="text" name="name"
                value="<?php echo "{$info['username']}"; ?>"
                >
            </div>
            <div>
                <label>Phone</label>
                <input type="number" name="phone" 
                value="<?php echo "{$info['phone']}"; ?>"
                >
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email"
                value="<?php echo "{$info['email']}"; ?>"
                >
            </div>
            <div>
                <label>Password</label>
                <input type="text" name="password"
                value="<?php echo "{$info['password']}"; ?>"
                >
            </div>
            <div>
                <center>
                <input type="submit" class="btn btn-success" name="update" value="Update">
    </center>
            </div>
            
        </form>
    </div>

</div>
</body>
</html>