@extends('layouts.app')

   @section('content')


    <section class="page content">
        <div class="pager">
            <a href="#">Главная</a>
            <i>/</i>
            <span>Сравнение товаров</span>
        </div><!--pager-->

        <div class="diff">
            <div class="diff__list flex-container">
                <div class="diff__item">
                    <a href="#" class="diff__item-photo">
                        <img src="images/products/product-1/basket-preview.png" alt="Ноутбук Lenovo G505s">
                    </a><!--diff__item-photo-->

                    <div class="diff__item-top">
                        <a href="#" class="diff__item-link">Ноутбук Lenovo G505s</a>
                        <p class="diff__item-price">147 500 ₸</p>
                        <span class="diff__item-delete">
                            <svg class="svg-icon icon-delete"><use xlink:href="images/sprite.svg#icon-delete"></use></svg>
                        </span>
                    </div><!--diff__item-top-->

                    <ul class="diff__item-params">
                        <li class="diff__item-param">
                            <p class="diff__item-param-title">Диагональ экрана</p>
                            <p class="diff__item-param-desc">15.6"</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-title">разрешение экрана</p>
                            <p class="diff__item-param-desc">1366 x 768</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-title">видеокарта</p>
                            <p class="diff__item-param-desc">Radeon HD 8570M</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-title">процессор</p>
                            <p class="diff__item-param-desc">A10-5750M</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-title">оперативная память</p>
                            <p class="diff__item-param-desc">4 ГБ DDR3L</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-title">жесткий диск</p>
                            <p class="diff__item-param-desc">1 ТБ HDD</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-title">ТВЕРДОТЕЛЬНЫЙ НАКОПИТЕЛЬ</p>
                            <p class="diff__item-param-desc">Отсутствует</p>
                        </li>

                    </ul>

                </div><!--diff__item-->

                <div class="diff__item">
                    <a href="#" class="diff__item-photo">
                        <img src="images/products/product-2/basket-preview.png" alt="Ноутбук Lenovo G505s">
                    </a><!--diff__item-photo-->

                    <div class="diff__item-top">
                        <a href="#" class="diff__item-link">Нетбук Lenovo Slim 1-11AST-05</a>
                        <p class="diff__item-price">220 800 ₸</p>
                        <span class="diff__item-delete">
                            <svg class="svg-icon icon-delete"><use xlink:href="images/sprite.svg#icon-delete"></use></svg>
                        </span>
                    </div><!--diff__item-top-->

                    <ul class="diff__item-params">
                        <li class="diff__item-param">
                            <p class="diff__item-param-desc">11"</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-desc">1366 x 768</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-desc">Radeon R3</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-desc">AMD 9120e</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-desc">4 ГБ DDR4</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-desc">Отсутствует</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-desc">64 ГБ SSD</p>
                        </li>

                    </ul>

                </div><!--diff__item-->

                <div class="diff__item">
                    <a href="#" class="diff__item-photo">
                        <img src="images/products/product-3/basket-preview.png" alt="Ноутбук Lenovo G505s">
                    </a><!--diff__item-photo-->

                    <div class="diff__item-top">
                        <a href="#" class="diff__item-link">Нетбук Lenovo Slim 1-11AST-05</a>
                        <p class="diff__item-price">220 800 ₸</p>
                        <span class="diff__item-delete">
                            <svg class="svg-icon icon-delete"><use xlink:href="images/sprite.svg#icon-delete"></use></svg>
                        </span>
                    </div><!--diff__item-top-->

                    <ul class="diff__item-params">
                        <li class="diff__item-param">
                            <p class="diff__item-param-desc">11"</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-desc">1366 x 768</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-desc">Radeon R3</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-desc">AMD 9120e</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-desc">4 ГБ DDR4</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-desc">Отсутствует</p>
                        </li>

                        <li class="diff__item-param">
                            <p class="diff__item-param-desc">64 ГБ SSD</p>
                        </li>

                    </ul>

                </div><!--diff__item-->

            </div><!--diff__list-->

        </div><!--diff-->

    </section><!--page-->


@endsection


    