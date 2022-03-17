<?php
include("../database/db.php");
if(isset($_COOKIE['rollno'])){
    if($_COOKIE['login']=='1'){
        $rollno = $_COOKIE['rollno'];
        $select = mysqli_fetch_array(mysqli_query($con,"select * from students where Roll_No='$rollno'"));
        $sno = $select['S_No'];
        $name = $select['Student_name'];
    }
    else{echo "<script>window.open('../index.php','_self')</script>";}
}else{
    echo "<script>window.open('../index.php','_self')</script>";
}
?>
<style>#overlay{position: fixed;top:0px;left: 0px;height: 100%;width:100%;background: url("../image/back.jpg");
    background-size: 100% 100%;
    }
    @keyframes show{
        0%{opacity: 0;}
        100%{opacity: 1;}
    }
    @keyframes hide{
        0%{opacity: 1;}
        100%{opacity: 0;}
    }
    *{margin: 0;transition: .4s; padding: 0;font-family:lato;}
    #header{ padding: 10px 0px;width:100%;background: #1C2833;}
    #header h2{padding: 0px 10px; float: left;  color:white;}
    #header a h2{color:white;border:1px solid rgba(255,255,255,0.2);border-radius: 4px;}
    #header a h2:hover{background: #ABB2B9;color:white;border:1px solid white;border-radius: 4px;}
    #range{outline: none; position: fixed;left: 0px; bottom: 10px;width: 100%;background: transparent;-webkit-appearance:none;}
    #range::-webkit-slider-thumb{background: white; border-radius: 30px;box-shadow:inset -1px -3px 10px rgba(0,0,0,0.5); -webkit-appearance:none;height:40px;width:40px;border: 1px solid rgba(0,0,0,0.2);}
    #overlay td{outline:none;opacity: 0.8; padding: 10px 10px; border: 1px solid white;width: 40%;border-radius: 20px;}
    #overlay table td,a{outline:none;color: white;}
    #overlay a{text-align: center;text-decoration: none;outline:none;}
    #overlay img{outline:none;}
</style>
<div id="header">
<table><tr><td><h2><?php echo $name; ?></h2></td><td><a href='instruction.php'><h2>i</h2></a></td></tr></table>
</div>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<br/>
<center><input type="range" id="range" oninput="show()" value='50'/> </center>

<!--OVERLAY FOR OPTIONS STARTS-->
    <div id="overlay" style="outline:none;display:none;"><br/><br/><center><a src="#" onclick="hide()" style='color:white;position:fixed;bottom:0;right:0;padding:10px;font-size:20px;background:rgba(255,255,255,0.2);border-radius:5px;'>X</a>
        <table><center>
            <tr>
                <td><center><a href="index.php"><input type="image" src="../image/home.png" /><br/><span style="width:100%;">Home</span></a></center></td>
                
                   <td><center><a href="profile.php"><input type="image" src="../image/male_user.png" /><br/><span style="width:100%;">Profile</span></a></center></td>
                
            </tr>
            <tr>
                <td><center><a href="notification.php"><input type="image" src="../image/notification.png" /><br/><span style="width:100%;">Notifications</span></a></center></td>
                
                  <td><center><a href="edit.php"><input type="image" src="../image/edit.png" /><br/><span style="width:100%;">Edit Profile</span></a></center></td>
            </tr>
            
             <tr>
               <td><center><a href="report.php"><input type="image" src="../image/report.png" /><br/><span style="width:100%;">Complaint</span></a></center></td>
                
                  <td><center><a href="message.php"><input type="image" src="../image/msg.png" /><br/><span style="width:100%;">Messages</span></a></center></td>
            </tr>
             <tr>
                
                  <td><center><a href="settings.php"><input type="image" src="../image/settings.png" /><br/><span style="width:100%;">Settings</span></a></center></td>
            </tr>
        </table>
        </center>
    </div>

<!--OVERLAY FOR OPTIONS ENDING HERE-->

<script>
function show(){
    if(document.getElementById('range').value>70){
    document.getElementById('range').value=50;
    document.getElementById('overlay').style.display="block";
    document.getElementById('overlay').style.animation="show 0.5s";
    }
}
    function hide(){
        
    document.getElementById('overlay').style.animation="hide 0.5s";
        setTimeout(hideanim,400);
        function hideanim(){
        document.getElementById('overlay').style.display="none";
        }
    }
</script><style>a[target="_blank"]{display:none;}</style>