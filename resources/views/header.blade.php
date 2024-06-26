<header class="position-fixed w-100 z-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container gap-3">
            <a href="#" class="nav-link navbar-brand">Commit</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Главная</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Каталог</a>
                </li>
            </ul>
            <form class="d-flex w-50" role="search">
                <input class="form-control me-2" type="search" placeholder="Поиск объявлений" aria-label="Поиск">
                <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Разместить объявление</a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Профиль
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                            <li>
                                <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#signin">
                                    Войти
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#signup">
                                    Зарегестрироваться
                                </button>
                            </li>
                            <li><a class="dropdown-item" href="#">Избранное</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="modal fade" id="signin" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Авторизация</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                @include('forms.signin')
            </div>
            <div class="modal-footer d-flex flex-column">
                <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="signup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Регистрация</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                @include('forms.signup')
            </div>
            <div class="modal-footer d-flex flex-column">
                <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
