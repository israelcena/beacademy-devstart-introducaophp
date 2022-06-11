<div class="container m-4">
  <form action="" method="post">
    <label for="nome">Nome: </label>
    <input class="form-control mb-3" type="text" name="nome" id="nome" value="<?php echo $dados[0] ?>" required>

    <label for=" email">E-mail</label>
    <input class="form-control mb-3" type="email" name="email" id="email" value="<?php echo $dados[1] ?>" required>

    <label for="telefone">Telefone: </label>
    <input class="form-control mb-3" type="tel" name="telefone" id="telefone" value="<?php echo $dados[2] ?>" required>

    <button class="btn btn-primary" data-bs-toggle="button" aria-pressed="false" autocomplete="off">Editar</button>
  </form>
</div>