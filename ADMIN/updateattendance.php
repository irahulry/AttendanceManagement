<?php 
include("../include/attendance.php");

?>

<html>
<head>
    <title></title>
<style>
    #rightbar table,th,td,tr{ border: 1px solid black;border-radius: 2px;}
    table input{height:auto ;width:120px;}
    table input[type="text"]{text-align: center;}
    #head{background: #494949;}
    #head *{padding: 2px 10px; background: #494949;border: none;color: white;height: 30px;}
    #head input:hover{background: #67e045; cursor: pointer;border: none;color: white;height: 30px;}
    #head select:hover{background: #6c6c6c;border: none;color: white;height: 30px;}
    input[type='date']{font-size: 10px;width:100px;padding:0px;}
</style>    
</head>
<body>
    <?php include("layout/headerorsidebar.php"); ?>
    <style>#header{display: none;}table tr,th,td{padding: 2px;max-width: 120px;}#leftbar{display: none;}
    #rightbar{float: none; overflow: auto; padding: 20px 20px;height: 100%;width:100%;}
    </style>
         <div id="rightbar" style="padding:0;margin:0;"><form method="post">
             <div id="head"> <a href="index.php">HOME</a><span> Records executing</span>
               <select name="record"><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22' autofocus>22</option>
             </select>
             <input type="submit" name="submit" value="submit"/>
            
             </div><?php
             
             $seld = mysqli_query($con,"select * from students");
             $num = mysqli_num_rows($seld);
             ?>
             <table>
                 <tr><th rowspan="2">S.NO</th><th rowspan="2">Roll NO</th><th colspan="5">Date</th></tr>
                 <tr>
<td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td><td><input type='date' name='date[]' placeholder='Date'></td></tr>
            
            <?php
             
             $sel = mysqli_query($con,"select * from students");
             while($fetch = mysqli_fetch_array($sel)){
                 $sno = $fetch['S_No'];
                 $rollno = $fetch['Roll_No'];
                 echo " <tr><td>$sno</td><td>$rollno</td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td><td><input type='text' name='$sno-[]' placeholder='$sno'></td></tr>";
             }
             ?>
             
             </table></form>
        </div>
    </div>
</body>
</html>