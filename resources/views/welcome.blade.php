<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commit - Доска объявлений</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>
<body>

@include('header')



<main class="pt-5">
    <section class="hero bg-dark text-white py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="mb-3">Продавай и покупай с Commit</h1>
                    <p class="lead mb-4">Быстрые, безопасные и надежные объявления о продаже товаров.</p>
                    <div class="d-flex justify-content-center gap-4">
                        <a href="#" class="btn btn-success w-25">Каталог</a>
                        <a href="#" class="btn btn-success w-25">Разместить объявление</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-ads py-5">
        <div class="container">
            <h1 class="text-center mb-5">Интересные объявления</h1>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://placeholder.com/300x200" class="card-img-top" alt="Товар 1">
                        <div class="card-body">
                            <h5 class="card-title">Товар 1</h5>
                            <p class="card-text">Описание товара 1</p>
                            <p class="card-text font-weight-bold">1500 ₽</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://placeholder.com/300x200" class="card-img-top" alt="Товар 2">
                        <div class="card-body">
                            <h5 class="card-title">Товар 2</h5>
                            <p class="card-text">Описание товара 2</p>
                            <p class="card-text font-weight-bold">2000 ₽</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://placeholder.com/300x200"  class="card-img-top" alt="Товар 3">
                        <div class="card-body">
                            <h5 class="card-title">Товар 3</h5>
                            <p class="card-text">Описание товара 3</p>
                            <p class="card-text font-weight-bold">1800 ₽</p>
                        </div>
                    </div>
                </div><div class="col-md-4">
                    <div class="card">
                        <img src="https://placeholder.com/300x200"  class="card-img-top" alt="Товар 3">
                        <div class="card-body">
                            <h5 class="card-title">Товар 3</h5>
                            <p class="card-text">Описание товара 3</p>
                            <p class="card-text font-weight-bold">1800 ₽</p>
                        </div>
                    </div>
                </div><div class="col-md-4">
                    <div class="card">
                        <img src="https://placeholder.com/300x200"  class="card-img-top" alt="Товар 3">
                        <div class="card-body">
                            <h5 class="card-title">Товар 3</h5>
                            <p class="card-text">Описание товара 3</p>
                            <p class="card-text font-weight-bold">1800 ₽</p>
                        </div>
                    </div>
                </div><div class="col-md-4">
                    <div class="card">
                        <img src="https://placeholder.com/300x200"  class="card-img-top" alt="Товар 3">
                        <div class="card-body">
                            <h5 class="card-title">Товар 3</h5>
                            <p class="card-text">Описание товара 3</p>
                            <p class="card-text font-weight-bold">1800 ₽</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('footer')
</body>
</html>
