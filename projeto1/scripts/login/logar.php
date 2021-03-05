<?php
//iniciando uma sessão
session_start();

//chamando o codigo que vai iniciar a configuração do banco
require('../php/banco.php');
//echo 'legal';



//coletando e validando os dados do formulário
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);


/* se os dados estiverem corretos
 * execute a requisição do banco de
 * dados e depois
 */  
if ($email && $senha){
    
    //prepare um nova requisição: selecione todos os campos email
    //e senha da tabela clientes
    $sql = $pdo->prepare("SELECT * FROM clientes");
    
    /* todas as senhas do banco estão cryptografadas, então, para
     * fazer a verficação da senha temos que cryptografala  
     */
    $senha_crypto = md5($senha);
    
    //se a requisição for realizada com sucesso
    if ($sql->execute()) {
        
        //se a requisição for realizada com sucesso
        foreach ($sql->fetchAll() as $item){
            
            /* se a senha e o email informado for igual ao que está
             * cadastrado no banco de dados, então a sessão estará iniciada
             * e o loop foreach será parado.
             */
            if ($item['email'] == $email && $item['senha'] == $senha_crypto) {
                
                $_SESSION['usuario'] = $item['nome'];
                $_SESSION['senha'] = $senha_crypto;
                $_SESSION['aviso'] = '[AVISO!]: Operação realizada com sucesso!';
                
                /* aqui será definido o nivel do usuário, caso ele seja um usuário mais
                 * avançado, ele terá mais permissões no site, como por exemplo cadastrar
                 * produtos na loja, fazer consultas no banco de dados, alterar registros do banco, etc.
                 */
                 $_SESSION['nivel'] = $item['nivel'];
                 
                 break;
            }
        
        }
    // redirecione o usuário para a pagina anterior
    
        if (! isset($_SESSION['usuario']) || ! isset($_SESSION['senha'])) {
           $_SESSION['aviso'] = '[AVISO!]: senha ou email estão incorretos.';
        }
            
        header('Location: pagina_login.php');

    }else {
       /* caso a requisição com o banco de dados não seja executada com exito,
        * retorne uma mensagem de erro e redirecione o usuario para a pagina
        * anterior
        */
        
        $_SESSION['aviso'] = '[AVISO!]: Houve um problema com o banco de dados, Não foi possivel realizar a operação';
        header('Location: pagina_login.php');
        
    }
     
}else {
    $_SESSION['aviso'] = '[AVISO!]: dados inválidos tente novamente.';
    header('Location: pagina_login.php');
}

