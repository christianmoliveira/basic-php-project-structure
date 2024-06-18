<?php

require __DIR__ . "\\..\\..\\..\\bootstrap.php";

if (!isEmpty()) {
    flash("message", "Preencha todos os campos corretamente!");

    redirect('contato');
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's',
]);

$data = [
    "from" => $validate->email,
    "to" => "contato@devclass.com.br",
    "message" => $validate->message,
    "subject" => $validate->subject,
];

if (send($data)) {
    flash('message', 'Email enviado com sucesso', 'success');

    redirect('contato');
}