<?php include("../database/db.php"); ?><html>
<head>
    <title></title>
    <style>#box{width: 200px;border-radius: 10px;}
    #box, #box * {
        padding: 10px;background: #e24141;color:white;
    }
        input{border: 1px solid white;border-radius: 3px;}
        #box a{text-decoration: none;}
</style>    
</head>
<body>
   <?php include("layout/headerorsidebar.php");
    $sel = mysqli_fetch_array(mysqli_query($con,"select total from total"));
    $fetch = $sel['total'];
    $fetchstu = mysqli_num_rows(mysqli_query($con,"select * from students"));
    if(isset($_POST['total'])){
        $update = mysqli_query($con,"UPDATE total SET total=".$_POST['total']."");
        if($update){echo "succes";}
        else{echo "Fail";}
    }
    
    ?><style>table,tr,th,td{border: none;}</style>
        <div id="rightbar">
            <table>
                <tr><td><div id="box"><form method="post"><h3>Total Lecture</h3>
                <input type="text" name="total" placeholder="Total Lecture" value="<?php echo $fetch; ?>"/>
                </form>
            </div></td>
                    <td>
                    <div id="box"><a href="studentinfo.php"><h2>Total students:<br/><?php echo $fetchstu; ?></h2>
            </a></div></td>
                    
                </tr>
                </table>
            
        </div>
        
    </div>
</body>
</html>