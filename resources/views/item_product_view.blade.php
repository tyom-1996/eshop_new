@extends('layouts.app')

@section('content')

    <section class="page page_product content">

        <div class="pager">
            <a href="{{ url('/') }}">Главная</a>
            <i>/</i>
            <a href="#">Каталог</a>
            <i>/</i>
            <a href="{{ url('/category/'.preg_replace('/\s+/', '_', $item_product->product_category[0]->name)) }}">{!! $item_product->product_category[0]->name !!}</a>
            <i>/</i>
            <span>{!! $item_product->name !!}</span>
        </div><!--pager-->

        <div class="product spacer_top">
            <div class="product__slider">
                <div class="product__slides owl-carousel">
                    @php
                        $photo = json_decode($item_product->photo);
                    @endphp
                    @foreach ($photo as $key => $img)

                        <div class="product__slide" data-index="{!! $key !!}">
                            <img src="{!! Voyager::Image($img) !!}" alt="Слайд">
                        </div><!--product__slide-->

                    @endforeach

                    {{-- <div class="product__slide" data-index="1">
                        <img src="images/products/product-1/slide-1.png" alt="Слайд">
                    </div><!--product__slide--> --}}

                </div><!--product__slides-->

                <div class="product__previews">
                    <div class="product__previews-slides owl-carousel">

                        @foreach ($photo as $key => $img)
                            
                            <div class="product__preview {!! $key == 0 ? 'active' : '' !!}" data-index="{!! $key !!}">
                                <img src="{!! Voyager::Image($img) !!}" alt="Превью">
                            </div><!--product__preview-->

                        @endforeach

                        {{-- <div class="product__preview" data-index="1">
                            <img src="images/products/product-1/preview-2.png" alt="Превью">
                        </div><!--product__preview--> --}}

                    </div><!--product__previews-slides-->

                    <span class="product__previews-prev">
                        <svg class="svg-icon icon-product-prev"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-prev"></use></svg>
                    </span>

                    <span class="product__previews-next">
                        <svg class="svg-icon icon-product-next"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-next"></use></svg>
                    </span>

                </div><!--product__previews-->

            </div><!--product__slider-->

            <div class="product__right">
                <h1>
                    {!! $item_product->name !!}
                </h1>

                <p class="product__status">
                    Доступность: <span class="avail">{!! $item_product->availability !!}</span>
                </p>

                <p class="product__index">
                    Код товара: <strong>{!! $item_product->code !!}</strong>
                </p>

                <div class="product__prices">
                    <p class="product__price">
                        {!! $item_product->price !!} ₸
                    </p>

                    <p class="product__price product__price_old">
                        {!! $item_product->old_price !!} ₸
                    </p>

                </div><!--product__prices-->

                @if (!empty($item_product->color))
                    <div class="colors">
                        <p class="colors__title">
                            Выберите цвет:
                        </p>
                            
                            @php
                                $color = json_decode($item_product->color);
                            @endphp
                            <div class="colors__list">

                                @foreach ($color as $key => $img)

                                    <div class="colors__color  {!! $key == 0 ? 'active' : '' !!}">
                                        <img src="{!! Voyager::Image($img) !!}" alt="Цвет">
                                    </div><!--colors__color-->

                                @endforeach    

                               {{--  <div class="colors__color">
                                    <img src="images/products/product-1/color-2.png" alt="Цвет">
                                </div><!--colors__color--> --}}

                            </div><!--colors__list-->

                    </div><!--colors-->
                @endif

                <div class="product__controls">
                    <div class="count">
                        <span class="count__minus"></span>
                        <span class="count__length">1</span>
                        <span class="count__plus"></span>
                    </div><!--count-->

                    <a href="#" class="product__favorite">
                        <svg class="svg-icon icon-favorite"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-favorite"></use></svg>
                        <span>В закладки</span>
                    </a>

                    <a href="#" class="product__diff">
                        <svg class="svg-icon icon-diff"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-diff"></use></svg>
                        <span>Сравнить</span>
                    </a>

                </div><!--product__controls-->

                <div class="product__btns spacer">
                    <button class="yellow-btn product__add">Добавить в корзину</button>
                    <button class="product__order">Быстрый заказ</button>
                </div><!--product__btns-->

                <div class="product__bottom">
                    <div class="product__bottom-col">
                        <div class="product__rating">

                            <div class="star-rating">
                                <fieldset>
                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding">5 stars</label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good">4 stars</label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor">2 stars</label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor">1 star</label>
                                </fieldset>
                            </div>
{{-- 
                            <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg>
                            <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg>
                            <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg>
                            <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg>
                            <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg> --}}
                        </div><!--product__rating-->

                    </div><!--product__bottom-col-->

                    <div class="product__bottom-col">
                        <p class="product__bottom-desc">18 отзывов</p>
                    </div><!--product__bottom-col-->

                    <div class="product__bottom-col">
                        <a href="#" class="product__bottom-link">Оставить отзыв</a>
                    </div><!--product__bottom-col-->

                </div><!--product__bottom-->

                <div class="tabs">
                    <div class="tabs__links">
                        <div class="spacer">
                            <a href="#" class="tabs__link active">Характеристики</a>
                            <a href="#" class="tabs__link">Описание</a>
                            <a href="#" class="tabs__link">Отзывы <i>(18)</i></a>
                            <a href="#" class="tabs__link">Доставка и оплата</a>
                        </div><!--spacer-->

                    </div><!--tabs__links-->

                    <div class="tabs__list">
                        <div class="tab active">
                            <p class="product__desc">
                                <strong>{!! $item_product->name !!}</strong> — {!! $item_product->specifications !!}
                            </p>

                        </div><!--tab-->

                        <div class="tab">
                            <div class="product__params">
                                <div class="product__params-block">
                                    <p class="product__params-title">
                                        Общие характеристики
                                    </p>

                                    <ul class="product__params-list">
                                        <li>
                                            <span>Тип</span>
                                            <span>Ноутбук</span>
                                        </li>

                                        <li>
                                            <span>Операционная система</span>
                                            <span>DOS</span>
                                        </li>

                                        <li>
                                            <span>Модель</span>
                                            <span>Lenovo G505s</span>
                                        </li>

                                    </ul>

                                </div><!--product__params-block-->

                                <div class="product__params-block">
                                    <p class="product__params-title">
                                        Внешний вид
                                    </p>

                                    <ul class="product__params-list">
                                        <li>
                                            <span>Цвет</span>
                                            <span>Черный</span>
                                        </li>

                                    </ul>

                                </div><!--product__params-block-->

                                <div class="product__params-block">
                                    <p class="product__params-title">
                                        Экран
                                    </p>

                                    <ul class="product__params-list">
                                        <li>
                                            <span>Тип экрана</span>
                                            <span>TN+film</span>
                                        </li>

                                        <li>
                                            <span>Диагональ экрана</span>
                                            <span>15.6"</span>
                                        </li>

                                        <li>
                                            <span>Разрешение экрана</span>
                                            <span>1366x768</span>
                                        </li>

                                        <li>
                                            <span>Название формата</span>
                                            <span>HD</span>
                                        </li>

                                        <li>
                                            <span>Плотность пикселей</span>
                                            <span>101 PPI</span>
                                        </li>

                                    </ul>

                                </div><!--product__params-block-->

                                <div class="product__params-block">
                                    <p class="product__params-title">
                                        Процессор
                                    </p>

                                    <ul class="product__params-list">
                                        <li>
                                            <span>Производитель процессора</span>
                                            <span>AMD</span>
                                        </li>

                                        <li>
                                            <span>Линейка процессора</span>
                                            <span>AMD A10</span>
                                        </li>

                                        <li>
                                            <span>Модель процессора</span>
                                            <span>A10-5750M</span>
                                        </li>

                                        <li>
                                            <span>Количество ядер процессора</span>
                                            <span>4</span>
                                        </li>

                                        <li>
                                            <span>Частота</span>
                                            <span>2.5 ГГц</span>
                                        </li>

                                    </ul>

                                </div><!--product__params-block-->

                            </div><!--product__params-->

                        </div><!--tab-->

                        <div class="tab">
                            <div class="reviews">
                                <div class="review">
                                    <div class="review__top">
                                        <div class="review__photo">
                                            <svg class="svg-icon icon-user-default"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-user-default"></use></svg>
                                        </div><!--review__photo-->

                                        <p class="review__name">Виталий Наумов</p>
                                        <p class="review__date">08.09.2020</p>

                                        <div class="review__rating">
                                            <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg>
                                            <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg>
                                            <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg>
                                            <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg>
                                            <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg>
                                        </div><!--product__rating-->

                                    </div><!--review__top-->

                                    <p class="review__time">
                                        <strong>Срок использования:</strong>
                                        Полгода
                                    </p>

                                    <div class="review__text">
                                        <p class="review__title">
                                            Достоинства:
                                        </p>

                                        <p class="review__desc">
                                            Цена, производительность, дизайн. Очень
                                            тихий, СТАРТУЕТ быстро:) , звук отличный
                                            (как для ноута), можно поработать и поиграть
                                            без слез и нервов)
                                        </p>

                                    </div><!--review__text-->

                                    <div class="review__text">
                                        <p class="review__title">
                                            Недостатки:
                                        </p>

                                        <p class="review__desc">
                                            Критичных нет,есть небольшие недочеты.
                                        </p>

                                    </div><!--review__text-->

                                    <div class="review__text">
                                        <p class="review__title">
                                            Комментарии:
                                        </p>

                                        <p class="review__desc">
                                            Больше профессиональный ноутбук чем игровой,
                                            но и с большинством игр справляется, плюс есть
                                            возможность игры AAA категорий.
                                        </p>

                                        <p class="review__desc">
                                            Всё таки следует отметить, что видеокарта очень
                                            хорошая, но драйвер ужасен и другого нет (спросил,
                                            написали сами разработчики AMD).
                                        </p>

                                        <p class="review__desc">
                                            Несмотря на минусы, рекомендую к покупке,
                                            поскольку относительно его цены, чуть ли не
                                            идеален, самый лучший виз возможных, не уступает
                                            порой даже игровым.
                                        </p>

                                    </div><!--review__text-->

                                </div><!--review-->

                                <div class="review">
                                    <div class="review__top">
                                        <div class="review__photo">
                                            <svg class="svg-icon icon-user-default"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-user-default"></use></svg>
                                        </div><!--review__photo-->

                                        <p class="review__name">Виталий Наумов</p>
                                        <p class="review__date">08.09.2020</p>

                                        <div class="review__rating">
                                            <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg>
                                            <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg>
                                            <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg>
                                            <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg>
                                            <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-star"></use></svg>
                                        </div><!--product__rating-->

                                    </div><!--review__top-->

                                    <p class="review__time">
                                        <strong>Срок использования:</strong>
                                        Полгода
                                    </p>

                                    <div class="review__text">
                                        <p class="review__title">
                                            Достоинства:
                                        </p>

                                        <p class="review__desc">
                                            Цена, производительность, дизайн. Очень
                                            тихий, СТАРТУЕТ быстро:) , звук отличный
                                            (как для ноута), можно поработать и поиграть
                                            без слез и нервов)
                                        </p>

                                    </div><!--review__text-->

                                    <div class="review__text">
                                        <p class="review__title">
                                            Недостатки:
                                        </p>

                                        <p class="review__desc">
                                            Критичных нет,есть небольшие недочеты.
                                        </p>

                                    </div><!--review__text-->

                                    <div class="review__text">
                                        <p class="review__title">
                                            Комментарии:
                                        </p>

                                        <p class="review__desc">
                                            Больше профессиональный ноутбук чем игровой,
                                            но и с большинством игр справляется, плюс есть
                                            возможность игры AAA категорий.
                                        </p>

                                        <p class="review__desc">
                                            Всё таки следует отметить, что видеокарта очень
                                            хорошая, но драйвер ужасен и другого нет (спросил,
                                            написали сами разработчики AMD).
                                        </p>

                                        <p class="review__desc">
                                            Несмотря на минусы, рекомендую к покупке,
                                            поскольку относительно его цены, чуть ли не
                                            идеален, самый лучший виз возможных, не уступает
                                            порой даже игровым.
                                        </p>

                                    </div><!--review__text-->

                                </div><!--review-->

                            </div><!--reviews-->

                        </div><!--tab-->

                        <div class="tab">
                            <div class="shipping">
                                <div class="shipping__item">
                                    <svg class="svg-icon icon-shipping-1"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-shipping-1"></use></svg>
                                    <p class="shipping__title">
                                        Самовывоз
                                    </p>

                                    <p class="shipping__desc">
                                        г. Алматы, Бостандыкский район, проспект Абая , 138/2,
                                        3 этаж, 4 офис
                                    </p>

                                </div><!--shipping__item-->

                                <div class="shipping__item">
                                    <svg class="svg-icon icon-shipping-2"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-shipping-2"></use></svg>
                                    <p class="shipping__title">
                                        Самовывоз
                                    </p>

                                    <p class="shipping__desc">
                                        По городу Алматы и Алматинской области доставка
                                        осуществляется в течении 2-3 дней, стоимость
                                        доставки составляет 700 тг.
                                    </p>

                                </div><!--shipping__item-->

                                <div class="shipping__item">
                                    <svg class="svg-icon icon-shipping-3"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-shipping-3"></use></svg>
                                    <p class="shipping__title">
                                        Самовывоз
                                    </p>

                                    <p class="shipping__desc">
                                        По городу Алматы и Алматинской области доставка
                                        осуществляется в течении 2-3 дней, стоимость
                                        доставки составляет 2000 тг.
                                    </p>

                                </div><!--shipping__item-->

                            </div><!--shipping-->

                        </div><!--tab-->

                    </div><!--tabs__list-->

                </div><!--tabs-->

            </div><!--product__right-->

        </div><!--product-->

    </section><!--page-->


    <section class="catalog content">
        <h2>
            рекомендуем
        </h2>

        <div class="catalog__list flex-container">
            @foreach ($products as $product)

                @php
                    $photo = json_decode($product->photo)[0];
                @endphp
                
                <div class="catalog__item" data-value="{{ $product->id }}">
                    <a href="{{ url('/item_product_view/' . $product->id) }}" class="catalog__item-photo">
                        <img src="{{ asset('/storage/' . $photo) }}" alt="Фото">
                    </a>

                    <a href="{{ url('/item_product_view/' . $product->id) }}" class="catalog__item-title">
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
                    <button class="catalog__item-add p_item_add">Добавить в корзину</button>

                    <div class="catalog__item-control">
                        <a href="#" class="catalog__item-link">
                            <svg class="svg-icon icon-product-favorite"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-favorite"></use></svg>
                        </a>

                        <a href="#" class="catalog__item-link">
                            <svg class="svg-icon icon-product-diff"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-diff"></use></svg>
                        </a>

                        <a href="{{ url('/item_product_view/' . $product->id) }}" class="catalog__item-link">
                            <svg class="svg-icon icon-product-view"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-view"></use></svg>
                        </a>

                    </div><!--catalog__item-control-->

                </div><!--catalog__item-->
            @endforeach

        </div><!--catalog__list-->

    </section><!--catalog-->

    <section class="catalog catalog_second content">
        <h2>
            рекомендуем
        </h2>

        <div class="catalog__list flex-container">

            @foreach ($new_products as $new_pro)

                @php
                    $photo = json_decode($new_pro->photo)[0];
                @endphp
                
                <div class="catalog__item" data-value="{{ $new_pro->id }}">
                    <a href="{{ url('/item_product_view/' . $new_pro->id) }}" class="catalog__item-photo">
                        <img src="{{ asset('/storage/' . $photo) }}" alt="Фото">
                    </a>

                    <span class="catalog__item-tag">new</span>

                    <a href="{{ url('/item_product_view/' . $new_pro->id) }}" class="catalog__item-title">
                        {{ $new_pro->title }}
                    </a>

                    <div class="catalog__item-rating">
                        <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                        <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                        <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                        <svg class="svg-icon icon-star active"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                        <svg class="svg-icon icon-star"><use xlink:href="{{ asset('main_front/images/sprite.svg#icon-star') }}"></use></svg>
                    </div><!--catalog__item-rating-->

                    <p class="catalog__item-status">
                        {{ $new_pro->availability }}
                    </p>

                    <p class="catalog__item-price">
                        {{ $new_pro->price }} ₸
                    </p>

                    <p class="catalog__item-price catalog__item-price_old">
                        {{ $new_pro->old_price }} ₸
                    </p>
                    <button class="catalog__item-add p_item_add">Добавить в корзину</button>

                    <div class="catalog__item-control">
                        <a href="#" class="catalog__item-link">
                            <svg class="svg-icon icon-product-favorite"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-favorite"></use></svg>
                        </a>

                        <a href="#" class="catalog__item-link">
                            <svg class="svg-icon icon-product-diff"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-diff"></use></svg>
                        </a>

                        <a href="{{ url('/item_product_view/' . $new_pro->id) }}" class="catalog__item-link">
                            <svg class="svg-icon icon-product-view"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-product-view"></use></svg>
                        </a>

                    </div><!--catalog__item-control-->

                </div><!--catalog__item-->
            @endforeach

        </div><!--catalog__list-->

    </section><!--catalog-->
   
@endsection