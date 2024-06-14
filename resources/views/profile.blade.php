@extends('layouts.app')

@section('content')
    <main class="grid-container gap-y-20 grow my-10">
        <div class="flex flex-col gap-6">
            <p class="text-2xl font-semibold tracking-widest">Контактные данные</p>
            <form class="flex flex-col gap-4 w-full md:w-1/2 xl:w-1/3 mx-auto" action="{{ route('editProfile') }}"
                method="POST">
                @csrf
                <input type="text" name="surname" class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                    placeholder="Фамилия" value="{{ Auth::user()->surname }}">
                <input type="text" name="name"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Имя"
                    value="{{ Auth::user()->name }}">
                <input type="text" name="fathername"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Отчество"
                    value="{{ Auth::user()->fathername }}">
                <select name="gender" class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none">
                    <option value="Мужской" {{ Auth::user()->gender == 'Мужской' ? 'selected' : '' }}>Мужской</option>
                    <option value="Женский" {{ Auth::user()->gender == 'Женский' ? 'selected' : '' }}>Женский</option>
                </select>
                <input type="date" name="birthday"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Дата рождения"
                    value="{{ Auth::user()->birthday }}">
                <input type="email" name="email"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Email"
                    value="{{ Auth::user()->email }}">
                <input type="password" name="password"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Пароль">
                <input type="text" name="phone"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Телефон"
                    value="{{ Auth::user()->number }}">
                <input type="text" name="city"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Ваш город"
                    value="{{ Auth::user()->city }}">
                <button type="submit"
                    class="px-4 py-2 rounded-xl border text-white hover:text-[#F242EE]/70 border-[#F242EE]/70 bg-[#F242EE]/70 transition-all duration-500 hover:bg-transparent">Обновить</button>
            </form>
        </div>
        <div class="flex flex-col gap-6">
            <p class="text-2xl font-semibold tracking-widest">Мои заказы</p>
            <a href="{{ route('open_orders') }}"
                class="w-fit px-4 py-2 rounded-xl border text-white hover:text-[#F242EE]/70 border-[#F242EE]/70 bg-[#F242EE]/70 transition-all duration-500 hover:bg-transparent">Перейти
                к заказам</a>
        </div>
        @if (Auth::user() and Auth::user()->is_admin == 1)
            <div class="flex flex-col gap-6">
                <p class="text-2xl font-semibold tracking-widest">Панель администратора</p>
                <a href="{{ route('Admin') }}"
                    class="w-fit px-4 py-2 rounded-xl border text-white hover:text-[#F242EE]/70 border-[#F242EE]/70 bg-[#F242EE]/70 transition-all duration-500 hover:bg-transparent">Перейти
                    в панель</a>
            </div>
        @endif
        <div class="flex flex-col gap-6">
            <p class="text-2xl font-semibold tracking-widest">Выход из аккаунта</p>
            <button
                class="w-fit px-4 py-2 rounded-xl border text-white hover:text-[#F242EE]/70 border-[#F242EE]/70 bg-[#F242EE]/70 transition-all duration-500 hover:bg-transparent"
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <span>Выйти</span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </button>
        </div>
    </main>
@endsection
