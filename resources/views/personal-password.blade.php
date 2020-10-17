@extends('layouts.app')

@section('content')

    <section class="page content">
        <div class="pager">
            <a href="#">Главная</a>
            <i>/</i>
            <a href="#">Личный кабинет</a>
            <i>/</i>
            <span>Смена пароля</span>
        </div><!--pager-->

        <div class="personal spacer_top">
            <aside class="personal__aside">
                <div class="personal__links">
                    <a href="/personal_area" class="personal__link">
                        <svg class="svg-icon icon-personal-link-1"><use xlink:href="images/sprite.svg#icon-personal-link-1"></use></svg>
                        <span>Мой профиль</span>
                    </a>

                    <a href="/order_history" class="personal__link">
                        <svg class="svg-icon icon-personal-link-2"><use xlink:href="images/sprite.svg#icon-personal-link-2"></use></svg>
                        <span>История заказов</span>
                    </a>

                    <a href="/personal-password" class="personal__link active">
                        <svg class="svg-icon icon-personal-link-3"><use xlink:href="images/sprite.svg#icon-personal-link-3"></use></svg>
                        <span>Смена пароля</span>
                    </a>

                </div><!--personal__links-->

            </aside>

            <div class="personal__content">
                <form action=".php" class="personal__password">
                    <label class="form__label">
                        <span class="form__label-title">Старый пароль</span>
                        <input type="password" name="oldPass" class="form__field" placeholder="Введите пароль">
                    </label>

                    <label class="form__label">
                        <span class="form__label-title">Новый пароль</span>
                        <input type="password" name="newPass" class="form__field" placeholder="Введите пароль">
                    </label>

                    <label class="form__label">
                        <span class="form__label-title">Повторите пароль</span>
                        <input type="password" name="repeatPass" class="form__field" placeholder="Введите пароль">
                    </label>

                    <button class="yellow-btn form__btn">Сохранить</button>

                </form>

            </div><!--personal__content-->

        </div><!--personal-->

    </section><!--page-->

    @endsection