<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="d-flex justify-content-between flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
    <h5 class="my-0 me-md-auto fw-normal">ItPractica</h5>
    <nav class="my-2 my-md-0 me-md-3">
        <a class="p-2 text-white" href="/">Главная</a>
        <a class="p-2 text-white" href="/about">Про нас</a>
    </nav>
    <a class="btn btn-warning" href="/review">Отзывы</a>
</div>

<div class="container mt-5">
    @yield('main_content')
</div>
<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
    <div class="col-12 col-md">
        <small class="d-block mb-3 text-body-white">&copy; ItPractica</small>
      </div>
      <div class="col-6 col-md">
        <h5>О нас</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Наши соцсети</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="tel:+7(903)-207-34-12">+7(903)-207-34-12</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="mailto:itpractica@yandex.ru">itpractica@yandex.ru</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Политика конфиденциальности</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Публичная оферта</a></li>
        </ul>
      </div>
      
      <div class="col-6 col-md">
        <h5>Мы находимся</h5>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A26c9c003bb47c30e534c6ff18d2f2f87107e271bbdf8e3140cfa582fbeff8e57&amp;width=370&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
        </ul>
      </div>
    </div>
  </footer>
</body>
</html>