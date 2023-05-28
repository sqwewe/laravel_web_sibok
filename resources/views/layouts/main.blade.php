<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>App Name - @yield('Сибирячок')</title>
</head>

<body class=" bg-success bg-opacity-25">
    @section('header')
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <!-- <a class="nav-link" aria-current="page" href="./about">Сведения об организации</a> -->
                        <div class="dropdown">
                            <a class="btn " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Сведения об организации
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./history">История</a></li>
                                <li><a class="dropdown-item" href="./doc">Документы</a></li>
                                <li><a class="dropdown-item" href="./work">Сотрудники</a></li>
                                <li><a class="dropdown-item" href="./hero">Герои</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./news">События</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="./catalog">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login">Личный кабинет</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="">Основная информация</a>
                    </li> -->
                    <!-- <li class="nav-item">
                  <a class="nav-link">Проекты культуры</a>
                  <div class="dropdown">
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Культура 38</a></li>
                      <li><a class="dropdown-item" href="#">Культура для школьников</a></li>
                    </ul>
                  </div>  
              </li> -->
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Проекты культуры
                        </button>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="https://culture38.ru">Культура 38</a></li>
                            <li><a class="dropdown-item" href="https://culture.gov.ru/documents/o-realizatsii-proekta-kultura-dlya-shkolnikov/">Культура для школьников</a></li>
                            <li><a class="dropdown-item" href="https://пушка.рф/">Пушкинская карта</a></li>
                        </ul>
                    </div>
                </ul>
                <a class="navbar-brand" href="/">Редакция журнала "Сибирячок"</a>
            </div>
        </div>
    </nav>
    <nav class="navbar fixed-bottom navbar-dark bg-dark text-light">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col mx-5 my-1">
                    <p class="">© 2022 ОГБУК редакция журнала "Сибирячок"
                </div>
            </div>
    </nav>
    </div>
</body>
@show

<div class="container">
    @yield('content')
</div>
</body>

<!-- @section('sidebar')
<nav class="navbar bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Меню</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Сотруднк-роль</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Главная</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Планирование
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Новый план</a></li>
                            <li><a class="dropdown-item" href="#">Изменение плана</a></li>
                            <li><a class="dropdown-item" href="#">Завершение плана</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Списки
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Список постов</a></li>
                            <li><a class="dropdown-item" href="#">Список сотрудников</a></li>
                            <li><a class="dropdown-item" href="#">Список читателей</a></li>
                            <li><a class="dropdown-item" href="#">Список сотрудников</a></li>
                            <li><a class="dropdown-item" href="#">Список сотрудников</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Список всех данных</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>
@show -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>