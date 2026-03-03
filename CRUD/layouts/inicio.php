<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bravo Ticket — Painel</title>
  <link href="../assets/css/mensagem.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <style>
    .sidenav-header {
      padding: 1.25rem 1rem;
      min-height: 5rem;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      display: flex;
      align-items: center;
    }
    .sidenav-brand {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      text-decoration: none;
      color: #344767;
      transition: opacity 0.2s;
    }
    .sidenav-brand:hover {
      color: #344767;
      opacity: 0.9;
    }
    .brand-logo-wrap {
      flex-shrink: 0;
      width: 3.5rem;
      height: 3.5rem;
      border-radius: 0.75rem;
      background: #f8f9fa;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0.4rem;
      border: 1px solid rgba(0, 0, 0, 0.06);
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    }
    .brand-logo {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
    .brand-name {
      font-size: 1.125rem;
      font-weight: 700;
      letter-spacing: -0.02em;
      line-height: 1.2;
    }
  </style>
</head>
<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="sidenav-brand" href="../pages/dashboard.php">
          <div class="brand-logo-wrap">
            <img src="../assets/img/logobravo.png" alt="Bravo Ticket" class="brand-logo">
          </div>
          <span class="brand-name">Bravo Ticket</span>
        </a>
      </div>
      <hr class="horizontal dark mt-0">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a id="nevega1" class="nav-link" href="../pages/dashboard.php">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a id="nevega2" class="nav-link" href="../pages/listar_produto.php">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Produtos</span>
            </a>
          </li>
          <li class="nav-item">
            <a id="nevega3" class="nav-link" href="../pages/listar_admin.php">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Administradores</span>
            </a>
          </li>
          <li class="nav-item">
            <a id="nevega4" class="nav-link" href="../pages/listar_categoria.php">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Categoria</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
  <main class="main-content position-relative border-radius-lg">