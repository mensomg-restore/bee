<x-header/>
<main id="content" role="main">
    <div class="breadcrumbs">
        <div class="container">
            <p class="breadcrumbs-block">
                <a class="breadcrumbs-block__link" href="{{ route('main') }}">Главная</a>
                /
                <a class="breadcrumbs-block__link" href="{{ route('lk') }}">Личный кабинет</a>
                /
                Личный счет
            </p>
        </div>
    </div>
    <div class="lk-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @yield('content')
                </div>
                <div class="col-lg-4">
                    <div class="sticky-top">
                        <div class="lk-sidebar">
                            <div class="lk-sidebar__header">
                                <div class="lk-sidebar__img">
                                    <img src="/svg/lk/user-avatar.svg" alt="user-avatar">
                                </div>
                                <p class="lk-sidebar__user">
                                    Иванов Иван Иванович
                                    {{--                        {{ $user->name . ' ' . $user->surname }}--}}
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <a class="{{ Route::currentRouteName() === 'lk' ? 'active' : '' }}"
                                       href="{{ route('lk') }}">
                                        <img src="/svg/lk/main.svg" alt="">
                                        Личный счет (200 ₽)
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ Route::currentRouteName() === 'lk_profile' ? 'active' : '' }}"
                                       href="{{ route('lk_profile') }}">
                                        <img src="/svg/lk/profile.svg" alt="">
                                        Личные данные
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ Route::currentRouteName() === 'lk_orders' ? 'active' : '' }}"
                                       href="{{ route('lk_orders') }}">
                                        <img src="/svg/lk/orders.svg" alt="">
                                        Заказы
                                    </a>
                                </li>
                                <li>
                                    <a class=""
                                       href="#">
                                        <img src="/svg/lk/notifications.svg" alt="">
                                        Уведомления
                                    </a>
                                </li>
                                <li>
                                    <a class=""
                                       href="#">
                                        <img src="/svg/lk/liked.svg" alt="">
                                        Любимые товары
                                    </a>
                                </li>
                                <li>
                                    <a onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                       href="{{ route('logout') }}">
                                        <img src="/svg/lk/logout.svg" alt="">
                                        Выйти
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-delivery/>
</main>

<x-footer :passwordChanged="$passwordChanged ?? ''"/>
