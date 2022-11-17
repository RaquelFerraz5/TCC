<?php

	if($_POST['Nome'] != "")
	{
		include_once '../factory/conexao.php';
		
		$nome = $_POST['Nome'];
		$sobrenome = $_POST['Sobrenome'];
		$Data_nasc = $_POST['Data_nasc'];
		$email = $_POST['Email'];
		$senha = $_POST['Senha'];
		$sexo = $_POST['Sexo'];
		//$senhasegura = password_hash($senha, PASSWORD_DEFAULT);
		
		$sql = "insert into tbCadPaciente (Nome,Sobrenome,Data_nasc,Email,Senha,Sexo) 
	values ('$nome','$sobrenome','$Data_nasc','$email','$senha','$sexo')";
		$query = mysqli_query($conn,$sql);

		$consultar = "SELECT * FROM tbCadPaciente WHERE Email = '$email'";

        $sql_query = $conn->query($consultar) or die("Falha na execução do código SQL: " . $conn->error);

        $quantidade = $sql_query->num_rows;

		if ($quantidade == 1) {
			header("Location: ../index.php");
			} else {
				echo "<script>
				alert('Falha! E-mail já cadastrado!');
				</script>";
			}
	
		}
		else
		{
			echo "Dados não cadastrados";
		}


?>