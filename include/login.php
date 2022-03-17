<?php
include("./database/db.php");
//WHEN ADMIN LOGIN
if(isset($_POST['adminlogin'])){
    $username1 = $_POST['username1'];
    $password1 = $_POST['password1'];
    
    $query = "SELECT * FROM admin WHERE username='$username1' AND password='$password1'";
    $execute = mysqli_query($con,$query);
    $check = mysqli_num_rows($execute);
    if($check==1){
        echo"<script>open('./admin','_self')</script>";
    }else{
                echo"<script>alert('Wrong Password! Please try again later.');</script>";

    }
}
//ADMIN LOGIN ENDS

//STUDENT LOGIN STARTS
if(isset($_POST['studentlogin'])){
   $username2 = $_POST['username2'];
    $password2 = $_POST['password2'];
    
    $query = "SELECT * FROM student WHERE username='$username2' AND password='$password2'";
    $execute = mysqli_query($con,$query);
    $check = mysqli_num_rows($execute);
    if($check==1){
        echo"<script>open('./student','_self')</script>";
    }else{
                echo"<script>alert('Wrong Password! Please try again later.');</script>";

    }
}
//STUDENT LOGIN ENDS
?>