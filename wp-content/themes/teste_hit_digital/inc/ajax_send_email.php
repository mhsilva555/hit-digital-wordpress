<?php


function ajax_send_email() {

    parse_str($_POST['dados'], $dados);

    $nome     = sanitize_text_field($dados['nome']);
    $email    = sanitize_email($dados['email']);
    $msg      = sanitize_text_field($dados['mensagem']);

    $to      = 'mhsilva555@gmail.com';
    $subject = 'Formulário de Contato';

    $mensagem = '<b>Nome:</b> '.$nome.'\r\n'.
        '<b>Email:</b> '.$email.'\r\n'.
        '<b>Mensagem:</b> '.$msg.'\r\n';

    $headers = 'From: mhsilva555@gmail.com' . "\r\n" .
        'Reply-To: mhsilva555@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $send = mail($to, $subject, $mensagem, $headers);

    if (!is_wp_error( $send )) {
        echo json_encode([
            'message' => 'Formulário Enviado com Sucesso!',
            'status'  => 200
        ]);
    } else {
        echo json_encode([
            'message' => 'Não foi possível enviar o formulário!',
            'status'  => 400
        ]);
    }

    wp_die();
    
}
add_action('wp_ajax_ajax_send_email', 'ajax_send_email');
add_action('wp_ajax_nopriv_ajax_send_email', 'ajax_send_email');