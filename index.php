<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

		<style type="text/css">

				#btn{

				padding: 10px;
				width: 100px;
				color: white;
				background-color: rgb(247, 174, 65);
				border: none;
				}

				#btn {
					position: absolute;
					right: 0px;
					width: 300px;
					border: 3px solid #73AD21;
					padding: 10px;
					}

		</style>


	<a href="logout.php">
        <button class="butn" >Logout</button>
    </a>
	<h1>Resume of <?php echo $user_data['user_name']; ?></h1>
	<br>

	<div class="box">
		<h2>Name : <?php echo $user_data['user_name']; ?> </h2>
		<h2>College : <?php echo $user_data['clg']; ?> </h2>

		<h2>Department : <?php echo $user_data['dpt']; ?> </h2>
		<h2>CGPA : <?php echo $user_data['cgpa']; ?> </h2>

		<h2>Field of Interest : <?php echo $user_data['foi']; ?> </h2>
		<h2>NPTEL Score : <?php echo $user_data['nptel']; ?> </h2>

		<h2>Number of Projects  : <?php echo $user_data['nop']; ?> </h2>
 
		<br>
		<br>

		<?php echo "For more reference and hiring refer the below provided social media links"?>
		<br>
		<br>

		

		<a href="https://www.linkedin.com/in/parthiv-akilesh-a-s-2aab3a206/">
		<button style="font-size:24px;color:rgb(44, 74, 243);font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Linkedin <i class="fa fa-linkedin-square"></i></button>
		</a>

		<a href="https://github.com/ParthivAkilesh">
		<button style="font-size:24px;color:black;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">GitHub <i class="fa fa-github"></i></button>
		</a>
	</div>

</body>
</html>