<?php        
    include 'dao.php';

	session_start();

        $nome 		     = mysqli_real_escape_string($con, $_GET['nome']);
	    $data_nascimento = mysqli_real_escape_string($con, $_GET['data_nascimento']);
	    $genero 		 = mysqli_real_escape_string($con, $_GET['genero']);
	    $password 		 = mysqli_real_escape_string($con, $_GET['password']);
        $email 		     = mysqli_real_escape_string($con, $_GET['email']);

        $cadastrar = "insert into login(datanascimeto,nome,genero,senha,email)
         values({$data_nascimento},'{$nome}','{$genero} ','{$password} ','{$email}')";

        mysqli_query($con,$cadastrar);
		$linhas_afetadas = mysqli_affected_rows($con);
		$Resposta = array();
		if ($linhas_afetadas>0) {
			$_SESSION['result'] = true;
		}else{
		}
        
        mysqli_close($con);
		header("Location:login.php")
?>