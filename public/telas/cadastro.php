<div class="container m-4">
  <form action="arquivo.php" method="post">
    <label for="nome">Nome: </label>
    <input class="form-control mb-3" type="text" name="nome" id="nome" placeholder="ex: Fulano da Silva Souza" required>

    <label for="senha">Senha: </label>
    <input class="form-control mb-3" type="password" name="senha" id="senha" placeholder="ex: !@#12AsdQ" required>

    <label for="resenha">Repita a Senha: </label>
    <input class="form-control mb-3" type="password" name="resenha" id="resenha" placeholder="ex: !@#12AsdQ" required>

    <label for="email">E-mail</label>
    <input class="form-control mb-3" type="email" name="email" id="email" placeholder="ex: usuario@provedor.com.br" required>

    <label for="telefone">Telefone: </label>
    <input class="form-control mb-3" type="tel" name="telefone" id="telefone" placeholder="ex: (12)1231-6546" required>

    <button class="btn btn-primary" data-bs-toggle="button" aria-pressed="false" autocomplete="off">Cadastrar</button>
  </form>
</div>