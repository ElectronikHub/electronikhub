<div class="container mx-auto pt-20 font-tertiary">
    <div class="sm:flex shadow-md my-10">
        {{-- cart --}}
        <div class="  w-full  sm:w-3/4 bg-white px-10 py-10">
            <div class="flex justify-between border-b pb-8">
            <h1 class="font-semibold text-2xl font-secondary">Shopping Cart</h1>
            <h2 class="font-semibold text-2xl">3 Items</h2>
            </div>


            <div class="relative overflow-x-auto">

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 w-full uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>

                            </th>
                            <th scope="col" class="px-6 py-3">
                                Quantity
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Grand Total
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($cart_items as $items)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $items['name']}}
                            </th>
                            <td class="px-6 py-4">
                                <img src="{{ url('storage', $items['image']) }}" alt="{{ $items['name']}}" class="h-32 object-cover object-center md:block hidden mt-7" />
                            </td>
                            <td class="px-6 py-4">
                                {{ Number::currency($items['unit_amount'], 'PHP') }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="relative flex items-center max-w-[8rem]">
                                    <button wire:click='decrement({{$items['product_id']}})' class="">
                                        <span class="m-auto text-2xl font-thin">-</span>
                                      </button>
                                      <input type="number" wire:model='quantity' value="{{ $items['quantity']}}" readonly class="w-10 border text-center py-1 px-2" placeholder="1">
                                      <button wire:click='increment({{ $items['product_id'] }})' class="">
                                        <span class="m-auto text-2xl font-thin">+</span>
                                      </button>
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                {{ Number::currency($items['total_amount'], 'PHP') }}
                            </td>

                            <td class="px-6 py-4">
                                <button wire:click='removeItem({{ $items['product_id'] }})' type="button" class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">Remove</button>

                            </td>

                        </tr>

                        @empty
                        <div>
                            <h1>No Items</h1>
                        </div>
                        @endforelse
                    </tbody>
                </table>
            </div>


            <a href="/products" class="flex font-semibold text-indigo-600 text-sm mt-10">
            <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                <path
                d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
            </svg>
            Continue Shopping
            </a>
        </div>
        {{-- cart --}}


      {{-- order summary --}}
        <div id="summary" class=" w-full sticky  sm:w-1/4   md:w-1/2     px-8 py-10">

            <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>

            <div class="flex justify-between mt-10 mb-5">
            <span class="font-semibold text-sm uppercase">Items 3</span>
            <span class="font-semibold text-sm"><span class="mx-1">Total:</span>{{ Number::currency($grand_total, 'PHP') }}</span>
            </div>


            <div class="border-t mt-8">
                <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                    <span>Shipping Fee</span>
                    <span>{{ Number::currency(0, 'PHP') }}</span>
                </div>
                <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                    <span>Grand Total</span>
                    <span>{{ Number::currency($grand_total, 'PHP') }}</span>
                </div>
                @if ($cart_items)
                <button type="submit" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 cursor-pointer rounded-3xl bg-primary text-white text-center flex items-center text-nowrap justify-center px-3 py-2 float-end">
                    Checkout
                </button>
                @endif

            </div>

        </div>
    </div>
  </div>
