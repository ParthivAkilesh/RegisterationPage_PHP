<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$clg = $_POST['clg'];
		$dpt = $_POST['dpt'];

		$cgpa = $_POST['cgpa'];
		$foi = $_POST['foi'];

		$nptel = $_POST['nptel'];
		$nop = $_POST['nop'];

		$ln = $_POST['ln'];
		$gh = $_POST['gh'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,clg,dpt,cgpa,foi,nptel,nop,ln,gh) values ('$user_id','$user_name','$password','$clg','$dpt','$cgpa','$foi','$nptel','$nop','$ln','$gh')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: rgb(247, 174, 65);
		border: none;
	}

	#box{

		background-color: rgb(44, 74, 243);
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="User Name"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="text" type="text" name="clg" placeholder="College"><br><br>
			<input id="text" type="text" name="dpt" placeholder="Department"><br><br>

			<input id="text" type="number" name="cgpa" placeholder="CGPA"><br><br>
			<input id="text" type="text" name="foi" placeholder="Field of Interest"><br><br>

			<input id="text" type="number" name="nptel" placeholder="NPTEL Score"><br><br>
			<input id="text" type="text" name="nop" placeholder="Number of Projects"><br><br>

			<input id="text" type="text" name="ln" placeholder="Linkedin link"><br><br>
			<input id="text" type="text" name="gh" placeholder="Github link"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">
              <button class="button" >Login</button>
            </a>
		</form>
	</div>
</body>
</html>