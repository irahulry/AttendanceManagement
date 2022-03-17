<?php

include("../database/db.php");
if(isset($_POST['submit'])){
    
    $number = $_POST['record'];
    $query = "insert into attendance (sno,lecture,date) values";
    
    $selstu = mysqli_query($con,"select * from students");
    while($fetch=mysqli_fetch_array($selstu)){
        $sno = $fetch['S_No'];
    for($i=0;$i<$number;$i++){
        $lecture = $_POST["$sno-"][$i];
        $query .= "('".$sno."','".$lecture."','".$_POST['date'][$i]."'),";
    }
        }
    $s = rtrim($query,",");
    $insert = mysqli_query($con,$s);
    if($insert){
        echo "success";
    }else{
        echo"error";
    }
}


?>