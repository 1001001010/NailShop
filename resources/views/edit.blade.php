@extends('layouts.app')

@section('content')
    <main class="grid-container gap-y-20 grow my-10">
        <div class="flex items-center justify-center grow">
            <div class="flex flex-col gap-6 w-full items-center">
                <p class="text-2xl font-semibold tracking-widest">Редактирование товара</p>
                <form action="{{ route('EditTovar', ['product_id' => $product->id]) }}" method="POST"
                    class="flex flex-col gap-4 w-full md:w-1/2 xl:w-1/3" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="w-full px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                        placeholder="Наименование товара" name="name" value="{{ $product->name }}">
                    <textarea class="w-full px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                        placeholder="Описание товара" name="description">{{ $product->description }}</textarea>
                    <input type="file" class="w-full px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                        name="photo">
                    <input type="text" class="w-full px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                        placeholder="Цена" name="price" value="{{ $product->price }}">
                    <input type="text" class="w-full px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                        placeholder="Бренд" name="brand" value="{{ $product->brand }}">
                    <input type="text" class="w-full px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                        placeholder="Цвет" name="color" value="{{ $product->color }}">
                    <input type="text" class="w-full px-4 py-2 border border-[#F7BDF6]/70 rounded-xl focus:outline-none"
                        placeholder="Объём" name="volume" value="{{ $product->volume }}">
                    <button type="submit"
                        class="w-full px-4 py-2 rounded-xl border text-white hover:text-[#F242EE]/70 border-[#F242EE]/70 bg-[#F242EE]/70 transition-all duration-500 hover:bg-transparent">Добавить</button>
                </form>
            </div>
        </div>
    </main>
@endsection
