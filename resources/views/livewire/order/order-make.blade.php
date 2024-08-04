<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-20">
        <h2 class="mb-10 text-[1.5rem] font-bold">Place Order</h2>

        @foreach ($cartItems as $cartItem)
            <div class="bg-[#E5E5E5] p-3 rounded flex justify-between items-center mb-4">
                <img class="h-20 border-[1px] border-[#edcebc] rounded" src="{{asset($cartItem['product']['image_path'])}}"/>
                <div class="w-full  h-full mx-3">
                    <div class="font-bold">{{$cartItem['product']['name'] ?? ""}}</div>
                    <div class="">${{ $cartItem['product']['price'] ?? ""}} x {{ $cartItem['qty'] ?? ""}} <span class="font-bold">( ${{number_format($cartItem['product']['price'] * $cartItem['qty'],2)}} )</span></div>

                    @php
                        $orderAmount += $cartItem['product']['price'] * $cartItem['qty'];
                    @endphp
                </div>
                <div class="grid grid-cols-[1fr_2fr_1fr] w-32  items-center bg-[#D87D4A]">
                    <button class="text-white text-[1.2rem] bg-[#be6937] py-1.5" wire:click="qtyDown({{$cartItem}})">-</button>
                    <span class="text-center text-white py-1.5">{{$cartItem['qty']}}</span>
                    <button class="text-white text-[1.2rem] bg-[#be6937] py-1.5" wire:click="qtyUp({{$cartItem}})">+</button>
                </div>
            </div>
        @endforeach

        <div class="text-end">
           <div class="text-[1.2rem]">Order Amount</div>
            <div class="font-bold text-[1.5rem]">${{ number_format($orderAmount, 2);}}</div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">
            <div>
                <strong><h3>Address Details</h3></strong>
                <div>
                    {{-- name --}}
                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Name')" />

                        <x-text-input wire:model="name" id="name" class="block mt-1 w-full"
                                        type="text"
                                        name="name"
                                        required />

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>


                    {{-- contact no --}}
                    <div class="mt-4">
                        <x-input-label for="contactNo" :value="__('Contact No')" />

                        <x-text-input wire:model="contactNo" id="contactNo" class="block mt-1 w-full"
                                        type="text"
                                        name="contactNo"
                                        required />

                        <x-input-error :messages="$errors->get('contactNo')" class="mt-2" />
                    </div>

                     {{-- address --}}
                     <div class="mt-4">
                        <x-input-label for="address" :value="__('Address')" />

                        <textarea wire:model="address" id="address" class="block mt-1 w-full"
                                        name="address"
                                        required rows="8"></textarea>

                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>
                </div>
            </div>
            <div>
                <strong ><h3 class="mb-5">Payment Details</h3></strong>

                  <div class="mb-10">
                    <div class="mt-4">
                        <x-input-label for="paymentType" :value="__('Payment Type')" class="mb-5" />
                    </div>
                    <label>
                        <input type="radio" name="paymentType" class="card-input-element" wire:model.live="paymentType" value="cash-on-delivery" />
                        <div class="panel panel-default card-input">
                            <div class="panel-heading">Cash On Delivery</div>
                        </div>
                    </label>

                    <label>
                        <input type="radio" name="paymentType" class="card-input-element"  wire:model.live="paymentType" value="card-payment" />
                        <div class="panel panel-default card-input">
                            <div class="panel-heading">Card Payment</div>
                        </div>
                    </label>

                    <x-input-error :messages="$errors->get('paymentType')" class="mt-2" />

                  </div>
                  @if ($paymentType == 'card-payment')
                    <div>
                        {{-- card no --}}
                        <div class="mt-4">
                            <x-input-label for="cardNumber" :value="__('Card Number')" />

                            <x-text-input wire:model="cardNumber" id="cardNumber" class="block mt-1 w-full"
                                        type="text"
                                        name="cartNumber"
                                        required />

                            <x-input-error :messages="$errors->get('cardNumber')" class="mt-2" />
                        </div>


                         <div class="grid grid-cols-2 gap-4">
                            {{-- card no --}}
                            <div class="mt-4">
                                <x-input-label for="cardNumber" :value="__('Expire Date')" />

                                <x-date-picker wire:model="expireDate" id="expireDate" class="block mt-1 w-full"
                                            type="text"
                                            name="expireDate"
                                            required />

                                <x-input-error :messages="$errors->get('expireDate')" class="mt-2" />
                            </div>

                            {{-- crv --}}
                            <div class="mt-4">
                                <x-input-label for="crv" :value="__('CCV ')" />

                                <x-text-input wire:model="ccv" id="ccv" class="block mt-1 w-full"
                                            type="text"
                                            name="ccv"
                                            required />

                                <x-input-error :messages="$errors->get('ccv')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                  @endif
            </div>
        </div>
        @if (count($cartItems) != 0)
            <div class="text-end mt-20 mb-20">
                <button class="px-10 py-2 bg-[#D87D4A] text-white" wire:click="payNow">Pay Now</button>
            </div>
        @endif

    </div>
</div>
