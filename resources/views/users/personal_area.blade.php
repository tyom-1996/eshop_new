@extends('layouts.app')

@section('content')
    @if (empty(Session::get('id')))
            @php
                header("Location: " . URL::to('/sign_in'), true, 302);
                exit();
            @endphp
        @else
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
                            <a href="{{ url('/personal_area') }}" class="personal__link active">
                                <svg class="svg-icon icon-personal-link-1"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-personal-link-1"></use></svg>
                                <span>Мой профиль</span>
                            </a>

                            <a href="{{ url('/order_history') }}" class="personal__link">
                                <svg class="svg-icon icon-personal-link-2"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-personal-link-2"></use></svg>
                                <span>История заказов</span>
                            </a>

                            <a href="{{ url('/personal_password') }}" class="personal__link">
                                <svg class="svg-icon icon-personal-link-3"><use xlink:href="{{ asset('main_front/images/sprite.svg') }}#icon-personal-link-3"></use></svg>
                                <span>Смена пароля</span>
                            </a>

                        </div><!--personal__links-->

                    </aside>

                    <div class="personal__content">
                        <form action="{{ url('/user_edit') }}" method="post">
                            {{ csrf_field() }}

                            <div class="personal__data-fields spacer_top">
                                <label class="form__label">
                                    <span class="form__label-title">Фамилия</span>
                                    <span class="form__label-title" style="color: #132f509c;">{!! $errors->first('surname') !!}</span>
                                    <input type="text" name="surname" class="form__field"  value="{{ $user->surname }}" placeholder="Введите фамилию">
                                </label>

                                <label class="form__label">
                                    <span class="form__label-title">Имя</span>
                                    <span class="form__label-title" style="color: #132f509c;">{!! $errors->first('name') !!}</span>
                                    
                                    <input type="text" name="name" class="form__field" value="{{ $user->name }}" placeholder="Введите имя">
                                </label>

                                <label class="form__label">
                                    <span class="form__label-title">Телефон</span>
                                    <span class="form__label-title" style="color: #132f509c;">{!! $errors->first('tel') !!}</span>
                                    
                                    <input type="text" name="tel" class="form__field" value="{{ $user->tel }}" placeholder="Номер телефона">
                                </label>

                                <label class="form__label">
                                    <span class="form__label-title">Почта</span>
                                    <span class="form__label-title" style="color: #132f509c;">{!! $errors->first('email') !!}</span>
                                    
                                    <input type="text" name="email" class="form__field" value="{{ $user->email }}" placeholder="Укажите почту">
                                </label>

                            </div><!--personal__data-fields-->

                            <button class="yellow-btn form__btn">Сохранить</button>
                            <a href="{{ url('/logout') }}" class="yellow-btn form__btn" style="background: #fd182e; max-width: 100px; float: right;">Выйти</a>
                        </form>

                    </div><!--personal__content-->

                </div><!--personal-->

            </section><!--page-->
    @endif
@endsection
    