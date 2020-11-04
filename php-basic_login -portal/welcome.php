<?php
session_start();
if(isset($_SESSION['username'])){
?>
<html>
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
		    	float:left;
			}
	</style>
	<head><title>welcome page</title></head>
	<body><br/><div id="p1">
		<br/>Welcome!
			<form action='logout.php' method='post'><br/>
				<input type='submit' value="Logout"><br/>
			</form>
			</div>
		</body>
</html>
<?php
}
else
	header("Location: home.html");
?>
