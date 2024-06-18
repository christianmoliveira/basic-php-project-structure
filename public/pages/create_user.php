<h2>Cadastrar usuário</h2>

<?= get("message") ?? ""  ?>

<form action="/pages/forms/create_user.php" method="POST">
  <div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Sobrenome</label>
    <input type="text" name="surname" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password" class="form-control">
  </div>

  <div class="form-group mt-2">
    <input type="submit" class="btn btn-primary" value="Cadastrar">
  </div>
</form>