<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin login</title>
</head>

<body background="images/medical-evaluation-1832.jpg">
<form action="admin_login.php" method="post">
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<table width="400" border="15" align="center" bgcolor="#FFCCFF">
	<tr>
    	<td align="center" bgcolor="#33FF99" colspan="6"><h1><em>Administrator</em></h1></td>
    </tr>
	<tr>
    	<td align="center"><b><i>User Name</i></b></td>
		<td><input type="text" name="admin_name" /></td>
    </tr>
    
    <tr>
    	<td align="center"><b><i>Password</i></b></td>
        <td><input type="password" name="admin_pass" /></td>
	</tr>
	<tr>
    	<td colspan="4" align="center"><input type="submit" name="login" value="Login" />
        <a href="mankind.html"><input type="button" name="back" value="Go to Home Page" /></a></td>
    	
    </tr>
</table>
</form>
<center><?php echo @$_GET['error']; ?></center>
</body>
</html>
<?php
//connection coding
		$user = 'root';
		$pass = '';
		$db = 'employ';
		$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
		//echo"connection sucess";
if(isset($_POST['login']))
{
	$admin_name = $_SESSION['admin_name'] = $_POST['admin_name'];
	$admin_pass = $_POST['admin_pass'];
	//$_SESSION['admin_name'];
	$query = "select * from login where user_name = '$admin_name' AND user_password = '$admin_pass'";
	$run = mysqli_query($db,$query);
	if( mysqli_num_rows($run) > 0 )
	{
		echo "<script>window.open('view.php?logged=Logged in Sucessflly...!','_self')</script>";
	}
		else
		{
			echo "<script>alert('User Name Or Password is incorrect...')</script>";
		}
	}
	?>