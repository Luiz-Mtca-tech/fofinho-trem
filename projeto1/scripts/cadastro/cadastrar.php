<?php
/*
 * cadastrar.php
 * 
 * Copyright 2021 Luiz Henrique da Mota Couto <root@luiz-550XCJ-550XCR>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

session_start();



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="pt-br">

<head>
	<title>cadastro</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.36" />
	<link rel="stylesheet" href="../css/style.css">
	<link rel="shorcut icon" href="../../favicon_io/favicon.ico">
</head>

<body>
	
	<div class="menu" id="menu">
        <img id="menu-img" src="../../assets/menu-50.png" alt="imagen do menu" srcset="../../assets/menu-50.png">
        <ul id="lista"></ul>
        <div class="menu-cadastrar" id="menu-cadastrar">
			
			<ul class="log-cad" id="log-cad" name="log-cad">
				<li>
					<label for="btn-log-cad">Já têm um cadastro?</label>
					<button id="btn-log-cad">
						<a href="../login/pagina_login.php" target="_self">Faça login aqui!</a>
					</button>
					
				</li>
					
				</li>
			</ul>
		</div>
    </div>
	
	<div id="formulario">
	
		<form method="POST" action="cadastro.php">
		
			<label for="e-mail">e-mail:</label>
			<input type="text" name="e-mail"><br>
			
			<label for="nome">nome:  </label>
			<input type="text" name="nome"><br>
			
			<label for="senha">senha:  </label>
			<input type="password" id="senha" name="senha"><br>
			
			<!--79051734-->
			<label for="telefone">telefone:</label>
			<input type="text" name="telefone"><br>
			
			<label for="cep">cep:  </label>
			<input type="text" name="cep"><br>
			
			<input type="submit" value="enviar" id="btn-env">
			
			<input type="button" value="Ocultar senha" id="btn-vs">
				
		</form>
		
		<?php
		
		if(isset($_SESSION['aviso'])){
			$aviso = '[Aviso]: ';
			echo $aviso.$_SESSION['aviso'];

		}
        // assim que o usuário reiniciar a pagina as mensagens irão desaparecer
		$_SESSION['aviso'] = null;
		$aviso = '';
		
		?>
		
	</div>
	
	<script src="../javascript/menu.js"></script>
	<script src="../javascript/ocultar_senha.js" type="text/javascript"></script>
</body>

</html>
