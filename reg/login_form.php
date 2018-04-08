<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body
	{
		background-color: #DCDCDC;
	}
	.main_form
	{
		position: absolute;
		left:30%;
		top:30%;
		width:40%;
		height: 40%;
		border-radius: 10px;
		background-color: white;
	}
	.form
	{
		text-align: center;
		font-family: arial;
		color:#808080;
		padding-top:20%;
	}
	.ok
	{
		background-color: #696969;
	}
</style>
</head>
<body>
	<div class="main_form">
<form class="form" action="login.php" name="login.php" method="GET">
Username: <br><input type="text" name="login" value="" />
<br />
Password: <br><input type="password" name="passwd" value="" /><br>
<input class="ok" type="submit" name="submit" value="OK" />
</form>
</div>
</body></html>