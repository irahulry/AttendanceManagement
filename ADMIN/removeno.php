<?php

include("../database/db.php");
if(isset($_GET['id'])){
    $delete = mysqli_query($con,"DELETE FROM notification where id='".$_GET['id']."'");
    if($delete){
        echo "<script>window.open('notification.php','_self')</script>";
    }
}
?>