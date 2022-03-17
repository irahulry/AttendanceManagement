<?php
include("include.php");
if(isset($_POST['submit'])){
    $address = $_POST['address'];
    $fpno = $_POST['fpno'];
    $pno = $_POST['pno'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $update = mysqli_query($con,"UPDATE `students` SET Address='$address',fatherno='$fpno',phoneno='$pno',fname='$fname',mname='$mname' WHERE Roll_No= '$rollno'");
    if($update){
        echo "<script>window.open('index.php','_self')</script>";
    }
}
?>
<style>
    form{width:90%;padding: 10px;}
    form input[type='text']{padding: 10px 10px;border:none;border-radius: 4px;background: rgba(0,0,0,0.2);width:100%;}
    form input[type='submit']{border: none;border-radius: 4px;background: #ff4949;box-shadow: inset 0px 0px 90px rgba(0,0,0,0.2),0px 2px 5px rgba(0,0,0,0.5);color:white;font-size: 20px;padding: 10px 0px;width: 100%;}
    form input[type='submit']:hover{
        background: #fc6a6a;box-shadow: inset 0px 0px 90px rgba(0,0,0,0.4),0px 2px 5px rgba(0,0,0,0.0);
    }
    form input[type='submit']:focus{
        background: #fc6a6a;box-shadow: inset 0px 0px 90px rgba(0,0,0,0.4),0px 2px 5px rgba(0,0,0,0.0);
    }
</style>
<form method="POST">
<h2>Update Information</h2>
<br/><br/>
<lable for="address">Address</lable><br/>
<input type="text" name="address" placeholder="Address"/><br/><Br/>
    
<lable for="fname">Father's Name</lable><br/>
<input type="text" name="fname" placeholder="Father's name"/><br/><Br/>
    <lable for="mname">Mother's Name</lable><br/>
<input type="text" name="mname" placeholder="Mother's name"/><br/><Br/>
    
    <lable for="fpno">Father's Phone No</lable><br/>
<input type="text" name="fpno" placeholder="XXXXXXXXXX"/><br/><Br/>
<lable for="pno">Your Phone No</lable><br/>
<input type="text" name="pno" placeholder="XXXXXXXXXX"/><br/><Br/>
    <input type="submit" name="submit"/>
    </form>
<br/><br/><br/>