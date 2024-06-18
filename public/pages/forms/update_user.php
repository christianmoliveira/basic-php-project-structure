<?php

require __DIR__ . "\\..\\..\\..\\bootstrap.php";

$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);

if (!isEmpty()) {
    flash("message", "Preencha todos os campos corretamente!");

    redirect("edit_user&id={$id}");
}

$validate = validate([
    'name' => 's',
    'surname' => 's',
    'email' => 'e',
]);

$updated_user = update('users', $validate, ["id", $id]);

if ($updated_user) {
  flash("message", "Atualizado com sucesso", "success");

  redirectToHome();
}

flash("message", "Erro ao atualizar usuário");
redirect("edit_user&id={$id}");