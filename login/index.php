<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Bravo Ticket — Login</title>
</head>
<body>
  <div class="login-wrapper">
    <div class="card login-card shadow">
      <div class="card-body p-4">
        <?php if (file_exists('Logotipo_bravo.svg')): ?>
          <img src="Logotipo_bravo.svg" class="card-img-top mb-3" alt="Bravo Ticket" style="max-height: 60px; object-fit: contain;">
        <?php else: ?>
          <h5 class="text-center mb-3 text-primary">Bravo Ticket</h5>
        <?php endif; ?>
        <h6 class="card-subtitle mb-3 text-muted text-center">Faça seu login</h6>
        <form action="../CRUD/processa_login.php" method="post" class="needs-validation" novalidate>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome de usuário" required autocomplete="username">
            <label for="nome">Nome de usuário</label>
            <div class="invalid-feedback">Informe o nome de usuário.</div>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required autocomplete="current-password">
            <label for="senha">Senha</label>
            <div class="invalid-feedback">Informe a senha.</div>
          </div>
          <?php if (!empty($_GET['erro'])): ?>
            <div class="alert alert-danger py-2 small" role="alert">Usuário ou senha incorretos.</div>
          <?php endif; ?>
          <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script>
    (function () {
      var forms = document.querySelectorAll('.needs-validation');
      Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (e) {
          if (!form.checkValidity()) { e.preventDefault(); e.stopPropagation(); }
          form.classList.add('was-validated');
        }, false);
      });
    })();
  </script>
</body>
</html>