@extends('layouts.app')

   @section('content')





    <section class="page content">
        <div class="pager">
            <a href="#">Главная</a>
            <i>/</i>
            <span>корзина</span>
        </div><!--pager-->

        <div class="basket">
            <div class="basket__table">
                <div class="basket__table-header">
                    <div class="basket__table-col">
                        Товар
                    </div><!--basket__table-col-->

                    <div class="basket__table-col">
                        Доступность
                    </div><!--basket__table-col-->

                    <div class="basket__table-col">
                        Количество
                    </div><!--basket__table-col-->

                    <div class="basket__table-col">
                        Цена
                    </div><!--basket__table-col-->

                </div><!--basket__table-header-->




 @foreach ($product as $cat)

                <div class="basket__item">
                    <div class="basket__table-col">
                        <div class="basket__item-photo">

                            <img class="pos-center" src="" alt="Ноутбук Lenovo G505s">
                        </div><!--basket__item-photo-->

                        <div class="basket__item-info">
                            <p class="basket__item-title">
                                 {{$cat->name}}
                            </p>

                            <p class="basket__item-param">
                                Код товара: <strong> {{$cat->code}}</strong>
                            </p>

                            <a href="#" class="basket__item-link">Перейти к товару</a>

                        </div><!--basket__item-info-->

                    </div><!--basket__table-col-->

                    <div class="basket__table-col">
                        <p class="basket__item-status">
                            {{$cat->availability}}
                        </p>

                    </div><!--basket__table-col-->

                    <div class="basket__table-col">
                        <div class="count">
                            <span class="count__minus"></span>
                            <span class="count__length">1</span>
                            <span class="count__plus"></span>
                        </div><!--count-->

                    </div><!--basket__table-col-->

                    <div class="basket__table-col">
                        <p class="basket__item-price">
                           {{$cat->price}}<span> ₸</span>
                        </p>

                        <span class="basket__item-delete">
                            <svg class="svg-icon icon-delete"><use xlink:href="images/sprite.svg#icon-delete"></use></svg>
                        </span>

                    </div><!--basket__table-col-->

                </div><!--basket__item-->


            </div><!--basket__table-->

     @endforeach


            <div class="basket__result">
                <p class="basket__result-sum">
                    Итого: <strong>295 000 ₸ </strong>
                </p>

                <button class="yellow-btn basket__btn">Оформить заказ</button>

            </div><!--basket-->

        </div><!--basket-->

    </section><!--page-->





   
@endsection