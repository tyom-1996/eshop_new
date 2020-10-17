@extends('layouts.app')

@section('content')

    <section class="page content">
        <div class="pager">
            <a href="#">Главная</a>
            <i>/</i>
            <a href="#">Личный кабинет</a>
            <i>/</i>
            <span>мой профиль</span>
        </div><!--pager-->

        <div class="personal spacer_top">
            <aside class="personal__aside">
                <div class="personal__links">
                    <a href="/personal_area" class="personal__link active">
                        <svg class="svg-icon icon-personal-link-1"><use xlink:href="images/sprite.svg#icon-personal-link-1"></use></svg>
                        <span>Мой профиль</span>
                    </a>

                    <a href="/order_history" class="personal__link">
                        <svg class="svg-icon icon-personal-link-2"><use xlink:href="images/sprite.svg#icon-personal-link-2"></use></svg>
                        <span>История заказов</span>
                    </a>

                    <a href="/personal-password" class="personal__link">
                        <svg class="svg-icon icon-personal-link-3"><use xlink:href="images/sprite.svg#icon-personal-link-3"></use></svg>
                        <span>Смена пароля</span>
                    </a>

                </div><!--personal__links-->

            </aside>

            <div class="personal__content">
                <form action=".php" class="personal__data">
                    <div class="personal__data-fields spacer_top">
                        <label class="form__label">
                            <span class="form__label-title">Фамилия</span>
                            <input type="text" name="surname" class="form__field" placeholder="Введите фамилию">
                        </label>

                        <label class="form__label">
                            <span class="form__label-title">Имя</span>
                            <input type="text" name="name" class="form__field" placeholder="Введите имя">
                        </label>

                        <label class="form__label">
                            <span class="form__label-title">Телефон</span>
                            <input type="text" name="phone" class="form__field" placeholder="Номер телефона">
                        </label>

                        <label class="form__label">
                            <span class="form__label-title">Почта</span>
                            <input type="text" name="email" class="form__field" placeholder="Укажите почту">
                        </label>

                    </div><!--personal__data-fields-->

                    <button class="yellow-btn form__btn">Сохранить</button>

                </form>

            </div><!--personal__content-->

        </div><!--personal-->

    </section><!--page-->
@endsection
    