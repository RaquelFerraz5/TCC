<?php

	if($_POST['Nome'] != "")
	{
		include_once '../factory/conexao.php';
		
		$nome = $_POST['Nome'];
		$sobrenome = $_POST['Sobrenome'];
        $crm = $_POST['Crm'];
		$Data_nasc = $_POST['Data_nasc'];
		$email = $_POST['Email'];
		$senha = $_POST['Senha'];
		$sexo = $_POST['Sexo'];
		//$senhasegura = password_hash($senha, PASSWORD_DEFAULT);
		
		$sql = "insert into tbCadMedico (Nome,Sobrenome,Crm,Data_nasc,Email,Senha,Sexo) 
	values ('$nome','$sobrenome','$crm','$Data_nasc','$email','$senha','$sexo')";
		$query = mysqli_query($conn,$sql);


        $consultar = "SELECT * FROM tbCadMedico WHERE Email = '$email'";

        $sql_query = $conn->query($consultar) or die("Falha na execução do código SQL: " . $conn->error);
        
        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            echo "
		      <script>
		      alert('Dados cadastrados com sucesso');
		      </script>
		    ";
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