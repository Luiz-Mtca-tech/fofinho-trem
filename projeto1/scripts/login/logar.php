<?php

require('../php/banco.php');

session_start();

$nome = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input_array(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);


$sql = $pdo->prepare("SELECT * FROM clientes WHERE email = '$nome' AND senha = '$senha'");

if ($sql->execute()) {
    foreach ($sql->fetch() as $item){
        if($item['email'] == $nome && $item['senha'] == $senha){
            
            $_SESSION['usuario'] = $nome;
            $_SESSION['senha'] = $senha;
            header('Location: pagina_login.php');
            
        }else {
            $_SESSION['aviso'] = 'Email ou senha incorretos.';
            header('Location: pagina_login.php');
        }
    }
   
}else {
    
    $_SESSION['aviso'] = 'deu errado'; 
    header('Location: pagina_login.php');
    
}



