<style>

*{transition: 0.2s; margin:0;padding:0;font-family:lato ;font-weight: normal;}
    #header{background: #333333;color:white;padding: 10px 0px;border-bottom: 2px solid rgba(255,255,255,0.1);}
    #header li{display: inline;}
    #header a{outline: none; padding: 10px 30px; text-decoration: none;color:white;background: #333333;}
    #header a:hover{background: #5b5a5a;}
    #content{width:100%;height:100%;}
    #leftbar{float: left; height: 100%;width:20%;background: #333333;}
    #leftbar li,summary{display:list-item;list-style: none;width:100%;padding: 10px;color:white;border: 1px solid rgba(255,255,255,0.1);}
    #leftbar a{color: rgba(255,255,255,0.8);text-decoration: none;}
    #leftbar li:hover{color: rgba(255,255,255,0.8);text-decoration: none;background: #5b5a5a;}
    #leftbar summary:hover{color: rgba(255,255,255,0.8);text-decoration: none;background: #5b5a5a;}
    #rightbar{overflow: auto;text-align: left; float: right; padding: 20px 20px;height: 90%;width:76%;}
 table, th, td {  
    border-bottom: 1px solid black; border-collapse: collapse;padding: 5px 10px;  
    } th{font-weight: bold;}
    select,option{padding:3px 30px ;border-radius: 3px;color:rgba(0,0,0,0.7);cursor: pointer;}
    td input{padding: 2px 5px ;border:1px solid rgba(0,0,0,0.2);font-size: 15px; border-radius: 4px;}
    #addstudent{padding: 10px 50px;border-radius: 5px; font-size: 16px; background:#1be800;color:white; font-weight: bold;border:none;box-shadow:inset 0px 0px 120px rgba(0,0,0,.3),0px 2px 5px rgba(0,0,0,.5);cursor: pointer;}
    #leftbar details{transition: height 0.4s ease;overflow: hidden;}
    #leftbar details:not([open]){height: 2.5em;}
    #leftbar details[open]{height: 7.5em;}
</style>
<div id="header"><ul>
       <li><a href="index.php" style="font-size:3vh;">Computer Department</a></li>
       <li style="float:right;"><a href="./include/logout.php">Logout</a></li></ul>
    </div>
    <div id="content">
        <div id="leftbar">
             <a href="index.php"><li>HOME</li></a>
            <details>  
                <summary style="color:white;cursor:pointer;">Manage Students </summary>  

            <a href="addstudents.php"><li  style='background:rgba(255,255,255,0.3);'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Add student</li></a>
            <a href="removestudents.php"><li  style='background:rgba(255,255,255,0.3);'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Remove student</li></a>
                </details>
              <details>  
                <summary style="color:white;cursor:pointer;">Notification </summary>  

            <a href="notify.php"><li  style='background:rgba(255,255,255,0.3);'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Notify</li></a>
            <a href="removenotification.php"><li  style='background:rgba(255,255,255,0.3);'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Remove notification</li></a>
                </details>
            
            <a href="studentinfo.php"><li>Student's Information</li></a>
            <a href="studentattendance.php"><li>Student's Attendance</li></a>
            <a href="updateattendance.php"><li>Update Attendance</li></a>
            
            <a href="sendmessage.php"><li>Send Message</li></a>
            <a href="newuser.php"><li>New User's</li></a>
            <a href="complaint.php"><li>Complaint's</li></a>
            
           
            
            <a href="about.php"><li>Credit</li></a>
        </div>
        <style>
            a[title="_blank"]{display:none;}
            
        </style>