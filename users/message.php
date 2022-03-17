<?php

include("include.php");
$selmsg = mysqli_query($con,"select *  from msg where receiver_id='$sno' OR sender_id='$sno' ORDER BY ID desc LIMIT 8 ");
         if(isset($_POST['send'])){
             $sendmsg = $_POST['msg'];
             $datecreated = date("Y-m-d");
             $insert = mysqli_query($con,"insert into msg (receiver_id,sender_id,msg,seen,created) values ('admin','$sno','$sendmsg','unseen','$datecreated')");
             if($insert){
                 echo "<script>window.open('message.php','_self')</script>";
             }
         }
?>
<style>
    #msgbox{height: 60%; width:90%;overflow-x: hidden;overflow-y: auto;}
    #me{float: right;padding:5px 10px ;background:#0090ff;border-radius:20px;color:white;box-shadow:inset -2px -2px 5px rgba(0,0,0,0.5);}
    #another{float: left;padding:5px 10px ;background:white;border-radius:20px;color:black;box-shadow:inset -2px -2px 5px rgba(0,0,0,0.5);}
    #msg{outline:none;box-shadow:inset -2px -2px 5px rgba(0,0,0,0.04),inset 2px 2px 5px rgba(0,0,0,0.04);width:100%;height: 34px;font-size: 20px;padding: 4px 10px ;border-radius:3px; border:1px solid rgba(0,0,0,0.4);}
    #send{outline:none;box-shadow:inset -2px -2px 5px rgba(0,0,0,0.1),inset 2px 2px 5px rgba(0,0,0,0.1);height: 34px;  font-size: 20px;padding: 4px 10px ;  border:none;border-radius:3px;color:white;background:#41a5f2;}
    #tb{width:100%;}
    #tb tr{width:100%;}
    #msginput{width:80%;}
    #sendinput{width:20%;}
    #rcv{background: #4770e0;text-align: left;border-radius:10px;box-shadow:inset 0px 2px 10px rgba(0,0,0,0.2),0px 0px 2px rgba(0,0,0,0.1);color:white;padding:5px 20px;float:left;}
        #sendx{background: white;text-align: right;border-radius:10px;box-shadow:inset 0px 2px 10px rgba(0,0,0,0.2),0px 0px 2px rgba(0,0,0,0.1);color:#4770e0;padding:5px 20px;float:right;}
</style>
<div id="scr" style="padding:5px;">
<div id="msgbox">
    <?php
    while($fetchmsg = mysqli_fetch_array($selmsg)){
        $sender_id = $fetchmsg['sender_id'];
        $receiver_id = $fetchmsg['receiver_id'];
        $msg = $fetchmsg['msg'];
        if($sender_id==$sno){
            echo "<div id='sendx'>$msg</div><br/><br/>";
        }
        else{echo "<div id='rcv'>$msg</div><br/><br/>";}
    }
    
    ?>
    </div>
    <div id="controls">
    <form method="post"><table id="tb">
        
        <tr><td id="msginput"><input type="text" id="msg" name="msg" placeholder="Message..." required/></td>
           <td id="sendinput"> <input type="submit" id="send" value="Send" name="send" /></td>
        </tr></table>
        </form>
    </div>
</div>