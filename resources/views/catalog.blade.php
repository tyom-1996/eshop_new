@extends('layouts.app')

@section('content')

    <section class="page content">
        <div class="pager">
            <a href="#">Главная</a>
            <i>/</i>
            <a href="#">Каталог</a>
            <i>/</i>
            <span>Ноутбуки</span>
        </div><!--pager-->

        <div class="catalog-page spacer_top">
            <aside class="filter">
                <span class="filter__btn">
                    Фильтр <i></i>
                </span>

                <div class="filter__content">
                    <div class="filter__block open">
                        <p class="filter__block-title">
                            <span>Цена</span>
                            <svg class="svg-icon icon-filter-arrow"><use xlink:href="images/sprite.svg#icon-filter-arrow"></use></svg>
                        </p>

                        <div class="filter__block-content">
                            <div class="scale">
                                <div class="scale__prices">
                                    <div class="scale__price">
                                        <span class="scale__price-desc">от</span>
                                        <input type="text" class="scale__price-field" id="scaleFrom" value="150 000">
                                    </div><!--scale__price-->

                                    <div class="scale__price">
                                        <span class="scale__price-desc">до</span>
                                        <input type="text" class="scale__price-field" id="scaleTo" value="1 380 000">
                                    </div><!--scale__price-->

                                </div><!--scale__prices-->

                                <div id="scaleLine"></div>

                            </div><!--scale-->

                        </div><!--filter__block-content-->

                    </div><!--filter__block-->

                    <div class="filter__block open">
                        <p class="filter__block-title">
                            <span>Производитель</span>
                            <svg class="svg-icon icon-filter-arrow"><use xlink:href="images/sprite.svg#icon-filter-arrow"></use></svg>
                        </p>

                        <div class="filter__block-content">
                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="checkbox__btn">
                                    <svg class="svg-icon icon-check pos-center"><use xlink:href="images/sprite.svg#icon-check"></use></svg>
                                </span>
                                <span class="checkbox__title">ASUS</span>
                                <span class="checkbox__count">12</span>
                            </label>

                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="checkbox__btn">
                                    <svg class="svg-icon icon-check pos-center"><use xlink:href="images/sprite.svg#icon-check"></use></svg>
                                </span>
                                <span class="checkbox__title">Lenovo</span>
                                <span class="checkbox__count">16</span>
                            </label>

                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="checkbox__btn">
                                    <svg class="svg-icon icon-check pos-center"><use xlink:href="images/sprite.svg#icon-check"></use></svg>
                                </span>
                                <span class="checkbox__title">HP</span>
                                <span class="checkbox__count">21</span>
                            </label>

                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="checkbox__btn">
                                    <svg class="svg-icon icon-check pos-center"><use xlink:href="images/sprite.svg#icon-check"></use></svg>
                                </span>
                                <span class="checkbox__title">Dell</span>
                                <span class="checkbox__count">4</span>
                            </label>

                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="checkbox__btn">
                                    <svg class="svg-icon icon-check pos-center"><use xlink:href="images/sprite.svg#icon-check"></use></svg>
                                </span>
                                <span class="checkbox__title">Samsung</span>
                                <span class="checkbox__count">11</span>
                            </label>

                            <a href="#" class="filter__block-else">Показать еще</a>

                        </div><!--filter__block-content-->

                    </div><!--filter__block-->

                    <div class="filter__block open">
                        <p class="filter__block-title">
                            <span>Цвет</span>
                            <svg class="svg-icon icon-filter-arrow"><use xlink:href="images/sprite.svg#icon-filter-arrow"></use></svg>
                        </p>

                        <div class="filter__block-content">
                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="checkbox__btn">
                                    <svg class="svg-icon icon-check pos-center"><use xlink:href="images/sprite.svg#icon-check"></use></svg>
                                </span>
                                <span class="checkbox__title">Белый</span>
                            </label>

                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="checkbox__btn">
                                    <svg class="svg-icon icon-check pos-center"><use xlink:href="images/sprite.svg#icon-check"></use></svg>
                                </span>
                                <span class="checkbox__title">Серый</span>
                            </label>

                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="checkbox__btn">
                                    <svg class="svg-icon icon-check pos-center"><use xlink:href="images/sprite.svg#icon-check"></use></svg>
                                </span>
                                <span class="checkbox__title">Серебристый</span>
                            </label>

                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="checkbox__btn">
                                    <svg class="svg-icon icon-check pos-center"><use xlink:href="images/sprite.svg#icon-check"></use></svg>
                                </span>
                                <span class="checkbox__title">Розовый</span>
                            </label>

                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="checkbox__btn">
                                    <svg class="svg-icon icon-check pos-center"><use xlink:href="images/sprite.svg#icon-check"></use></svg>
                                </span>
                                <span class="checkbox__title">Черный</span>
                            </label>

                            <a href="#" class="filter__block-else">Показать еще</a>

                        </div><!--filter__block-content-->

                    </div><!--filter__block-->

                </div><!--filter__content-->

            </aside>

            <div class="catalog-page__content">
                <h1>
                    Ноутбуки
                </h1>

                <div class="catalog__panel">
                    <div class="catalog__types">
                        <a href="#" class="catalog__type">игровые</a>
                        <a href="#" class="catalog__type active">офисные</a>
                        <a href="#" class="catalog__type">эксклюзивные</a>
                        <a href="#" class="catalog__type">дизайнерам</a>
                    </div><!--catalog__types-->

                    <div class="catalog__panel-right">
                        <div class="catalog__view">
                            <a href="#" class="catalog__view-type active">
                                <svg class="svg-icon icon-view-type-1 pos-center"><use xlink:href="images/sprite.svg#icon-view-type-1"></use></svg>
                            </a>

                            <a href="#" class="catalog__view-type">
                                <svg class="svg-icon icon-view-type-2 pos-center"><use xlink:href="images/sprite.svg#icon-view-type-2"></use></svg>
                            </a>

                        </div><!--catalog__view-->

                        <div class="sort">
                            <p class="sort__title">Сортировать:</p>
                            <div class="select">
                                <p class="select__selected">По умолчанию</p>
                                <svg class="svg-icon icon-select-arrow"><use xlink:href="images/sprite.svg#icon-select-arrow"></use></svg>
                            </div><!--select-->

                        </div><!--sort-->

                    </div><!--catalog__panel-right-->

                </div><!--catalog__panel-->




                <div class="catalog__list flex-container">


    @if(empty($computers))
        @foreach ($computers as $computer)

        {{dd('computer')}}










        @endforeach
    @endif



     @if(empty($Laptop))
        @foreach ($Laptop as $Lap)


        {{dd('Lap')}}










        @endforeach
    @endif






     @if(empty($accessories))
        @foreach ($accessories as $accessori)

        {{dd('accessori')}}










        @endforeach
    @endif



     @if(empty($peripherals))
        @foreach ($peripherals as $peripheral)


        {{dd('peripherals')}}









        @endforeach
    @endif












    

                    <div class="catalog__item">
                        <a href="#" class="catalog__item-photo">
                            <img src="images/catalog/product-1.png" alt="Фото">
                        </a>

                        <a href="#" class="catalog__item-title">
                            USB-гарнитура с настраиваемой
                            Razer Chroma подсветкой ушек
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

                <div class="pages">
                    <a href="#" class="pages__link">1</a>
                    <span class="pages__link active">2</span>
                    <a href="#" class="pages__link">3</a>
                    <a href="#" class="pages__link">4</a>
                    <a href="#" class="pages__link">5</a>
                    <a href="#" class="pages__link">
                        <svg class="svg-icon icon-page-next"><use xlink:href="images/sprite.svg#icon-page-next"></use></svg>
                    </a>
                </div><!--pages-->

            </div><!--catalog__content-->

        </div><!--catalog-->

    </section><!--page-->
@endsection