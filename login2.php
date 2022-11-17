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

<h1>Cadastro</h1>

	  <div class="login">
		<form method="POST" action="model/v_cadMed.php">
			<div id="formulario">
        		</br></br>
        		<form method="POST" action="v_telacadcli.php">
            	<label>Nome:</label><br><input type="text" name="Nome" id="Nome"><br><br>
            	<label>Sobrenome:</label><input type="text" name="Sobrenome" id="Sobrenome"><br><br>
				<label>CRM:</label><br><input type="text" name="Crm"  id="Crm"><br><br>
            	<label>Data de Nascimento:</label><input type="date" name="Data_nasc" id="Data_nasc"><br><br>
				<label>Email:</label><br><input type="text" name="Email" id="Email"><br><br>
				<label>Senha:</label><br><input type="password" name="Senha" id="Senha" minlength="8"><br><br>
				<label>Sexo:</label><br><input type="text" name="Sexo" id="Sexo"><br><br>
				

            	<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"class="btn btn-primary btn-block btn-large"><br>
            	<br><br>
            	<a href="login3.php">Voltar</a><br><br>
    		</div>
		</form>
</div>


</body>
</html>