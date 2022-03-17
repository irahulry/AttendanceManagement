<?php
include("../database/db.php");
$id=$_GET['remove'];
$select = "DELETE FROM students WHERE id='$id' ";
$execute = mysqli_query($con,$select);
if($execute){
    
    echo "<script>open('../admin/removestudents.php','_self');</script>";
}

?>