<?php

/*
 * produtos.php
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
 
require('../php/banco.php');//excutando a conecão com o banco de dados 

session_start(); // iniciando sessão

//preparando a requisição
$sql = $pdo->prepare("SELECT * FROM produtos");
$sql->execute();//enviando a requisição
$dadosDoBanco = $sql->fetchAll();
/*
 * nesta lista será armazenada todos os produtos do banco de dados
 * para cada categoria haverá um array, e para cada produto haverá
 * um outro array contendo todas as informações do produto.
 */
$array = array( 'informatica' => array(), 'f.cintifica' => array(),
                'culinaria' => array(), 'historia' => array(),
                'aventura' => array(), 'academico' => array());

$html = '';

if (isset($_SESSION['filtro'])){
    
    $_SESSION['produtos'] = 'nada';
    
}else {
    
    foreach ($dadosDoBanco as $item) {//percorrendo os itens da tabela
        
        /*aqui iremos colocar cada produto no array conforme a sua categoria*/
        switch ($item['categoria']){
            case 'informatica':
                array_push($array['informatica'], $item);
                break;
                
            case 'f.cientifica':
                array_push($array['f.cintifica'], $item);
                break;
                
            case 'culinaria':
                array_push($array['culinaria'], $item);
                break;
                
            case 'historia':
                array_push($array['historia'], $item);
                break;
                
            case 'aventura':
                break;
                
            case 'academico':
                array_push($array['academico'], $item);
                break;
        }
    }
    /* agora vamos percorrer o array com todos 
     * os produtos em suas determinadas categorias
     */
    foreach ($array as $categoria){
        foreach ($categoria as $produto) {
            $tag = '<li>
                
                    <img style="padding-top: 10px;" src="'.$produto['img'].'" id="foto-produto"
                    style="
    	border-color: #AFDEA4;
    	border-width: thick;
    	border-style: solid;">
                    <p>nome:'.$produto['nome'].'</p>
                    <p>descrição:'.$produto['descricao'].'</p>
                    <p><strong>preço: R$'.$produto['preco'].'</strong></p>
                    <button><a href="compra.php">comprar</a></button>
                    </li>';
            $html .= $tag;
        }
    }
    
}



$_SESSION['produtos'] = $html;

