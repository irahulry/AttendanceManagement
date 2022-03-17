<?php
include("include.php");
$notiquery = mysqli_query($con,"select * from notification ORDER by 1 DESC");



?>
<style>
    details{word-wrap: break-word; outline: none; width:90%;background: rgba(0,0,0,0.1);}
    #scr{width:90%;padding: 10px;}
    details{border: 1px solid rgba(0,0,0,.3);border-radius: 10px; padding: 10px;}
    summary{outline: none; border-radius: 4px;padding: 5px;}
    details h3{background: rgba(0,0,0,0.2);padding: 5px;border-radius: 4px;}
</style>
<div id="scr"><h2>Notifications</h2><br/>
<?php
while($notification=mysqli_fetch_array($notiquery)){
    $notisub = $notification['subject'];
    $notimsg = $notification['message'];
    $notidate = $notification['date'];
    echo "<details><h3>$notimsg</h3><summary><h2>$notisub</h2></summary></details><br/>";
}

?>
    </div>