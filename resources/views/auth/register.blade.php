@extends('layouts.app')

@section('content')
    <main class="grid-container gap-y-20 grow my-10">
        <div class="flex flex-col gap-6 items-center justify-center">
            <p class="text-2xl font-semibold tracking-widest">Регистрация</p>
            <form class="flex flex-col gap-4 w-full md:w-1/2 xl:w-1/3" action="{{ route('register') }}" method="POST">
                @csrf
                <input required type="text" name="surname"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Фамилия">
                <input required type="text" name="name"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Имя">
                <input required type="text" name="fathername"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Отчество">
                <select required name="gender" class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none">
                    <option value="male">Мужской</option>
                    <option value="female">Женский</option>
                </select>
                <input required type="date" name="birthday"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Дата рождения">
                <input required type="email" name="email"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Email">
                <input required type="password" name="password"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Пароль">
                <input required type="text" name="phone"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Телефон">
                <input required type="text" name="city"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Ваш город">
                <button type="submit"
                    class="px-4 py-2 rounded-xl border text-white hover:text-[#F242EE]/70 border-[#F242EE]/70 bg-[#F242EE]/70 transition-all duration-500 hover:bg-transparent">Зарегистрироваться</button>
            </form>
            <div class="flex items-center justify-between gap-4 w-full md:w-1/2 xl:w-1/3">
                <div class="w-1/3 h-px bg-[#F7BDF6]/70"></div>
                <p class="font-Caveat text-2xl">или</p>
                <div class="w-1/3 h-px bg-[#F7BDF6]/70"></div>
            </div>
            <a href="{{ route('login') }}"
                class="text-center w-full md:w-1/2 xl:w-1/3 px-4 py-2 rounded-xl border hover:text-white text-[#F242EE]/70 border-[#F242EE]/70 hover:bg-[#F242EE]/70 transition-all duration-500 bg-transparent">Войти</a>
        </div>
    </main>
@endsection
