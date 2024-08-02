<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-20">
        @foreach ($cartItems as $cartItem)
            <div class="bg-[#E5E5E5] p-3 rounded flex justify-between items-center">
                <img class="h-20 border-[1px] border-[#edcebc] rounded" src="{{asset($cartItem['product']['image_path'])}}"/>
                <div class="grid grid-cols-[1fr_2fr_1fr] w-32  items-center bg-[#D87D4A]">
                    <button class="text-white text-[1.2rem] bg-[#be6937] py-1.5" wire:click="qtyDown({{$cartItem}})">-</button>
                    <span class="text-center text-white py-1.5">{{$cartItem['qty']}}</span>
                    <button class="text-white text-[1.2rem] bg-[#be6937] py-1.5" wire:click="qtyUp({{$cartItem}})">+</button>
                </div>
            </div>
        @endforeach
        @if (count($cartItems) == 0)
            <div class="flex justify-center flex-col text-center">
                <img  class="h-24 m-10" src="{{asset('images/cart-2.svg')}}"/>
                <p class="text-gray-700">Cart Is empty !</p>
            </div>
        @endif
    </div>
</div>
