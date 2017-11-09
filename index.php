<?php include('header1.php');?>
<div class="container">
<div class="admin">
<form action=" " method="post">
<label>User Name:</label>
<div class="name"><input  name="user" type="text" placeholder="Enter your name" class="textarea"/></div><br />
<label>Password:</label>
<div class="pass"><input  name="pass" type="password" placeholder="Enter your name" class="textarea"/></div><br />
<input type="submit" value="Submit" class="click" />
</form>
</div>
</div>
</body>
</html>
<?php
if ($_POST) {
	if($_POST['user']=="admin")
	{
		if($_POST['pass']=="brhss")
		{
			header('location:dashboard.php');
		}
		$message="Sorry your are not authorized";

	}
	else
	{
		$message="Sorry your are not authorized";
	}
}
include('footer.php'); ?>