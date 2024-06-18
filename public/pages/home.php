<a href="/?page=create_user">Cadastrar usuário</a>

<h2>Página inicial</h2>

<?= get("message") ?? ""  ?>

<div class="container table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Email</th>
      <th scope="col" colspan="2"></th>
    </tr>
  </thead>
  <tbody>
    <?php $users = all("users") ?>
    <?php foreach ($users as $user) : ?>
      <tr>
        <th scope="row"><?= $user->id ?></th>
        <td><?= $user->name ?></td>
        <td><?= $user->surname ?></td>
        <td><?= $user->email ?></td>
        <td><a href="/?page=edit_user&id=<?= $user->id ?>" class="btn btn-info">Editar</a></td>
        <td><a href="/?page=delete_user&id=<?= $user->id ?>" class="btn btn-danger">Deletar</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>