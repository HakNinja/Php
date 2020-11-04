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
	$password=md5($_POST['password']);
		$query="SELECT * FROM usertable WHERE username='$username' AND password='$password'";
		$exec_query=mysqli_query($conn,$query);
		$s=mysqli_num_rows($exec_query);
		if($s>=1){
			session_start();
			$_SESSION['username']=$username;
			header("Location: welcome.php");
		}
		else{
			?>

			Login failed
			<?php
		}
	}
else{
	?>
	database connection failed...
<?php
}
?>