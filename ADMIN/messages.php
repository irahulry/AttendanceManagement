<?php  include("../database/db.php"); ?><html>
<head>
    <style>
        #chats{width: 60%; background: rgba(0,0,0,.2);border-radius: 5px;padding: 15px;}
        #chats img{width: 100px;height:100px;}
        #chats span{position: absolute;margin-top: 35px;margin-left: 20px;}
        #chats b{font-family: arial;font-weight: bold;}
        #chata{color:black;}
    </style>
</head>
<body>
   <?php include("layout/headerorsidebar.php"); ?> 
    
   
    <div id="rightbar"><h2>OUTPUT: </h2>
        <?php
        
        $select = "SELECT DISTINCT sender_id,receiver_id FROM `msg` ORDER BY created DESC";
        $query = mysqli_query($con,$select);
        while($fetch = mysqli_fetch_array($query)){
            echo $receiver_id = $fetch['receiver_id'].'<br/>';
           $selmsg = mysqli_query($con,"select * from msg where receiver_id='$receiver_id'  OR sender_id='$receiver_id' ORDER BY id DESC LIMIT 1");
            $fetchmsg = mysqli_fetch_array($selmsg);
            echo $msg = $fetchmsg['msg'];
            if($receiver_id=='admin'){}
            else{
                $selstu = mysqli_query($con,"select * from students where S_No='$receiver_id'");
                $fetchstu = mysqli_fetch_array($selstu);
                $name = $fetchstu['Student_name'];
                
                echo "<a href='sendmessage.php?sno=$receiver_id' id='chata'><div id='chats'>
            <img src='../image/user.png'/><span><b>$name : </b> $msg</span>
        </div></a><br/>";
            }
        }
         /*
        */
        ?>
        
        
 </div>
 </div>
</body>
</html>