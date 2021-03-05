<?php

session_start();
require ('../php/verificar_usuario.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../../favicon_io/favicon.ico" type="image/x-icon">
    <title>LuizLivros</title>
</head>
<body>

	<div class="menu" id="menu">
        <img id="menu-img" src="../../assets/menu-50.png" alt="imagen do menu" srcset="../../assets/menu-50.png">
        <ul id="lista"></ul>
    
		<!-- menu para cadastro e login -->  
		<div class="menu-cadastrar" id="menu-cadastrar">
			
			<ul class="log-cad" id="log-cad" name="log-cad">
				<li>
					<label>Ainda não têm um cadastro?</label>
					<button id="btn-log-cad">
						<a href="../cadastro/cadastrar.php" target="_self">Cadastre aqui!</a>
					</button>
					
				</li>
				<li>
					<?php 
				        if(isset($_SESSION['nivel'])){
		    
                            $html = VerificarUsuario($_SESSION['nivel']);
            
                            echo $html;
		    
	                     }
	                ?>					
				</li>
			</ul>
		</div>
    </div>   
	
	<h1>Login</h1>
	
	<div id="formulario">
		<form method="POST" action="logar.php">
			
			<label for="email">email: </label>
			<input type="text" id="email" name="email">
			
			<label for="senha">senha: </label>
			<input type="password" id="senha" name="senha">
			
			<input type="submit" id="enviar" value="Enviar">
			
			<input type="button" id="btn-vs" value="Mostrar Senha">
			
		</form>
		<?php 
		// se houver algum aviso mostre-o para o usuário
		if(isset($_SESSION['aviso'])){
		    echo $_SESSION['aviso'];
		
	    // se o usuário logado estiver logado
		}
		$_SESSION['aviso'] = null;
		
		if (isset($_SESSION['usuario']) && isset($_SESSION['senha'])){
		    echo 'Bem Vindo!'.$_SESSION['usuario'].', para deslogar clique no botão vermelho acima!';
		}		
		?>
	</div>

	<script src="menu.js" type="text/javascript"></script>
	<script src="../javascript/ocultar_senha.js" type="text/javascript"></script>
</body>
</html>