<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
          <a  href="/"><img src="/images/logo_white.png" height="30px" alt="Sis.RH"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item px-3">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link" href="{{ route('funcionarios.index') }}">Funcionários</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link" href="#">Cargos</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link">Departamentos</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link">Usuários</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        @yield('conteudo')
      </div>
    <footer class="footer container-fluid bg-light text-center p-3">
      <span>
        Sistema desenvolvido na aula de Programação avançada do curuso de Sistemas de Informação<br>
        Período letivo 2022.2 <br> 
        Centro Universitário UNIRIOS
        </span>
    </footer>
    <script src="/images/bootstrap.bundle.min.js"></script>
</body>
</html>