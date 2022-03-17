<?php include("../database/db.php"); ?><html>
<head>
      <style>
          #rightbar a{padding: 4px;border-radius: 4px; text-decoration: none;color: white;background: #ff4444;}
          #righbar a:hover{padding: 4px; text-decoration: none;color: white;background: #ff4444;}
    </style>
</head>
<body>
   <?php include("layout/headerorsidebar.php");
    
    
    ?>
        <div id="rightbar">
            
            <table>
                <tr>
                    <td>Subject</td>
                    <td>Message</td>
                    <td>Remove</td>
                </tr>
                
                <!--PHP CODE-->
                
                <?php
                $sel = mysqli_query($con,"select * from notification");
                while($notification = mysqli_fetch_array($sel)){
                $id = $notification['id'];
                $subjecttemp = $notification['subject'];
                $messagetemp = $notification['message'];
                $subject = substr($subjecttemp, 0, 20);
                $message = substr($messagetemp, 0, 20);
                    
                
                echo "<tr><td>$subject</td><td>$message</td><td><a href='removeno.php?id=$id'>Delete</a></td></tr>";
                   
                }
                ?>
            </table>
        </div>
        
    </div>
</body>
</html>