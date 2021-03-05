<?php

/*
 * esta função vai verificar o nivel do usuario logado, para que possamos garantir
 * que os usuarios comuns, não tenham ascesso a determinadas paginas do site e a
 * certos privilégios
 */



function VerificarUsuario($sessao) {

    switch ($sessao) {
        
        case 2:
            
            $html = '<button type="button" onclick="abrirJanela(\'../php/secreto/pagina_secreta.php\')">Sala de Controle</button>';
            break;
           
        case 3:
            
            $html = '<button type="button" onclick="abrirJanela(\'../php/secreto/pagina_secreta2.php\')">Sala de Controle</button>';
            break;
            
        default :
            $html = '<button type="button" id="enc_sessao">Sair da Sessão</button>';
            break;
    }
    
    return $html;
}