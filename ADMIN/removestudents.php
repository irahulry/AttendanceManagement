<?php include("../database/db.php"); ?><html>
<head>
<style>
    #remove{background: #f96b6b;color:white;padding: 5px 10px;border: none;border-radius: 4px;cursor: pointer;}
    </style>
</head>
<body>
</body>
    <?php include("layout/headerorsidebar.php"); ?>
    <div id="rightbar">
     <table>
                 <tr> 
                    <th>S.No</th>                   
                    <th>Roll No</th>
                    <th>Student Name</th>
                    <th>Remove</th>
                 </tr>
         <?php  
            $sel = "select * from students ";
            $get = mysqli_query($con,$sel);
           
                 while( $fetch = mysqli_fetch_array($get)){
                        $record = $fetch['id'];
                        $sno = $fetch['S_No'];
                        $rollno = $fetch['Roll_No'];
                        $name = $fetch['Student_name'];
                     echo "<tr><th>$sno</th>
                     <td>$rollno</td>
                     <td>$name</td>
                     <td><a href='../include/removestudent.php?remove=$record'><Button id='remove'>Remove</button></a></td>
                     </tr>";
                 }
                     
         ?>
             </table>
    </div>
</div>
</div>
</body>
</html>