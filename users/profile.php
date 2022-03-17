<?php
include("include.php");

$lecture = mysqli_fetch_array(mysqli_query($con,"select SUM(lecture) AS lecture from attendance where sno='$sno'"))['lecture'];
$totallecture = mysqli_fetch_array(mysqli_query($con,"select * from total"))['total'];
$percentfull = $lecture/$totallecture*100;
$percent = rtrim(substr($percentfull,0,3),'.');
?>
<style>
    #screen{padding: 10px;}
    #table td{border: 1px solid rgba(0,0,0,0.4);padding: 10px;border-radius: 4px;}
</style>
<div id="screen">
    <h2>My profile</h2>
    <br/>
    <table id="table">
   
         <tr><td><h3>Name: </h3></td><td><h3><?php echo $name; ?></h3></td></tr>
         <tr><td><h3>Roll No: </h3></td><td><h3><?php echo $rollno; ?></h3></td></tr>
         <tr><td><h3>Serial No: </h3></td><td><h3><?php echo $sno; ?></h3></td></tr>
         <tr><td><h3>Lecture Attend: </h3></td><td><h3><?php echo $lecture."/".$totallecture; ?></h3></td></tr>
         <tr><td><h3>Father's Name: </h3></td><td><h3><?php echo $select['fname']; ?></h3></td></tr>
         <tr><td><h3>Mother's Name: </h3></td><td><h3><?php echo $select['mname']; ?></h3></td></tr>
    </table>
</div>