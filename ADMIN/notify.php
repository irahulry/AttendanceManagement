<?php include("../database/db.php"); ?><html>
<head>
      <style>
          input[type="text"],textarea{font-size: 16px; padding: 10px; border-radius: 4px;border: none;background: rgba(0,0,0,0.2);width: 600px;}
          textarea{height: 190px;}
          input[type="submit"]{ padding: 13px 100px;border-radius: 5px;border: none;background: #ff4444;color:white;font-size: 18px;text-shadow: 0px 0px 20px rgba(0,0,0,0.9);box-shadow: 0px 2px 10px rgba(0,0,0,0.8),inset 0px 0px 10px rgba(0,0,0,0.4);cursor: pointer;}
          input[type="submit"]:hover{padding: 13px 100px;border-radius: 5px;border: none;background: #f93434;color:white;font-size: 18px;}
          
    </style>
</head>
<body>
   <?php include("layout/headerorsidebar.php");
    
    if(isset($_POST['submit'])){
        $date = date("Y-m-d");
        $insert = mysqli_query($con,"INSERT INTO `notification` (`id`, `subject`, `message`, `date`) VALUES (NULL, '".$_POST['subject']."', '".$_POST['message']."', '$date');");
        
    }
    
    ?>
        <div id="rightbar">
            <form method="POST">
            <h3>Make Notification:</h3><br/><Br/>
            <input type="text" name="subject" placeholder="SUBJECT"/><br/><Br/>
                <textarea name="message" placeholder="Message"></textarea><br/><Br/>
                
                <input type="submit" name="submit"/>
            </form>
            
        </div>
        
    </div>
</body>
</html>