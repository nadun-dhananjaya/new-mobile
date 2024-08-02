<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-20">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 mb-20 ">
            <img src="{{ asset($product['image_path']) }}" alt="product image" class="w-full" />
            <div class="p-6 flex justify-center flex-col">
                <div class="text-[1.2rem] lg:text-[2.5rem] font-bold mb-6">{{ $product['name'] }}</div>
                <div class="text-[#757575] mb-3">{{$product['description']}}</div>
                <div class="mb-10 font-bold">$ 2,999</div>
                <div>
                    <button class="px-8 py-2 bg-[#D87D4A] max-w-40 text-white" wire:click="addCart({{$product}})">Add Card</button>
                </div>
            </div>
        </div>

        <div class="mb-32">
            <h2 class="uppercase font-bold text-[2rem]">Features</h2>
            <p class="text-gray-500 mt-10">!
                {{$product['features']}}
            </p>
        </div>
    </div>
</div>
