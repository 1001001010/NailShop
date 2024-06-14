@extends('layouts.app')

@section('content')
    <main class="grid-container gap-y-20 grow my-10">
        <div class="flex max-lg:flex-col gap-6">
            <div class="lg:w-3/4 flex flex-col gap-6">
                @foreach ($baskets as $basket)
                    @foreach ($basket->products as $item)
                        <div
                            class="flex max-md:flex-col items-center gap-4 p-4 rounded-xl border border-[#F7BDF6]/70 shadow-[0px_0px_13px_-7px_black]">
                            <img src="{{ asset($item->photo) }}" alt=""
                                class="aspect-square object-cover w-full md:w-2/5 rounded-xl">
                            <div class="flex flex-col gap-2 w-full md:w-3/5">
                                <p class="text-2xl font-semibold tracking-widest">{{ $item->name }}</p>
                                <p>Цвет: {{ $item->color }}</p>
                                <p>{{ $item->price }} ₽</p>
                                <a href="{{ route('DeleteBasket', ['basket_id' => $basket->id]) }}">Удалить из корзины</a>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
            <form
                class="lg:w-1/4 flex flex-col gap-6 p-4 rounded-xl border border-[#F7BDF6]/70 shadow-[0px_0px_13px_-7px_black] h-fit">
                <input required type="text" class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                    placeholder="Адрес доставки">
                <textarea class="px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none" placeholder="Комментарий к заказу"></textarea>
                <div class="flex flex-col gap-2">
                    <p class="font-semibold tracking-widest">Способ оплаты</p>
                    <label class="flex items-center gap-2">
                        <input type="radio">
                        <span>Онлайн</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio">
                        <span>При получении</span>
                    </label>
                </div>
                <p>Итого: {{ $summ }} ₽</p>
                <a href="{{ route('Buy') }}"
                    class="px-4 py-2 rounded-xl border text-white hover:text-[#F242EE]/70 border-[#F242EE]/70 bg-[#F242EE]/70 transition-all duration-500 hover:bg-transparent">
                    Оформить заказ</a>
            </form>
        </div>
    </main>
@endsection
