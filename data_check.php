<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="student";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");

}
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $course=$_POST['course'];

    $sql="INSERT INTO admission(name,email,mobile,course) VALUES('$name','$email','$mobile','$course')";
    $result=mysqli_query($data,$sql);
    if($result)
    {
        $_SESSION['message']="your application sent successful";
        header("location:contact.php");

    }
    else
    {
        echo "Submission failed";
    }
}




?>