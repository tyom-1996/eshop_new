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

@endsection