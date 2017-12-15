<?php
require_once('common.php');

$error = '0';

if (isset($_POST['submitBtn'])){
	// Get user input
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
        
	// Try to login the user
	$error = loginUser($username,$password);
}

?>

<!DOCTYPE html PUBLIC >
<html>
<head>
   <title>Логин</title>
   <link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="main">
<?php if ($error != '') {?>
      <div class="caption">Site login</div>
      <div id="icon">&nbsp;</div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
        <table width="100%">
          <tr><td>Логин:</td><td> <input class="text" name="username" type="text"  /></td></tr>
          <tr><td>Пароль:</td><td> <input class="text" name="password" type="password" /></td></tr>
          <tr><td colspan="2" align="center"><input class="text" type="submit" name="submitBtn" value="Login" /></td></tr>
        </table>  
      </form>
      
      &nbsp;<a href="register.php">Регистрация</a>
      
<?php 
}   
    if (isset($_POST['submitBtn'])){

?>
      <div class="caption">Login result:</div>
      <div id="icon2">&nbsp;</div>
      <div id="result">
        <table width="100%"><tr><td><br/>
<?php
	if ($error == '') {
		echo "Привет, $username! <br/>Ты залогинен1<br/><br/>";
		echo '<a href="index.html">Now you can visit the index page!</a>';
	}
	else echo $error;

?>
		<br/><br/><br/></td></tr></table>
	</div>
<?php            
    }
?>
	
</body>   
