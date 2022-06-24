<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <style>
    .some{
        background-color: black;
        color: aqua;
        font-family:sans-serif;
        font-size: 50px;
        padding: 20px;
        margin: 30px;
        border-radius: 30px;
        height: 500px;
        }
        .sub{
            font-size: 30px;
        }
    </style>
	<title>My website Login</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
    <div class="some">Hello, <?php echo $user_data['user_name']; ?>
    <div class="sub"> This is to inform you that you have entered into the First Page of the Admin Cell <br><br>
        Administrators have the highest level of access to an account. If you want to be one for an account, you can reach out to the Admin of the account. A general user will have limited access to the account as per the permissions given by the Admin.
    </div></div>
</body>
</html>