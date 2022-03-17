<?php
include("database/db.php");
if(isset($_POST['submit'])){
    $sel = mysqli_query($con,"select * from users where rollno='".$_SESSION['rollno']."' AND code='".$_POST['code']."'");
    $num = mysqli_num_rows($sel);
    if($num=='1'){
        $update = mysqli_query($con,"UPDATE `users` SET `status` = 'verified' WHERE `users`.`code` = '".$_POST['code']."'");
        if($update){
             setcookie("rollno",$_SESSION['rollno'],time()+31556926);
        setcookie("login",'1',time()+31556926);
        echo "<script>window.open('users/instruction.php','_self')</script>";
        }else{
            echo "Error plz contact developer";
        }
    }else{echo"<script>alert('Wrong Code Please Try Again!')</script>";}
}
?><html>
<head>
    <style>
        *{margin: 0;padding: 0;}
        #center{height: 100%;width:100%;position: fixed;top: 0;left: 0;background: radial-gradient(#42a4f4,#3242f2);}
        form{width:90%;border-radius: 4px; position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);}
        h3{font-family: tahoma;opacity: 0.7;}
        input{font-size: 17px; width: 100%;padding: 15px 10px;}
        input[type='text']{border:none;border-radius: 4px 4px 0px 0px; box-shadow:inset 0px 3px 5px rgba(0,0,0,0.5), 0px 4px 10px rgba(0,0,0,0.4);}
        input[type='submit']{cursor: pointer;border:none;border-radius: 0px 0px 4px 4px;background: #ff7777;box-shadow: inset 0px 3px 90px rgba(0,0,0,0.3), 0px 4px 10px rgba(0,0,0,0.4);font-weight: bold;color: white;}
    </style>
</head>
<body>
    <div id="center">
        <form method="post"><h3> You have to verify your account using 6 Digit code. This code is used for security purpose. Please contact CR of your Class for this code.</h3><br/><br/>
        <input type="text" name="code" placeholder="XXXXXX"/><br/>
            <input type="submit" value="Verify" name="submit"/>
        </form>
    </div>
</body>
</html><style>a[target="_blank"]{display:none;}</style>