<?php

if(isset($_POST['addstudent'])){
    
    $number = $_POST['number'];
    $query = "insert into students (S_no,Roll_no,Student_name,profileimg,Address,fatherno,phoneno,fname,mname) values";
    for($i=0;$i<$number;$i++){
        $query .= "('".$_POST['sno'][$i]."','".$_POST['rollno'][$i]."','".$_POST['studentname'][$i]."','user.png','Not available','Not available','Not available','Not available','Not available'),";
    }
    $s = rtrim($query,",");
    $insert = mysqli_query($con,$s);
    if($insert){
        echo "<script>alert('success')</script>";
    }else{
        echo"error";
    }
}
?>