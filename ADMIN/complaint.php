<?php
include("layout/headerorsidebar.php");
include("../database/db.php");


?>
<div id="rightbar">

<table>
    <tr><td>Roll No</td> <td>Name</td><td>Subject</td> <td>complaint</td></tr>
    <?php
    
    $select  = mysqli_query($con,"select * from complaint");
    while($fetch = mysqli_fetch_array($select)){
        $rno = $fetch['rollno'];
        $name = $fetch['name'];
        $subject = $fetch['subject'];
        $complaint = $fetch['complaint'];
        
        echo "<tr><td>$rno</td><td>$name</td><td>$subject</td><td>$complaint</td></tr>";
    }
    ?>
    
    </table>
</div>