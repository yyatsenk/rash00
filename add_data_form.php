<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
		padding-top:50%;
	}
	.ok
	{
		background-color: #696969;
	}
</style>
</head>    
<body>
<form action="add_data.php" name="add_data.php" method="POST">
Bookname: <input type="text" name="bookname" value="" />
<br />
Genre: <input type="text" name="genre" value="" />
<br />
Author: <input type="text" name="author" value="" />
<br />
Price: <input type="text" name="price" value="" />
<br />
Presence: <input type="text" name="presence" value="" />
<input type="submit" name="submit" value="OK" />
</form>
</body></html>