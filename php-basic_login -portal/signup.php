<html>
	<head><title>user</title>
		<style>
			body{
				background-color:orange;
			}
			#p1{
				font-size:100px;
				text-align:center;
				background-color:yellow;
		    	width:99%;
		    	height: 60%;
			}
		</style>
	</head>
	<body><br/><div id="p1">
		<br/>
<?php
$conn=mysqli_connect('localhost','root','','userdatabase');
if($conn) {
	$username=$_POST['username'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	if($username == '' || $password1 == '' || $password2 == '')
		echo "Incomplete credentials";
	else{
		if($password1 == $password2){
			$query="INSERT INTO usertable VALUES(NULL,'$username','".md5($password1)."')";
			$exec_query=mysqli_query($conn,$query);
			if($exec_query){
			?>
			User created
<?php
	}
		else{
		?>
			Error occurred
<?php		
		}
	}
		else{
		?>
			Please confirm password
			<?php
		}
	}
}
else{
	?>
	database connection failed...
	<?php
	}
?>
		</div>
	</body>
</html>