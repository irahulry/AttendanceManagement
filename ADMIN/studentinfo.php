<?php  include("../database/db.php"); ?><html>
<head>
    <style>
        #user{height: 150px;width:150px;background: #ff6363;border-radius: 10px; padding: 30px 10px;color:white;
        box-shadow:inset 0px 4px 5px rgba(0,0,0,0.3), 0px 4px 5px rgba(0,0,0,0.5);}
         #user:hover{box-shadow: inset 0px 2px 90px rgba(0,0,0,0.1);}
        #rightbar li{display: inline-block;padding: 10px;}
        a{text-decoration: none;}
        #navigation{padding: 5px 10px; }
        #navi a{margin-left: 10px;border-radius: 5px;}
        
    </style>
</head>
<body>
   <?php include("layout/headerorsidebar.php"); ?> 
    
   
    <div id="rightbar">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{$page = 1;}
        $per_page = 12; 
        $start_from = ($page-1) * $per_page;
         $sel = "select * from students LIMIT $start_from,$per_page";
         $query = mysqli_query($con,$sel);
        while($fetch = mysqli_fetch_array($query)){
            $sno = $fetch['S_No'];
            $rollno = $fetch['Roll_No'];
            $name = $fetch['Student_name'];
            echo "<li><a href='student.php?sno=$sno'>
        <div id='user'><center>
            <img src='../image/user.png' style='width:100px;'/><br/><br/>
            <span id='name'>$name</span><br/>
            <span id='rollno'>$rollno</span><br/>
            </center>
            </div></a></li>";
        }
        
        ?><br/><br/>
        <?php
          $page_sel = "select * from students";
           $page_query = mysqli_query($con,$page_sel);
        $rows = mysqli_num_rows($page_query);
        $total_page = ceil($rows/$per_page);
        echo "<center id='navi'><a id='navigation' href='studentinfo.php?page=1'>First Page</a>";
        for($i=1;$i<=$total_page;$i++){
           
            echo "<a id='navigation' href='studentinfo.php?page=$i'>$i</a>";
        }
        echo "<a id='navigation' href='studentinfo.php?page=$total_page'>Last Page</a></center>";
        ?>
    </div> <style>a{color:#276cdb;background: #e0e0e0;}</style>
    
    <style>a[href='studentinfo.php?page=<?php echo $page; ?>']{background: #ff6363;color:white;}</style>
 </div>
</body>
</html>