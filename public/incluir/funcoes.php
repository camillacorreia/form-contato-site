<?php
    function enviarMensagem($dados) {
        // Dados do formulario
        $nome_usuario       = $dados['nome'];
        $email_usuario      = $dados['email'];
        $mensagem_usuario   = $dados['mensagem'];
        
        // Criar variáveis de envio
        $destino            = "camillajesuscorreia@hotmail.com.br";
        $remetente          = "camillacorreia@titanci.com.br";
        $assunto            = "Mensagem do site";
        
        // Montar o corpo da mensagem
        $mensagem           = "O usuario " . $nome_usuario . " enviou uma mensagem." . "</BR>";
        $mensagem           .= "email do usuário: " . $email_usuario . "</br>";
        $mensagem           .= "mensagem:" . "</br>";
        $mensagem           .= $mensagem_usuario;
        
        return mail($destino, $assunto, $mensagem, $remetente);
    }

?>