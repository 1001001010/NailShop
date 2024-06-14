@extends('layouts.app')

@section('content')
    <main class="grid-container gap-y-20 grow my-10">
        <div class="flex flex-col gap-6">
            <p class="text-2xl font-semibold tracking-widest">Контактные данные</p>
            <form class="flex flex-col gap-4 w-full md:w-1/2 xl:w-1/3 mx-auto">
                <input required type="text" name="surname"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Фамилия"
                    value="{{ Auth::user()->surname }}">
                <input required type="text" name="name"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Имя"
                    value="{{ Auth::user()->name }}">
                <input required type="text" name="fathername"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Отчество"
                    value="{{ Auth::user()->fathername }}">
                <select required name="gender" class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none">
                    <option value="Мужской" {{ Auth::user()->gender == 'Мужской' ? 'selected' : '' }}>Мужской</option>
                    <option value="Женский" {{ Auth::user()->gender == 'Женский' ? 'selected' : '' }}>Женский</option>
                </select>
                <input required type="date" name="birthday"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Дата рождения"
                    value="{{ Auth::user()->birthday }}">
                <input required type="email" name="email"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Email"
                    value="{{ Auth::user()->email }}">
                <input required type="password" name="password"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Пароль">
                <input required type="text" name="phone"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Телефон"
                    value="{{ Auth::user()->number }}">
                <input required type="text" name="city"
                    class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Ваш город"
                    value="{{ Auth::user()->city }}">
                <button
                    class="px-4 py-2 rounded-xl border text-white hover:text-[#F242EE]/70 border-[#F242EE]/70 bg-[#F242EE]/70 transition-all duration-500 hover:bg-transparent">Обновить</button>
            </form>
        </div>
        <div class="flex flex-col gap-6">
            <p class="text-2xl font-semibold tracking-widest">Мои заказы</p>
            <a href="orders.html"
                class="w-fit px-4 py-2 rounded-xl border text-white hover:text-[#F242EE]/70 border-[#F242EE]/70 bg-[#F242EE]/70 transition-all duration-500 hover:bg-transparent">Перейти
                к заказам</a>
        </div>
        <div class="flex flex-col gap-6">
            <p class="text-2xl font-semibold tracking-widest">Выход из аккаунта</p>
            <button
                class="w-fit px-4 py-2 rounded-xl border text-white hover:text-[#F242EE]/70 border-[#F242EE]/70 bg-[#F242EE]/70 transition-all duration-500 hover:bg-transparent">Выйти</button>
        </div>
    </main>
@endsection