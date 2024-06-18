<?php

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$delete_user = delete('users', "id", $id);

if ($delete_user) {
  flash("message", "Deletado com sucesso", "success");

  redirectToHome();
}

flash("message", "Erro ao deletar usuário");
redirectToHome();