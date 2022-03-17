<?php
include("include.php");

$lecture = mysqli_fetch_array(mysqli_query($con,"select SUM(lecture) AS lecture from attendance where sno='$sno'"))['lecture'];
$totallecture = mysqli_fetch_array(mysqli_query($con,"select * from total"))['total'];
$percentfull = $lecture/$totallecture*100;
$percent = rtrim(substr($percentfull,0,3),'.');
if($percent>49 && 70>$percent){
    $color = "#2196F3";
}
if($percent<50){
    $color = "#f44336";
}
if($percent>=70){
    $color = "#4CAF50";
}

?><style>a[target="_blank"]{display:none;}</style>
<style>
    #bar{padding: 5px 10px}
    .container {
  width: 90%; /* Full width */
  background-color: #ddd; /* Grey background */
}
    .skills {
  text-align: right; /* Right-align text */
  padding-top: 10px; /* Add top padding */
  padding-bottom: 10px; /* Add bottom padding */
  color: white; /* White text color */
}

    .bar {animation: width 3s;animation-direction: alternate-reverse; width: <?php echo $percent; ?>%; background-color: <?php echo $color; ?>;} /* Green */
    @keyframes width{
        0%{width: 0%; }
        25%{width: 100%;}
        50%{width: 30%;}
        75%{width: 100%;}
        100%{width: <?php echo $percent; ?>%;}
    }
    [type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}
#atttable td{padding:5px;border:1px solid rgba(0,0,0,0.5);border-radius:4px;}
</style>
<body>

    <h2 style="padding:10px;">Attendance Percentage</h2>
    <p><b>NOTE: </b>before sessional your attendance should be greater than 75%.</p><br/>
    <div id='bar'>
<div class="container">
  <div class="skills bar"><?php echo $percent; ?>%</div>
</div>
  </div><?php
  $data="";
if(isset($_POST['submit'])){
$date=$_POST['date'];
$getatt=mysqli_query($con,"SELECT * FROM `attendance` WHERE `sno`='$sno' AND `date`='$date'");
$fetchatt=mysqli_fetch_array($getatt);
$lectatt=$fetchatt['lecture'];
$data="<h2>Showing Attendance of $date</h2><br/><tr><td>$rollno</td><td>$name</td><td>$lectatt</td></tr>";

echo "<table id='atttable'>
		<tr>
<td>
	Roll No
	</td>
	<td>
	Name
	</td>
	<td>
	Lecture
	</td>
</tr>";
}
?><br/><br/><div style="padding:10px;padding-top:0px;">
<h2>Search by  date<h2/>
<br/>
<form method="post">
	<input style="padding:5px;border-radius:4px;" type="date" name="date" />
	<input style="padding:7px 15px;background:#59baf7;color:white;border:none;border-radius:4px;" type="submit" name="submit" Value="search"/>
	</form>
	<br/><br/>
	
<?php echo $data; ?>
		</table>
	</div>
</body>