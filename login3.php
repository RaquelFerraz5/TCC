<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="icon" href="img/MicrosoftTeams-image.ico">
  <link rel="stylesheet" href="css/login.css">
  <script type="text/javascript" src="js/login.js"></script>

</head>
<body>
<!-- Form-->
<div class="wrapper fadeInDown">
  <div id="formContent">
	  
	<div class="login">
		<div class="form-header"></div>
			<h1>Login</h1>
		</div>
		
	    <div class="form-content">
			<form method="POST" action="model/v_login.php">
				<label>Email:</label><br><input type="text" name="Email" id="Login"><br><br>
            	<label>Senha:</label><br><input type="password" name="Senha" id="Senha"><br><br>
				<input type="submit" value="entrar" id="entrar" name="entrar"><br>

                <a href="login.php" style="margin-bottom:5vh;">Não tem conta, Clique Aqui</a><br>

			</form>
		</div>

</body>
</html>
