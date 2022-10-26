<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" class="form-control" name="senha">
    </div>
    <div class="mb-3">
        <label>Data Nascimento</label>
        <input type="date" class="form-control" name="data_nasc">
    </div>
    <div class="mb-10">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>