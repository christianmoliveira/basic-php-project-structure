<h2>Editar usuário</h2>

<?= get("message") ?? ""  ?>

<?php $user = find("users", "id", $_GET['id']) ?>

<form action="/pages/forms/update_user.php" method="POST">
  <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
  <div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="name" class="form-control" value="<?= $user->name ?>">
  </div>
  <div class="form-group">
    <label for="">Sobrenome</label>
    <input type="text" name="surname" class="form-control" value="<?= $user->surname ?>">
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control" value="<?= $user->email ?>">
  </div>

  <div class="form-group mt-2">
    <input type="submit" class="btn btn-primary" value="Editar">
  </div>
</form>