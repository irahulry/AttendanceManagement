<?php
include("../database/db.php");
include("../include/addstudent.php");
?><html>
<head>   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
     <?php include("layout/headerorsidebar.php"); ?>
         <div id="rightbar"><form method="post">
            <h3>Number of Records you want to to add </h3><select name="number">
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>
             <option value="8">8</option>
             <option value="9">9</option>
             <option value="10">10</option></select>
             <!--SELECT OPTION ENDS-->
             <br/><br/>
             <table>
                 <tr> 
                    <th>Record</th>
                    <th>S.No</th>                   
                    <th>Roll No</th>
                    <th>Student Name</th>
                 </tr>
                 <tr>
                     <th>1</th>
                    <td><input type="text" placeholder="S.No" name="sno[]"/></td>
                     <td><input type="text" placeholder="Roll No" name="rollno[]" value="1800708000"/></td>
                     <td><input type="text" placeholder="Student Name" name="studentname[]"/></td>
                 </tr>
                  <tr>
                     <th>2</th>
                    <td><input type="text" placeholder="S.No" name="sno[]"/></td>
                     <td><input type="text" placeholder="Roll No" name="rollno[]" value="1800708000"/></td>
                     <td><input type="text" placeholder="Student Name" name="studentname[]"/></td>
                 </tr>
                 <tr>
                     <th>3</th>
                    <td><input type="text" placeholder="S.No" name="sno[]"/></td>
                     <td><input type="text" placeholder="Roll No" name="rollno[]" value="1800708000"/></td>
                     <td><input type="text" placeholder="Student Name" name="studentname[]"/></td>
                 </tr>
                 <tr>
                     <th>4</th>
                    <td><input type="text" placeholder="S.No" name="sno[]"/></td>
                     <td><input type="text" placeholder="Roll No" name="rollno[]" value="1800708000"/></td>
                     <td><input type="text" placeholder="Student Name" name="studentname[]"/></td>
                 </tr>
                 <tr>
                     <th>5</th>
                    <td><input type="text" placeholder="S.No" name="sno[]"/></td>
                     <td><input type="text" placeholder="Roll No" name="rollno[]" value="1800708000"/></td>
                     <td><input type="text" placeholder="Student Name" name="studentname[]"/></td>
                 </tr>
                 <tr>
                     <th>6</th>
                    <td><input type="text" placeholder="S.No" name="sno[]"/></td>
                     <td><input type="text" placeholder="Roll No" name="rollno[]" value="1800708000"/></td>
                     <td><input type="text" placeholder="Student Name" name="studentname[]"/></td>
                 </tr>
                 <tr>
                     <th>7</th>
                    <td><input type="text" placeholder="S.No" name="sno[]"/></td>
                     <td><input type="text" placeholder="Roll No" name="rollno[]" value="1800708000"/></td>
                     <td><input type="text" placeholder="Student Name" name="studentname[]"/></td>
                 </tr>
                 <tr>
                     <th>8</th>
                    <td><input type="text" placeholder="S.No" name="sno[]"/></td>
                     <td><input type="text" placeholder="Roll No" name="rollno[]" value="1800708000"/></td>
                     <td><input type="text" placeholder="Student Name" name="studentname[]"/></td>
                 </tr>
                 <tr>
                     <th>9</th>
                    <td><input type="text" placeholder="S.No" name="sno[]"/></td>
                     <td><input type="text" placeholder="Roll No" name="rollno[]" value="1800708000"/></td>
                     <td><input type="text" placeholder="Student Name" name="studentname[]"/></td>
                 </tr>
                 <tr>
                     <th>10</th>
                    <td><input type="text" placeholder="S.No" name="sno[]"/></td>
                     <td><input type="text" placeholder="Roll No" name="rollno[]" value="1800708000"/></td>
                     <td><input type="text" placeholder="Student Name" name="studentname[]"/></td>
                 </tr>
             </table><br/><br/>
             <input type="submit" value="Submit" id="addstudent" name="addstudent"/>
             </form>
        </div>
        
    </div>
</body>
</html>


























