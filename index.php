<?php include("database/db.php");
if(isset($_POST['submit'])){
    $rno = $_POST['rollno'];
    $pass = md5($_POST['password']);
   $sel = mysqli_query($con,"select * from users where rollno='$rno' AND password='$pass'");
    $num = mysqli_num_rows($sel);
    $fetch = mysqli_fetch_array($sel);
    $status = $fetch['status'];
    if($num=="0"){echo "<script>alert('Record Not Found')</script>";}
    else{
    if($status=="verified"){
        $co = setcookie("rollno",$rno,time()+31556926);
        $coo = setcookie("login",'1',time()+31556926);
        echo "<script>window.open('users/index.php','_self')</script>";
    }else{
        $_SESSION['rollno']=$_POST['rollno'];
        echo "<script>window.open('verify.php','_self')</script>";
    }}
}
?><html>
<head><meta name="viewport" content="width=device-width, initial-scale=1"><style>a[target="_blank"]{display:none;}</style>
    <style>
    *{margin: 0;
padding: 0;
font-family:tahoma;
}
body{
}
#st{background:white;height: 100%;width: 100%;}
#nd{
	background:linear-gradient(to bottom,#0061ff,#0aceff);
	height: 70%;width: 80%;border-radius: 0px 0% 120% 0px;}
#rd{background:white;height: 70%;width: 70%;border-radius: 0px 20% 90% 0px;}
#design{overflow: hidden;}
#content{position: fixed;
	top:0;left:0;height: 100%;
	width:100%;background:transparent;overflow:auto ;}
	#ad{
	position: relative;
	top: 50%;
	transform:translateY(-59%);
}
h1{opacity: 0.6;}
p{opacity: 0.5;}
input{box-shadow:inset -0px 5px 10px rgba(206, 206, 206,0.2);
	padding:10px 20px;width: 100%;border: 1px solid #e5e5e5;}
input[type="text"]{border-radius:4px 4px 0px 0px;
	border-bottom: 0.5px solid #e5e5e5;outline:none;}
input[type="password"]{border-radius:0px 0px 4px 4px;
	border-top: 0px solid #e5e5e5;outline:none;}
#line{border-radius:7px ;width:70%;line-height: 0px;
	box-shadow: 2px 2px 30px rgba(206, 206, 206);}
#text{padding: 8% 10%;}
#btn{
	box-shadow:2px 2px 20px rgba(0,0,0,0.4);
	color:white;font-weight:bold;font-size:20px;
	border:none;padding: 12px 0px;
	background:linear-gradient(to right,#0061ff,#0aceff);
	outline:none;border-radius:40px;width: 70%;
transition:0.3s;}
#btn:hover{cursor: pointer;box-shadow:2px 2px 20px rgba(0,0,0,0.7);
	color:white;font-weight:bold;font-size:20px;
	border:none;
	background:linear-gradient(to right,#0061ff,#0aceff);
	outline:none;border-radius:40px;width: 70%;
}
    </style>
</head>
<body><form method='post'>
	<div id="design">
		<div id="st">
			<div id="nd">
				<div id="rd">
				</div>
			</div>
		</div>
	</div>
	<div id="content">
		<div id="ad">
		<div id="text"><h1>Sign in</h1>
		<p>Sign in using Roll No or Password</p>
	</div><br/>
		<br/><center><div id="line">
		<input type="text" name="rollno" placeholder="Enter Roll-No">
		<input type="Password" name="password" placeholder="Password">
		</div><br/><Br/><br/><Br/><br/><br/>
		<input type="submit" id="btn" name="submit" value="Sign in"><br/><br/><br/><a style="text-decoration:none;opacity:0.8;" href="signup.php">Create new Account!</a></center>
	</div>
	</div>
    </form>
    </body>
</html>