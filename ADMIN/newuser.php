<?php include("../database/db.php"); ?><html>
<head>
      <style>
    </style>
</head>
<body>
   <?php include("layout/headerorsidebar.php"); ?>
        <div id="rightbar"><br/><h2>New User's</h2>
            <table>
                <tr><th style="font-weight:bold;font-size:16px;">Roll No</th><th style="font-weight:bold;font-size:16px;">Code</th></tr>
                <?php
            $query = mysqli_query($con,"select * from users where status='pending'");
            while($select = mysqli_fetch_array($query)){
            $rollno = $select['rollno'];
            $code = $select['code'];
            echo " <tr><td style='font-size:16px;'>$rollno</td><td style='font-size:16px;font-size:16px;'>$code</td></tr>";
            }
            
            ?>
            </table>
        </div>
            
        
    </div>
</body>
</html>