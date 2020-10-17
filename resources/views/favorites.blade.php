@extends('layouts.app')

@section('content')

    <section class="page page_favorites content">
        <div class="pager">
            <a href="#">Главная</a>
            <i>/</i>
            <span>Мои закладки</span>
        </div><!--pager-->

        <div class="favorites">
            <div class="favorites__header">
                <div class="favorites__col">
                    Изображение
                </div><!--favorites__col-->

                <div class="favorites__col">
                    Наименование товара
                </div><!--favorites__col-->

                <div class="favorites__col">
                    Модель
                </div><!--favorites__col-->

                <div class="favorites__col">
                    Доступность
                </div><!--favorites__col-->

                <div class="favorites__col">
                    Цена
                </div><!--favorites__col-->

                <div class="favorites__col">
                    Действие
                </div><!--favorites__col-->

            </div><!--favorites__header-->

            <div class="favorite">
                <div class="favorites__col">
                    <div class="favorite__photo">
                        <img class="pos-center" src="images/products/product-1/basket-preview.png" alt="Ноутбук Lenovo G505s">
                    </div><!--favorite__photo-->

                </div><!--favorites__col-->

                <div class="favorites__col">
                    <a href="#" class="favorite__title">
                        Ноутбук Lenovo G505s
                    </a>

                    <p class="favorite__param">
                        Код товара: <strong>1294625900</strong>
                    </p>

                    <p class="favorite__param">
                        Цвет: <strong>Черный</strong>
                    </p>

                </div><!--favorites__col-->

                <div class="favorites__col">
                    <p class="favorite__desc">G505s</p>
                </div><!--favorites__col-->

                <div class="favorites__col">
                    <p class="favorite__desc">В наличии</p>
                </div><!--favorites__col-->

                <div class="favorites__col">
                    <p class="favorite__desc">147 500 ₸ </p>
                </div><!--favorites__col-->

                <div class="favorites__col">
                    <a href="#" class="favorite__add-basket">
                        <svg class="svg-icon icon-basket-add pos-center"><use xlink:href="images/sprite.svg#icon-basket-add"></use></svg>
                    </a>

                    <span class="favorite__delete">
                        <svg class="svg-icon icon-delete"><use xlink:href="images/sprite.svg#icon-delete"></use></svg>
                    </span>

                </div><!--favorites__col-->

            </div><!--favorite-->

            <div class="favorite">
                <div class="favorites__col">
                    <div class="favorite__photo">
                        <img class="pos-center" src="images/products/product-1/basket-preview.png" alt="Ноутбук Lenovo G505s">
                    </div><!--favorite__photo-->

                </div><!--favorites__col-->

                <div class="favorites__col">
                    <a href="#" class="favorite__title">
                        Ноутбук Lenovo G505s
                    </a>

                    <p class="favorite__param">
                        Код товара: <strong>1294625900</strong>
                    </p>

                    <p class="favorite__param">
                        Цвет: <strong>Черный</strong>
                    </p>

                </div><!--favorites__col-->

                <div class="favorites__col">
                    <p class="favorite__desc">G505s</p>
                </div><!--favorites__col-->

                <div class="favorites__col">
                    <p class="favorite__desc">В наличии</p>
                </div><!--favorites__col-->

                <div class="favorites__col">
                    <p class="favorite__desc">147 500 ₸ </p>
                </div><!--favorites__col-->

                <div class="favorites__col">
                    <a href="#" class="favorite__add-basket">
                        <svg class="svg-icon icon-basket-add pos-center"><use xlink:href="images/sprite.svg#icon-basket-add"></use></svg>
                    </a>

                    <span class="favorite__delete">
                        <svg class="svg-icon icon-delete"><use xlink:href="images/sprite.svg#icon-delete"></use></svg>
                    </span>

                </div><!--favorites__col-->

            </div><!--favorite-->

        </div><!--favorites-->

    </section><!--page-->



    <section class="catalog catalog_second content">
        <h2>
            рекомендуем
        </h2>

        <div class="catalog__list flex-container">
            <div class="catalog__item">
                <a href="#" class="catalog__item-photo">
                    <img src="images/catalog/product-5.png" alt="Фото">
                </a>

                <span class="catalog__item-tag">new</span>

                <a href="#" class="catalog__item-title">
                    Механическая игровая
                    клавиатура с подсветкой
                </a>

                <div class="catalog__item-rating">
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                </div><!--catalog__item-rating-->

                <p class="catalog__item-status">
                    В наличии
                </p>

                <p class="catalog__item-price">
                    13 500 ₸
                </p>

                <p class="catalog__item-price catalog__item-price_old">
                    16 000 ₸
                </p>

                <button class="catalog__item-add">Добавить в корзину</button>

                <div class="catalog__item-control">
                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-favorite"><use xlink:href="images/sprite.svg#icon-product-favorite"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-diff"><use xlink:href="images/sprite.svg#icon-product-diff"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-view"><use xlink:href="images/sprite.svg#icon-product-view"></use></svg>
                    </a>

                </div><!--catalog__item-control-->

            </div><!--catalog__item-->

            <div class="catalog__item">
                <a href="#" class="catalog__item-photo">
                    <img src="images/catalog/product-6.png" alt="Фото">
                </a>

                <span class="catalog__item-tag">new</span>

                <a href="#" class="catalog__item-title">
                    Механическая игровая
                    клавиатура с подсветкой
                </a>

                <div class="catalog__item-rating">
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                </div><!--catalog__item-rating-->

                <p class="catalog__item-status">
                    В наличии
                </p>

                <p class="catalog__item-price">
                    13 500 ₸
                </p>

                <p class="catalog__item-price catalog__item-price_old">
                    16 000 ₸
                </p>

                <button class="catalog__item-add">Добавить в корзину</button>

                <div class="catalog__item-control">
                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-favorite"><use xlink:href="images/sprite.svg#icon-product-favorite"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-diff"><use xlink:href="images/sprite.svg#icon-product-diff"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-view"><use xlink:href="images/sprite.svg#icon-product-view"></use></svg>
                    </a>

                </div><!--catalog__item-control-->

            </div><!--catalog__item-->

            <div class="catalog__item">
                <a href="#" class="catalog__item-photo">
                    <img src="images/catalog/product-7.png" alt="Фото">
                </a>

                <span class="catalog__item-tag">new</span>

                <a href="#" class="catalog__item-title">
                    Механическая игровая
                    клавиатура с подсветкой
                </a>

                <div class="catalog__item-rating">
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                </div><!--catalog__item-rating-->

                <p class="catalog__item-status">
                    В наличии
                </p>

                <p class="catalog__item-price">
                    13 500 ₸
                </p>

                <p class="catalog__item-price catalog__item-price_old">
                    16 000 ₸
                </p>

                <button class="catalog__item-add">Добавить в корзину</button>

                <div class="catalog__item-control">
                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-favorite"><use xlink:href="images/sprite.svg#icon-product-favorite"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-diff"><use xlink:href="images/sprite.svg#icon-product-diff"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-view"><use xlink:href="images/sprite.svg#icon-product-view"></use></svg>
                    </a>

                </div><!--catalog__item-control-->

            </div><!--catalog__item-->

            <div class="catalog__item">
                <a href="#" class="catalog__item-photo">
                    <img src="images/catalog/product-8.png" alt="Фото">
                </a>

                <span class="catalog__item-tag">new</span>

                <a href="#" class="catalog__item-title">
                    Механическая игровая
                    клавиатура с подсветкой
                </a>

                <div class="catalog__item-rating">
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                    <svg class="svg-icon icon-star"><use xlink:href="images/sprite.svg#icon-star"></use></svg>
                </div><!--catalog__item-rating-->

                <p class="catalog__item-status">
                    В наличии
                </p>

                <p class="catalog__item-price">
                    13 500 ₸
                </p>

                <p class="catalog__item-price catalog__item-price_old">
                    16 000 ₸
                </p>

                <button class="catalog__item-add">Добавить в корзину</button>

                <div class="catalog__item-control">
                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-favorite"><use xlink:href="images/sprite.svg#icon-product-favorite"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-diff"><use xlink:href="images/sprite.svg#icon-product-diff"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-view"><use xlink:href="images/sprite.svg#icon-product-view"></use></svg>
                    </a>

                </div><!--catalog__item-control-->

            </div><!--catalog__item-->

        </div><!--catalog__list-->

    </section><!--catalog-->

@endsection