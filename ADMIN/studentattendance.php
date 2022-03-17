<?php 
include("../database/db.php");
include("../include/show_students.php");

?>
<html>
<head>
    
    <style>
        input[type='submit']{padding:6px 14px ;border: none;background: #ff5e5e;color: white;box-shadow: 0px 2px 5px rgba(0,0,0,0.5);cursor: pointer;}
        input[type='submit']:hover{background: #ff3030;color: white;box-shadow: 0px 2px 5px rgba(0,0,0,0.5);cursor: pointer;}
    </style>
</head>
<body>
   <?php include("layout/headerorsidebar.php"); ?> 
    
    <div id="rightbar">
        <!--CONDITIONAL ATTENDANCE-->
        <h2>Attendace according to conditions.</h2><br/>
         <form id="acc" method="post">
            
             <table style="border:none;"><tr style="border:none;">
                 <td style="border:none;"><select name="rollno">
                     <option value="all">All Students</option>
             <?php rollnooption(); ?>
                 </select></td>
                 <td style="border:none;"><input type="date" placholder="Date" name="date"/>
                 </td> 
                 <td style="border:none;"><input type="Submit" value="Submit" name="submit"/>
                 </td>
                 </tr>
                 </table>
        </form>
         <?php if(isset($_POST['submit'])){show_student();} ?>
        <br/><Br/>
       
        <!--OTHER PORTION OF CODE-->
       <h2 style="color:black;">Student's Attendance</h2>
        <table><tr><td>S.No</td><td>Name</td><td>Lecture attended</td><td>Total Lecture</td><td>Attendance percentage</td></tr>
        <?php 
        
        $sel = mysqli_query($con,"select * from students ");
        while($fetch = mysqli_fetch_array($sel)){
            
            $sno = $fetch['S_No'];
            $QFTL = mysqli_query($con,"select * from total");
            $fetcht = mysqli_fetch_array($QFTL);
            $count = $fetcht['total'];
            if($count==''){$count='0';}
            $attendance = mysqli_query($con,"SELECT SUM(lecture) AS lec FROM attendance where sno='$sno'");
            $sum = mysqli_fetch_array($attendance);
            $lec = $sum['lec'];
            $name = $fetch['Student_name'];
            if($count=='0'){}
            else{$per = $lec/$count*100;
            $percent = substr($per, 0, 5);}
            echo  "<tr><td>$sno</td><td>$name</td><td>$lec</td><td>$count</td><td>$percent %</td></tr></table";
        }
        
        ?></p>
  </div>
 </div>
 </div><br/><Br/>
</body>
</html>