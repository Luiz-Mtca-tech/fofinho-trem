<?php

/*
 * loja.php
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

//require('htmlGenerator.php');
require ('produtos.php');
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="pt-br">

<head>
	<title>Luiz Livros</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.36" />
	<link rel="stylesheet" href="../css/style.css">
	<link rel="shorcut icon" href="../../favicon_io/favicon.ico" type="image/x-icon">
</head>

<body>
	<div class="menu" id="menu">
        <img id="menu-img" src="../../assets/menu-50.png" alt="imagen do menu" srcset="../../assets/menu-50.png">
        <ul id="lista"></ul>
    
		<!-- menu para cadastro e login -->  
		<div class="menu-cadastrar" id="menu-cadastrar">
			
			<ul class="log-cad" id="log-cad" name="log-cad">
				<li>
					
					<button id="btn-log-cad">
						<a href="../cadastro/cadastrar.php" target="_self">Cadastrar</a>
					</button>
					
				</li>
				
				<li>
					
					<button id="btn-log-cad">
						<a href="../login/pagina_login.php" taget="_self" >Login</a>
					</button>
					
				</li>
			</ul>
		</div>
    </div>
    
	<h1>Loja</h1>
   
    <div class="categoria" name="categoria" id="categoria">
    	<h2>Filtrar as Opções</h2>
    	<form method="GET" action="filtro.php" id="filtro" name="filtro">
    		
    		<label for="culinaria">Culinária</label>
     		<input type="checkbox" value="culinaria" name="culinaria" class="cat"/>
     		<br>
     		<label for="informatica">Informatica</label>
     		<input type="checkbox" value="informatica" name="informatica" class="cat"/>
     		<br>
     		<label for="historia">História</label>
     		<input type="checkbox" value="historia" name="historia" class="cat"/>
     		<br>
     		<label for="aventura">Aventura</label>
     		<input type="checkbox" value="aventura" name="aventura" class="cat"/>
     		<br>
     		<label for="f.cientifica">f.Científica</label>
     		<input type="checkbox" value="f.cientifica" name="f.cientifica" class="cat"/>
     		<br>
     		<label for="academico">Academico</label>
     		<input type="checkbox" value="academico" name="academico" class="cat"/>
    		
    		<input type="submit" id="enviar" name="enviar" value="Aplicar Filtro"/>
    		
    	</form>
    </div>
    
    <div class="palco" name="palco" id="palco">
    	<ul id="palco1">
    		<?php 
    		echo $_SESSION['produtos'];
    		?>
    	</ul>
    </div>
    <script src='../javascript/menu.js'></script>
       
</body>

</html>
