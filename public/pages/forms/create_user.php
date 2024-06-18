<?php

require __DIR__ . "\\..\\..\\..\\bootstrap.php";

if (!isEmpty()) {
    flash("message", "Preencha todos os campos corretamente!");

    redirect('create_user');
}

$validate = validate([
    'name' => 's',
    'surname' => 's',
    'email' => 'e',
    'password' => 's',
]);

$create_user = create('users', $validate);

if ($create_user) {
  flash("message", "Cadastrado com sucesso", "success");

  redirect("create_user");
}

flash("message", "Erro no cadastro do usuário");
redirect("create_user");