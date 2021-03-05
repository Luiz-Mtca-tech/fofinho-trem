<?php
/*
 * cadastro.php
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
session_start();// iniciando seção 
require('../php/banco.php');// executando o arquivo 'banco.php'

//coletando e filtrando os dados do formulario
$email = filter_input(INPUT_POST, 'e-mail', FILTER_VALIDATE_EMAIL);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);

//verificando se os dados são válidos
if ($email && $nome && $senha && $telefone && $cep) {
	//preparando a requisição para o banco de dados
	
    $crypto_senha = md5($senha);
    
	$sql = $pdo->prepare("INSERT INTO clientes (nome, email, cep, telefone, senha) VALUES ('$nome', '$email', '$cep', '$telefone', '$crypto_senha')");
	
	// se a requisição do banco funcionar:
	if($sql->execute()){
		
	    $sql = $pdo->prepare("SELECT senha FROM clientes WHERE nome = '$nome'");
	    
		// crie uma mnsagem de aviso informando o êxito da operação
		$_SESSION['aviso'] = 'Operação realizada com sucesso!';
		
		//rediresione o usuário para a página de formulario
		header('Location: cadastrar.php');
	
	}else {
	
		$_SESSION['aviso'] = 'Não foi possivel realizar o cadastro';
		header('Location: cadastrar.php');
		
	}
	
}else {
	
	$_SESSION['aviso'] = 'dados inválidos, tente novamente.';
	header('Location: cadastrar.php');

}
