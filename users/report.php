<?php

include("include.php");

if(isset($_POST['submit'])){
    $subject = $_POST['sub'];
    $complaint = $_POST['complaint'];
    $insert = mysqli_query($con,"insert into complaint (id,rollno,name,subject,complaint,seen) values ('NULL','$rollno','$name','$subject','$complaint','unseen')");
    if($insert){
        
        echo "<center><div id='alert' style='padding:10px ;color:white;background:#10ed4f;border-radius:10px;border:none;font-size:15px;'>Thanks For reporting.The report is sent to the Head Of Department. After Some time your problem will be solved.</div><br/></center>";
    }else{
        echo "<center><div id='alert' style='padding:10px ;color:white;background:#ff5959;border-radius:10px;border:none;font-size:15px;'>Error while reporting Plz Contact the developer.</div><br/></center>";
    }
}
?>
<style>
    #alert{width:80%;box-shadow: 0px 2px 3px rgba(0,0,0,0.5),inset 0px 0px 90px rgba(0,0,0,0.2);}
    input[type="text"],textarea{box-shadow:0px 2px 5px rgba(0,0,0,0.4),inset -2px -2px 10px rgba(0,0,0,0.1);outline: none; width:80%;background: rgba(0,0,0,0.2);border: none;border-radius: 5px;padding: 10px 10px;font-size: 17px;
    }
    textarea{height: 200px;}
    
    input[type="submit"]{box-shadow:0px 2px 5px rgba(0,0,0,0.4),inset 0px 2px 20px rgba(0,0,0,0.3);font-size: 18px;padding: 10px 0px ;width:80%;border: none;border-radius: 5px;color: white; background: #ff5151;}
    input[type="submit"]:hover{}

</style>
<div style="padding:5px;" id="scr">

<form method="post"><h2>Submit Your Report.</h2>
    <br/>
    <input type="text" name="sub" placeholder="Complaint Against"/><br/><br/>
    <textarea name="complaint" placeholder="Complaint"></textarea>
    <br/><br/>
    <input type="submit" name="submit" value="Submit"/><br/><br/><br/>
    </form>
</div>