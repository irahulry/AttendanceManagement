<?php

include("include.php");
if(isset($_POST['submit'])){
    $currentpass = md5($_POST['oldpass']);
    $newpass1 = $_POST['newpass1'];
    $newpass2 = $_POST['newpass2'];
    
    $selectpass= mysqli_fetch_array(mysqli_query($con,"select * from users where rollno='$rollno'"))['password'];
    if($selectpass==$currentpass){
        if($newpass1==$newpass2){
            $pass = md5($newpass1);
            $update=mysqli_query($con,"UPDATE `users` SET `password` = '$pass' WHERE `users`.`rollno` = $rollno;");
            if($update){
                echo "<center><div id='alert' style='padding:10px ;color:white;background:#10ed4f;border-radius:10px;border:none;font-size:15px;'>Your Password has been changed</div><br/></center>";
            }else{
                echo "<center><div id='alert' style='padding:10px ;color:white;background:#10ed4f;border-radius:10px;border:none;font-size:15px;'>Error while changing password plz contact developer</div><br/></center>";
            }
        }else{
              echo "<center><div id='alert' style='padding:10px ;color:white;background:#ff5959;border-radius:10px;border:none;font-size:15px;'>Your New Password Doesn't Match.</div><br/></center>";
        }
       
    }else{
         echo "<center><div id='alert' style='padding:10px ;color:white;background:#ff5959;border-radius:10px;border:none;font-size:15px;'>Wrong Paswword</div><br/></center>";
    }
}
?>
<style>
     #alert{width:80%;box-shadow: 0px 2px 3px rgba(0,0,0,0.5),inset 0px 0px 90px rgba(0,0,0,0.2);}
    #scr{padding: 10px;}
    input[type='password']{padding: 10px ;width: 80%;background: rgba(0,0,0,0.2);border: none;border-radius: 5px;}
    input[type="submit"]{box-shadow:0px 2px 5px rgba(0,0,0,0.4),inset 0px 2px 20px rgba(0,0,0,0.3);font-size: 18px;padding: 10px 0px ;width:80%;border: none;border-radius: 5px;color: white; background: #ff5151;}
    input[type="submit"]:hover{}
</style>
<div id="scr">
<h1>Change Password</h1>

<form method="post">
<br/>
<input type="password" name="oldpass" placeholder="Enter Current password..." required/><br/><br/>
<input type="password" name="newpass1" placeholder="Enter New password..." required/><br/><br/>
<input type="password" name="newpass2" placeholder="Enter Again password..." required/><br/><br/>
    <input type="submit" name="submit" Value="Change Password"/>
</form>
    
    </div>