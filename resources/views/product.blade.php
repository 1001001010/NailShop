@extends('layouts.app')

@section('content')
    <main class="grid-container gap-y-20 grow my-10">
        <div class="flex max-lg:flex-col gap-6">
            <img src="{{ asset($product->photo) }}" alt=""
                class="w-full lg:w-3/5 border border-[#F7BDF6]/70 shadow-[0px_0px_13px_-7px_black] rounded-xl">
            <div
                class="flex flex-col gap-6 w-full lg:w-2/5 border border-[#F7BDF6]/70 shadow-[0px_0px_13px_-7px_black] rounded-xl p-4 h-fit">
                <p class="text-2xl font-semibold tracking-widest">{{ $product->name }}</p>
                <p>{{ $product->price }} ₽</p>
                <button
                    class="w-full px-4 py-2 rounded-xl border text-white hover:text-[#F242EE]/70 border-[#F242EE]/70 bg-[#F242EE]/70 transition-all duration-500 hover:bg-transparent">
                    <a href="{{ route('ToBasket', ['product_id' => $product->id]) }}">Добавить в корзину</a>
                </button>
                @if (isset($like))
                    <button
                        class="w-full px-4 py-2 rounded-xl border hover:text-white text-[#F242EE]/70 border-[#F242EE]/70 hover:bg-[#F242EE]/70 transition-all duration-500 bg-transparent">
                        <a href="{{ route('ToLike', ['product_id' => $product->id]) }}">Удалить из избранного</a>
                    </button>
                @else
                    <button
                        class="w-full px-4 py-2 rounded-xl border hover:text-white text-[#F242EE]/70 border-[#F242EE]/70 hover:bg-[#F242EE]/70 transition-all duration-500 bg-transparent">
                        <a href="{{ route('ToLike', ['product_id' => $product->id]) }}">Добавить в избранное</a>
                    </button>
                @endif
            </div>
        </div>
        <div class="flex flex-col gap-6">
            <p class="text-2xl font-semibold tracking-widest">Описание</p>
            <div class="flex flex-col gap-4 border border-[#F7BDF6]/70 shadow-[0px_0px_13px_-7px_black] rounded-xl p-4">
                <p>Бренд: {{ $product->brand }}</p>
                <p>Цвет: {{ $product->color }}</p>
                <p>{{ $product->description }}</p>
                <p>Объём: {{ $product->volume }} мл</p>
            </div>
        </div>
    </main>
@endsection
