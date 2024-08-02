<div>
    <div class="bg-[#141414] px-4 py-10 text-center mb-20">
        <span class="text-white text-[2.3rem] uppercase">Earphones</span>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @foreach ($products as $index => $product)
            @if ($index % 2 == 0)
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 mb-20 md:px-20">
                    <img src="{{ asset($product['image_path']) }}" alt="product image" class="w-full" />
                    <div class="p-6 flex justify-center flex-col">
                        <div class="text-[1.2rem] lg:text-[2.5rem] font-bold mb-6">{{ $product['name'] }}</div>
                        <div class="text-[#757575] mb-10">{{$product['description']}}</div>
                        <button class="px-8 py-2 bg-[#D87D4A] max-w-40 text-white">See Product</button>
                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 mb-20 md:px-20">
                    <div class="p-6 order-2 md:order-1 flex justify-center flex-col">
                        <div class="text-[1.2rem] lg:text-[2.5rem] font-bold mb-6">{{ $product['name'] }}</div>
                        <div class="text-[#757575] mb-10">{{$product['description']}}</div>
                        <button class="px-8 py-2 bg-[#D87D4A] max-w-40 text-white">See Product</button>
                    </div>
                    <img src="{{ asset($product['image_path']) }}" alt="product image" class="w-full order-1 md:order-2" />
                </div>
            @endif
        @endforeach
    </div>
</div>
