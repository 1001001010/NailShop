@extends('layouts.app')

@section('content')
    <main class="grid-container gap-y-20 grow my-10">
        <div class="flex flex-col gap-6 w-full">
            <p class="text-2xl font-semibold tracking-widest">Добавление товара</p>
            <form action="{{ route('NewPosition') }}" method="POST" class="flex flex-col gap-4 w-full md:w-1/2 xl:w-1/3"
                enctype="multipart/form-data">
                @csrf
                <input type="text" class="w-full px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                    placeholder="Наименование товара" name="name">
                <textarea class="w-full px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                    placeholder="Описание товара" name="description"></textarea>
                <input type="file" class="w-full px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                    name="photo">
                <input type="text" class="w-full px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                    placeholder="Цена" name="price">
                <input type="text" class="w-full px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                    placeholder="Бренд" name="brand">
                <input type="text" class="w-full px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                    placeholder="Цвет" name="color">
                <input type="text" class="w-full px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                    placeholder="Объём" name="volume">
                <button type="submit"
                    class="w-full px-4 py-2 rounded-xl border text-white hover:text-[#F242EE]/70 border-[#F242EE]/70 bg-[#F242EE]/70 transition-all duration-500 hover:bg-transparent">Добавить</button>
            </form>
        </div>
        <div class="flex flex-col gap-6 w-full">
            <p class="text-2xl font-semibold tracking-widest">Просмотр товаров</p>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
                @foreach ($products as $item)
                    <div class="flex flex-col gap-4">
                        <a href="{{ route('product', ['product_id' => $item->id]) }}"
                            class="overflow-hidden rounded-xl border border-[#F7BDF6]/70 group shadow-[0px_0px_13px_-7px_black]">
                            <img src="{{ asset($item->photo) }}" alt=""
                                class="transition-all duration-500 group-hover:scale-110 aspect-[7/10] object-cover">
                        </a>
                        <p>{{ $item->name }}</p>
                        <div class="flex items-center gap-4">
                            <a href="{{ route('EditTovar', ['product_id' => $item->id]) }}" class="w-8 h-8">
                                <img src="{{ asset('img/products/edit.svg') }}" alt="">
                            </a>
                            <a href="{{ route('DeleteProduct', ['product_id' => $item->id]) }}" class="w-8 h-8">
                                <img src="{{ asset('img/products/delete.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
