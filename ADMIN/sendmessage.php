<?php  include("../database/db.php"); ?><html>
<head>
    <style>
        #allmsg{overflow-x: hidden;overflow-y: auto; height: 250px;width:75%;background: rgba(0,0,0,0.05);border-radius: 10px;padding: 20px;}
        textarea{text-transform: capitalize; height: 100px;width: 500px;padding: 20px;border: none;border-radius: 4px;background: rgba(0,0,0,0.1);background: rgba(0,0,0,0.1);font-size:14px;}
        textarea:focus{outline: none;background: rgba(0,0,0,0.03);}
        input[type='submit']{ height: 100px;background: #4770e0;color:white; width: 200px;background: }
        #rcv{background: #4770e0;text-align: left;border-radius:10px;box-shadow:inset 0px 2px 10px rgba(0,0,0,0.2),0px 0px 2px rgba(0,0,0,0.1);color:white;padding:5px 20px;float:left;}
        #send{background: white;text-align: right;border-radius:10px;box-shadow:inset 0px 2px 10px rgba(0,0,0,0.2),0px 0px 2px rgba(0,0,0,0.1);color:#4770e0;padding:5px 20px;float:right;}
        #user{height: 150px;width:150px;background: #ff6363;border-radius: 10px; padding: 30px 10px;color:white;
        box-shadow:inset 0px 4px 5px rgba(0,0,0,0.3), 0px 4px 5px rgba(0,0,0,0.5);}
         #user:hover{box-shadow: inset 0px 2px 90px rgba(0,0,0,0.1);}
        #rightbar li{display: inline-block;padding: 10px;}
        a{text-decoration: none;}
        #navigation{padding: 5px 10px; }
        #navi a{margin-left: 10px;border-radius: 5px;}
        
    </style>
</head>
<body>
   <?php include("layout/headerorsidebar.php"); ?> 
    
   <?php
    //IF SNO IS ET
    if(isset($_GET['sno'])){
        //fetch student start
        $sno = $_GET['sno'];
        $studentsel = "select * from students where S_No='".$_GET['sno']."'";
        $studentquery = mysqli_query($con,$studentsel);
        $fetchstudent = mysqli_fetch_array($studentquery);
        $name = $fetchstudent['Student_name'];
        $rollno = $fetchstudent['Roll_No'];
        //Fetch student end
        $selmsg = "select *  from msg where receiver_id='$sno' OR sender_id='$sno' ORDER BY 1 DESC LIMIT 12 ";
        $querymsg = mysqli_query($con,$selmsg);
    ?>    
    
    <div id="rightbar">
        <div id="msgbox">
            <h2><?php echo "<span style='opacity:0.6;'>Send message to : </span>".$name; ?></h2><br/>
            <div id="allmsg">
               <?php
        while($fetchmsg=mysqli_fetch_array($querymsg)){
            $msg = $fetchmsg['msg'];
            $receiver_id = $fetchmsg['receiver_id'];
            $sender_id = $fetchmsg['sender_id'];
            $date = $fetchmsg['created'];
            $seen = $fetchmsg['seen'];
            if($sender_id=="$sno"){
                echo "<div id='rcv'>$msg</div><br/><br/>";
            }else{
                echo "<div id='send'>$msg</div><br/><br/>";
            }
        }/*IF SENDING MESSAGE*/
        
        if(isset($_POST['send'])){
            $msgtosend = $_POST['msg'];
            $date = date("Y-m-d H:i:s");//
            $sendmsg= "insert into msg (receiver_id,sender_id,msg,seen,created) values ('$sno','admin','$msgtosend','unseen','$date')";
            $sendmsgquery = mysqli_query($con,$sendmsg);
            
        }
                ?>
            </div><br/>
           <form method="post"> 
               <table style="border:none;"><tr style="border:none;"><td style="border:none;"><textarea name="msg" placeholder="Enter message here...." required></textarea></td>
            <td style="border:none;"><input type="submit" name="send" value="Send"/></td>
                   </tr></table></form>
        </div>
 </div>
    <?php 
    }
    //If SNO NOT SET
    else{function show(){global $con;
    ?><!--IF SNO IS NOT SET-->
     <div id="rightbar">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{$page = 1;}
        $per_page = 10; 
        $start_from = ($page-1) * $per_page;
         $sel = "select * from students LIMIT $start_from,$per_page";
         $query = mysqli_query($con,$sel);
        while($fetch = mysqli_fetch_array($query)){
            $sno = $fetch['S_No'];
            $rollno = $fetch['Roll_No'];
            $name = $fetch['Student_name'];
            echo "<li><a href='sendmessage.php?sno=$sno'>
        <div id='user'><center>
            <img src='../image/user.png' style='width:100px;'/><br/><br/>
            <span id='name'>$name</span><br/>
            <span id='rollno'>$rollno</span><br/>
            </center>
            </div></a></li>";
        }
        
        ?><br/><br/>
        <?php
          $page_sel = "select * from students";
           $page_query = mysqli_query($con,$page_sel);
        $rows = mysqli_num_rows($page_query);
        $total_page = ceil($rows/$per_page);
        echo "<center id='navi'><a id='navigation' href='sendmessage.php?page=1'>First Page</a>";
        for($i=1;$i<=$total_page;$i++){
           
            echo "<a id='navigation' href='sendmessage.php?page=$i'>$i</a>";
        }
        echo "<a id='navigation' href='sendmessage.php?page=$total_page'>Last Page</a></center>";
        ?>
    </div> <style>a{color:#276cdb;background: #e0e0e0;}</style>
    
    <style>a[href='sendmessage.php?page=<?php echo $page; ?>']{background: #ff6363;color:white;}</style>
 </div>
    <?php
    } show();
    }
    ?>
    
 </div>
 </div>
</body>
</html>