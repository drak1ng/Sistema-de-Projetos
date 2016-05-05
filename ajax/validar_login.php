<?
	
	$login = mysql_escape_string($_GET['login']);
	$senha = mysql_escape_string($_GET['senha']);
	
	if($login=="" || $senha==""){
		
		echo "Os campos de Login e Senha devem ser preenchidos!";
		
	}else{
		
		if($login=="webmaster" && $senha=="zaq1xsw2"){

			session_start();
			
			$_SESSION['session_id'] = "1";
			$_SESSION['session_user'] = "webmaster";
			$_SESSION['session_type'] = "MASTER";
			$_SESSION['session_name'] = "Webmaster";
			
			echo "SUCESSO";
			
		}else{
			
			echo "Dados de login inválidos!";
			
		}
		
	}
	
?>