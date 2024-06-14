@extends('layouts.app')

@section('content')
    <main class="grid-container gap-y-20 grow my-10">
        <div class="flex flex-col gap-6">
            <p class="text-2xl font-semibold tracking-widest">Мои заказы</p>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                @foreach ($buy as $item)
                    @foreach ($item->products as $item)
                        <div class="flex flex-col gap-4">
                            <a href="{{ route('product', ['product_id' => $item->id]) }}"
                                class="overflow-hidden rounded-xl border border-[#F7BDF6]/70 group shadow-[0px_0px_13px_-7px_black]">
                                <img src="{{ asset($item->photo) }}" alt=""
                                    class="transition-all duration-500 group-hover:scale-110 aspect-[7/10] object-cover">
                            </a>
                            <p>{{ $item->name }}</p>
                            <p class="text-2xl font-semibold tracking-widest">{{ $item->price }} ₽</p>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </main>
@endsection
