<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../favicon_io/favicon.ico" type="image/x-icon">
    <title>LuizLivros</title>
</head>
<body>
	
	<!-- menu para navegação das páginas do site -->
    <div class="menu" id="menu">
        <img id="menu-img" src="../assets/menu-50.png" alt="imagen do menu" srcset="../assets/menu-50.png">
        <ul id="lista"></ul>
    
		<!-- menu para cadastro e login -->  
		<div class="menu-cadastrar" id="menu-cadastrar">
			
			<ul class="log-cad" id="log-cad" name="log-cad">
				<li>
					
					<button id="btn-log-cad">
						<a href="cadastrar.php" target="_self">Cadastrar</a>
					</button>
					
				</li>
				
				<li>
					
					<button id="btn-log-cad">
						<a href="">Login</a>
					</button>
					
				</li>
			</ul>
		</div>
    </div>   
    
    <script src="menu.js"></script>
   
</body>
</html>