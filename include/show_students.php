<?php

function rollnooption(){
    global $con;
    $getroll = mysqli_query($con,"select * from students");
    
    while($fetchroll=mysqli_fetch_array($getroll)){
        $roll = $fetchroll['Roll_No'];
    echo "<option value='".$roll."'>".$roll."</option>";
        
    }
}

function show_student(){
    echo "<table><tr><td>S.No</td><td>Roll.No</td><td>Lecture of ".$_POST['date']."</td></tr>";
   global $con;
    $getroll = mysqli_query($con,"select * from students");
    if($_POST['rollno']=='all'){
    $getroll = mysqli_query($con,"select * from students");
    while($fetchroll=mysqli_fetch_array($getroll)){
        $roll = $fetchroll['Roll_No'];
        $sno = $fetchroll['S_No'];
        $date = $_POST['date'];
        $attendancequery = mysqli_query($con,"select * from attendance where sno='$sno' AND date='$date'");
        $lecturequery = mysqli_fetch_array($attendancequery);
        $lecture = $lecturequery['lecture'];
       
    echo "<tr><td style='width:auto;border:1px solid black;'>$sno</td><td style='width:auto;border:1px solid black;'>$roll</td><td style='width:auto;border:1px solid black;'>$lecture</td></tr>";
        
    }
    }else{
        $getstu = mysqli_query($con,"select * from students where Roll_No=".$_POST['rollno']."");
    while($fetchstu=mysqli_fetch_array($getstu)){
        $rollstu = $fetchstu['Roll_No'];
        $snostu = $fetchstu['S_No'];
        $datestu = $_POST['date'];
        $attendancequerystu = mysqli_query($con,"select * from attendance where sno='$snostu' AND date='$datestu'");
        $lecturequerystu = mysqli_fetch_array($attendancequerystu);
        $lecturestu = $lecturequerystu['lecture'];
       
    echo "<tr><td style='width:auto;border:1px solid black;'>$snostu</td><td style='width:auto;border:1px solid black;'>$rollstu</td><td style='width:auto;border:1px solid black;'>$lecturestu</td></tr>";
        
    }
        
    }
    echo "</table>";
    
}

?>