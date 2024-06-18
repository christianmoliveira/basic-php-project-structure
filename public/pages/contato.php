 <h2>Página de contato</h2>

<?= get("message") ?? ""  ?>

<form action="/pages/forms/contato.php" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" id="name">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email">
    </div>

    <div class="mb-3">
        <label for="subject" class="form-label">Assunto</label>
        <input type="text" name="subject" class="form-control" id="subject">
    </div>

    <div class="mb-3">
        <label for="message" class="form-label">Mensagem</label>
        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>