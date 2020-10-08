@extends('layouts.app')

@section('content')
	
	<section class="main">
        <div class="main__slides owl-carousel">
            <div class="main__slide">
                <div class="content">
                    <div class="main__slide-left">
                        <p class="main__slide-title">
                            сборка компьютера
                        </p>

                        <p class="main__slide-desc">
                            мы поможем подобрать сборку по вашим параметрам
                        </p>

                        <a href="#" class="blue-btn main__slide-link">подробнее</a>

                    </div><!--main__slide-left-->

                    <div class="main__slide-photo">
                        <img src="images/main-slider/slide-1.png" alt="Слайд">
                    </div><!--main__slide-photo-->

                </div><!--content-->

                <i class="main__slide-bg"></i>

            </div><!--main__slide-->

            <div class="main__slide">
                <div class="content">
                    <div class="main__slide-left">
                        <p class="main__slide-title">
                            сборка компьютера
                        </p>

                        <p class="main__slide-desc">
                            мы поможем подобрать сборку по вашим параметрам
                        </p>

                        <a href="#" class="blue-btn main__slide-link">подробнее</a>

                    </div><!--main__slide-left-->

                    <div class="main__slide-photo">
                        <img src="images/main-slider/slide-1.png" alt="Слайд">
                    </div><!--main__slide-photo-->

                </div><!--content-->

                <i class="main__slide-bg"></i>

            </div><!--main__slide-->

            <div class="main__slide">
                <div class="content">
                    <div class="main__slide-left">
                        <p class="main__slide-title">
                            сборка компьютера
                        </p>

                        <p class="main__slide-desc">
                            мы поможем подобрать сборку по вашим параметрам
                        </p>

                        <a href="#" class="blue-btn main__slide-link">подробнее</a>

                    </div><!--main__slide-left-->

                    <div class="main__slide-photo">
                        <img src="images/main-slider/slide-1.png" alt="Слайд">
                    </div><!--main__slide-photo-->

                </div><!--content-->

                <i class="main__slide-bg"></i>

            </div><!--main__slide-->

        </div><!--main__slides-->

        <div class="main__control content">
            <span class="main__control-prev">
                <svg class="svg-icon icon-slider-prev"><use xlink:href="images/sprite.svg#icon-slider-prev"></use></svg>
            </span>

            <span class="main__control-next">
                <svg class="svg-icon icon-slider-next"><use xlink:href="images/sprite.svg#icon-slider-next"></use></svg>
            </span>

        </div><!--main__control-->

    </section><!--main-->

    <section class="action">
        <div class="content">
            <p>
                E-shop отправляет 1% от продаж на благотворительность
            </p>

        </div><!--content-->

    </section><!--action-->

    <section class="categories content">
        <h2>
            категории товаров
        </h2>

        <div class="categories__list flex-container">
            <div class="category category_1">
                <a href="#" class="category__title">компьютеры</a>
                <div class="category__links">
                    <a href="#" class="category__link">игровые</a>
                    <a href="#" class="category__link">офисные</a>
                    <a href="#" class="category__link">эксклюзивные</a>
                    <a href="#" class="category__link">Дизайнерам</a>
                </div><!--category__links-->

                <i class="category__bg category__bg_1"></i>

            </div><!--category-->

            <div class="category category_2">
                <a href="#" class="category__title">комплектующие</a>
                <div class="category__links">
                    <a href="#" class="category__link">материнские платы</a>
                    <a href="#" class="category__link">процессоры</a>
                    <a href="#" class="category__link">Оперативная память (ОЗУ)</a>
                    <a href="#" class="category__link">видеокарта</a>
                    <a href="#" class="category__link">HDD диски</a>
                    <a href="#" class="category__link">SSD диски</a>
                    <a href="#" class="category__link">охлаждение</a>
                    <a href="#" class="category__link">блок питания</a>
                    <a href="#" class="category__link">корпусы</a>
                </div><!--category__links-->

                <i class="category__bg category__bg_2"></i>

            </div><!--category-->

            <div class="category category_3">
                <a href="#" class="category__title">перифирия</a>
                <div class="category__links">
                    <a href="#" class="category__link">кронштейны для мониторов</a>
                    <a href="#" class="category__link">мониторы</a>
                    <a href="#" class="category__link">клавиатуры</a>
                    <a href="#" class="category__link">мыши</a>
                    <a href="#" class="category__link">носители информации</a>
                    <a href="#" class="category__link">мультимедиа</a>
                </div><!--category__links-->

                <i class="category__bg category__bg_3"></i>

            </div><!--category-->

            <div class="category category_4">
                <a href="#" class="category__title">ноутбуки</a>
                <div class="category__links">
                    <a href="#" class="category__link">игровые ноутбуки</a>
                    <a href="#" class="category__link">офисные ноутбуки</a>
                    <a href="#" class="category__link">ультрабук</a>
                </div><!--category__links-->

                <i class="category__bg category__bg_4"></i>

            </div><!--category-->

        </div><!--categories__list-->

    </section><!--categories-->

    <section class="app">
        <div class="content">
            <p class="app__title">
                Мы также предоставляем услуги сервисного обслуживания:
            </p>

            <ul class="app__services">
                <li>ремонт компьютеров и ноутбуков</li>
                <li>гарантийное обслуживание</li>
            </ul>

            <button class="app__btn">Оставить заявку</button>

        </div><!--content-->

    </section><!--app-->

    <section class="brands">
        <div class="content">
            <div class="brands__slider">
                <ul class="brands__slides owl-carousel">
                    <li class="brand va-middle">
                        <img src="images/brands/logo-1.png" alt="Лого">
                    </li>

                    <li class="brand va-middle">
                        <img src="images/brands/logo-2.png" alt="Лого">
                    </li>

                    <li class="brand va-middle">
                        <img src="images/brands/logo-3.png" alt="Лого">
                    </li>

                    <li class="brand va-middle">
                        <img src="images/brands/logo-4.png" alt="Лого">
                    </li>

                    <li class="brand va-middle">
                        <img src="images/brands/logo-5.png" alt="Лого">
                    </li>

                    <li class="brand va-middle">
                        <img src="images/brands/logo-1.png" alt="Лого">
                    </li>

                    <li class="brand va-middle">
                        <img src="images/brands/logo-2.png" alt="Лого">
                    </li>

                    <li class="brand va-middle">
                        <img src="images/brands/logo-3.png" alt="Лого">
                    </li>

                    <li class="brand va-middle">
                        <img src="images/brands/logo-4.png" alt="Лого">
                    </li>

                    <li class="brand va-middle">
                        <img src="images/brands/logo-5.png" alt="Лого">
                    </li>

                </ul>

                <span class="brands__control-prev">
                    <svg class="svg-icon icon-brands-prev"><use xlink:href="images/sprite.svg#icon-brands-prev"></use></svg>
                </span>

                <span class="brands__control-next">
                    <svg class="svg-icon icon-brands-next"><use xlink:href="images/sprite.svg#icon-brands-next"></use></svg>
                </span>

            </div><!--brands__slider-->

        </div><!--content-->

    </section><!--brands-->

    <section class="catalog content">
        <h2>
            рекомендуем
        </h2>

        <div class="catalog__list flex-container">
            @foreach ($products as $product)
                {{ $product }}
                <div class="catalog__item">
                    <a href="#" class="catalog__item-photo">
                        <img src="images/catalog/product-1.png" alt="Фото">
                    </a>

                    <a href="#" class="catalog__item-title">
                        {{ $product->title }}
                    </a>

                    <div class="catalog__item-rating">
                        <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                        <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                        <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                        <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                        <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    </div><!--catalog__item-rating-->

                    <p class="catalog__item-status">
                        {{ $product->availability }}
                    </p>

                    <p class="catalog__item-price">
                        {{ $product->price }} ₸
                    </p>

                    <p class="catalog__item-price catalog__item-price_old">
                        {{ $product->old_price }} ₸
                    </p>

                    <button class="catalog__item-add">Добавить в корзину</button>

                    <div class="catalog__item-control">
                        <a href="#" class="catalog__item-link">
                            <svg class="svg-icon icon-product-favorite"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-favorite"></use></svg>
                        </a>

                        <a href="#" class="catalog__item-link">
                            <svg class="svg-icon icon-product-diff"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-diff"></use></svg>
                        </a>

                        <a href="#" class="catalog__item-link">
                            <svg class="svg-icon icon-product-view"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-view"></use></svg>
                        </a>

                    </div><!--catalog__item-control-->

                </div><!--catalog__item-->
            @endforeach






{{-- 
            <div class="catalog__item">
                <a href="#" class="catalog__item-photo">
                    <img src="images/catalog/product-2.png" alt="Фото">
                </a>

                <a href="#" class="catalog__item-title">
                    USB-гарнитура с настраиваемой
                    Razer Chroma подсветкой ушек
                </a>

                <div class="catalog__item-rating">
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                </div><!--catalog__item-rating-->

                <p class="catalog__item-status">
                    В наличии
                </p>

                <p class="catalog__item-price">
                    28 500 ₸
                </p>

                <button class="catalog__item-add">Добавить в корзину</button>

                <div class="catalog__item-control">
                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-favorite"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-favorite"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-diff"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-diff"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-view"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-view"></use></svg>
                    </a>

                </div><!--catalog__item-control-->

            </div><!--catalog__item-->

            <div class="catalog__item">
                <a href="#" class="catalog__item-photo">
                    <img src="images/catalog/product-3.png" alt="Фото">
                </a>

                <a href="#" class="catalog__item-title">
                    Механическая игровая
                    клавиатура с подсветкой
                </a>

                <div class="catalog__item-rating">
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                </div><!--catalog__item-rating-->

                <p class="catalog__item-status">
                    В наличии
                </p>

                <p class="catalog__item-price">
                    13 500 ₸
                </p>

                <button class="catalog__item-add">Добавить в корзину</button>

                <div class="catalog__item-control">
                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-favorite"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-favorite"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-diff"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-diff"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-view"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-view"></use></svg>
                    </a>

                </div><!--catalog__item-control-->

            </div><!--catalog__item-->

            <div class="catalog__item">
                <a href="#" class="catalog__item-photo">
                    <img src="images/catalog/product-4.png" alt="Фото">
                </a>

                <a href="#" class="catalog__item-title">
                    Механическая игровая
                    клавиатура с подсветкой
                </a>

                <div class="catalog__item-rating">
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
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
                        <svg class="svg-icon icon-product-favorite"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-favorite"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-diff"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-diff"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-view"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-view"></use></svg>
                    </a>

                </div><!--catalog__item-control-->

            </div><!--catalog__item-->

            <div class="catalog__item">
                <a href="#" class="catalog__item-photo">
                    <img src="images/catalog/product-5.png" alt="Фото">
                </a>

                <a href="#" class="catalog__item-title">
                    Механическая игровая
                    клавиатура с подсветкой
                </a>

                <div class="catalog__item-rating">
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
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
                        <svg class="svg-icon icon-product-favorite"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-favorite"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-diff"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-diff"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-view"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-view"></use></svg>
                    </a>

                </div><!--catalog__item-control-->

            </div><!--catalog__item-->

            <div class="catalog__item">
                <a href="#" class="catalog__item-photo">
                    <img src="images/catalog/product-6.png" alt="Фото">
                </a>

                <a href="#" class="catalog__item-title">
                    Механическая игровая
                    клавиатура с подсветкой
                </a>

                <div class="catalog__item-rating">
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
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
                        <svg class="svg-icon icon-product-favorite"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-favorite"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-diff"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-diff"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-view"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-view"></use></svg>
                    </a>

                </div><!--catalog__item-control-->

            </div><!--catalog__item-->

            <div class="catalog__item">
                <a href="#" class="catalog__item-photo">
                    <img src="images/catalog/product-7.png" alt="Фото">
                </a>

                <a href="#" class="catalog__item-title">
                    Механическая игровая
                    клавиатура с подсветкой
                </a>

                <div class="catalog__item-rating">
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
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
                        <svg class="svg-icon icon-product-favorite"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-favorite"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-diff"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-diff"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-view"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-view"></use></svg>
                    </a>

                </div><!--catalog__item-control-->

            </div><!--catalog__item-->

            <div class="catalog__item">
                <a href="#" class="catalog__item-photo">
                    <img src="images/catalog/product-8.png" alt="Фото">
                </a>

                <a href="#" class="catalog__item-title">
                    Механическая игровая
                    клавиатура с подсветкой
                </a>

                <div class="catalog__item-rating">
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
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
                        <svg class="svg-icon icon-product-favorite"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-favorite"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-diff"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-diff"></use></svg>
                    </a>

                    <a href="#" class="catalog__item-link">
                        <svg class="svg-icon icon-product-view"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-view"></use></svg>
                    </a>

                </div><!--catalog__item-control-->

            </div><!--catalog__item--> --}}

        </div><!--catalog__list-->

    </section><!--catalog-->

@endsection