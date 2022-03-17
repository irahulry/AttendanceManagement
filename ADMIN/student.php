<?php  include("../database/db.php"); ?><html>
<head>
    <style>
        #user{height: 150px;width:150px;background: #ff6363;border-radius: 10px; padding: 30px 10px;color:white;
        box-shadow:inset 0px 4px 5px rgba(0,0,0,0.3), 0px 4px 5px rgba(0,0,0,0.5);}
         #user:hover{box-shadow: inset 0px 2px 90px rgba(0,0,0,0.1);}
        #rightbar li{display: inline-block;padding: 10px;}
        a{text-decoration: none;}
        #navigation{padding: 5px 10px; }
        #navi a{margin-left: 10px;border-radius: 5px;}
        #halfleft,#halfright{height:20%;box-shadow: 0px 2px 5px 2px rgba(0,0,0,0.2);border-radius: 5px; width:35%;padding: 30px 0px; background: #4770e0;color:white;}
        #halfleft{float:left;margin-left: 10%;}
        #halfleft img{box-shadow: 0px 0px 20px rgba(0,0,0,0.2);border-radius: 100%;}
        #halfright{float:right;margin-right: 17%;}
        #msg{
            background: white;border: none;border-radius: 4px;padding: 5px 30px;font-size: 15px;
            box-shadow: inset 0px 2px 2px 2px rgba(0,0,0,0.2),0px 0px 5px rgba(0,0,0,0.4);
        }#msg:hover{box-shadow: inset 0px 2px 20px rgba(0,0,0,0.7),0px 0px 5px rgba(0,0,0,0.4);}
        #pinfo{text-shadow: 0px 0px 1px rgba(0,0,0,0.5); background:  #ff6363;padding: 10px 10px; width:90%;border-radius: 5px;color:white;font-size: 18px;}
    </style>
</head>
<body>
   <?php include("layout/headerorsidebar.php"); ?> 
    
   
    <div id="rightbar">
        <?php 
            if(isset($_GET['sno'])){
                $sel="select * from students where S_No='".$_GET['sno']."'";
                $query = mysqli_query($con,$sel);
                $fetch = mysqli_fetch_array($query);
                $rollno = $fetch['Roll_No'];
                $name = $fetch['Student_name'];
                $img = $fetch['profileimg'];
                $address = $fetch['Address'];
                $fatherno = $fetch["fatherno"];
                $phoneno = $fetch["phoneno"];
                if($address==""){$address="Not available";}
                if($fatherno==""){$fatherno="Not available";}
                if($phoneno==""){$phoneno="Not available";}
                
            }
        else{
            echo "<script>open('studentinfo.php','_self')</script>";
        }
        ?><h2>Student Information</h2><br/><br/>
        <div id="info">
       <div id="halfleft" style="cursor:pointer;"><center><img src="../image/user.png" width="100px"/><br/>
           <li style="color:white;text-shadow:0px 0px 1px black;font-size:19px;"><?php echo $name; ?></li>
           </center>
           </div><!--HALF LEFT ENDS
 RIGHT HALF STARTS-->
            <div id="halfright"><center>
                <form method="post"><p>Contact <?php echo $name; ?></p><br/>
                    <a href="sendmessage.php?sno=<?php echo $_GET['sno']; ?>"><input style="cursor:pointer;" id="msg" type="button" value="Send Message"/></a><br/><br/>
                    <p><?php echo $phoneno; ?></p>
                </form>
                </center>
            </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <div id="pinfo">
                <span><b>Name: &nbsp;&nbsp; </b><?php echo $name; ?></span><br/><br/>
                <span><b>Roll No: &nbsp;&nbsp; </b><?php echo $rollno; ?></span><br/><br/>
                <span><b>Address: &nbsp;&nbsp; </b><?php echo $address; ?></span><br/><br/>
                <span><b>Father's Phone no: &nbsp;&nbsp; </b><?php echo $fatherno; ?></span><br/><br/>
                <span><b>ATTENDANCE PERCENTAGE: &nbsp;&nbsp; </b><?php 
                    
            $QFTL = mysqli_query($con,"select * from total");
            $fetcht = mysqli_fetch_array($QFTL);
            $count = $fetcht['total'];
            if($count==''){$count='0';}
            $attendance = mysqli_query($con,"SELECT SUM(lecture) AS lec FROM attendance where sno=".$_GET['sno']."");
            $sum = mysqli_fetch_array($attendance);
            $lec = $sum['lec'];
            $name = $fetch['Student_name'];
            if($count=='0'){}
            else{
            $per = $lec/$count*100;
            $percent = substr($per, 0, 5);
            }
                    echo "$percent%";
                    ?></span><br/><br/>
            </div>
        
    </div> 
 </div>
 </div>
</body>
</html>