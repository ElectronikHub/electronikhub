<div class="container mx-auto pt-36 font-tertiary">
    <div class="sm:flex shadow-md my-10">
        {{-- cart --}}
        <div class="  w-full  sm:w-3/4 bg-white px-10 py-10">
            <div class="flex justify-between border-b pb-8">
            <h1 class="font-semibold text-2xl font-secondary">Shopping Cart</h1>
            <h2 class="font-semibold text-2xl">3 Items</h2>
            </div>

            <div class="max-h-screen mx-auto px-20">

                <div class="md:flex items-strech py-8 md:py-10 lg:py-8 border-t border-b border-gray-200">
                    <div class="md:w-4/12 2xl:w-1/4 w-full h-52">
                    <img src="" alt="Black Leather Purse" class="h-80 object-cover object-center md:block hidden mt-7" />
                    <img src="" alt="Black Leather Purse" class="md:hidden w-full h-full object-center object-cover" />
                    </div>
                    <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">
                    <p class="text-xs leading-3 text-gray-800 md:pt-0 pt-4">RF293</p>
                    <div class="flex items-center justify-between w-full">
                        <p class="text-base font-black leading-none text-gray-800 uppercase">name</p>
                        <div x-data="1" class="relative flex items-center max-w-[8rem]">
                        <button type="button" id="decrement-btn" class="decrement-btn rounded-l-lg p-3 h-11 bg-primary text-white border hover:bg-gray-800">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                            </svg>
                        </button>
                        <input type="int" name="quantity" id="counter" value="1" class="counter bg-primary border-x-0 h-11 text-center text-white text-sm block w-full py-2.5" placeholder="999" required />
                        <button type="button" id="increment-btn" value="Increment Value" class="increment-btn rounded-r-lg p-3 h-11 bg-primary text-white border hover:bg-gray-800">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </button>
                    </div>
                    </div>
                    <p class="text-xs leading-3 text-gray-600 pt-2">Height: 10 inches</p>
                    <p class="text-xs leading-3 text-gray-600 py-4">Color: Black</p>
                    <p class="w-96 text-xs leading-3 text-gray-600">Composition: 100% calf leather</p>
                    <div class="flex items-center justify-between pt-5">
                        <div class="flex itemms-center">
                        <p class="text-xs leading-3 underline text-gray-800 cursor-pointer">Add to favorites</p>
                        <p class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">Remove</p>
                        </div>
                        <p class="text-base font-black leading-none text-gray-800"><span class="mx-2">P</span>200</p>
                    </div>
                    </div>
                </div>
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
            <span class="font-semibold text-sm"><span class="mx-1">Total:</span><Span class="mx-1">P</Span>590</span>
            </div>


            <form method="post" action="">
                @csrf
                <div class="bg-white rounded-xl shadow p-4 sm:p-7">
                    <!-- Shipping Address -->
                    <div class="mb-6">
                        <h2 class="text-xl font-bold underline text-gray-700 mb-2">
                            Shipping Address
                        </h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 mb-1" for="first_name">
                                    First Name
                                </label>
                                <input class="w-full rounded-lg border py-2 px-3 " id="first_name" type="text">
                                </input>
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-1" for="last_name">
                                    Last Name
                                </label>
                                <input class="w-full rounded-lg border py-2 px-3" id="last_name" type="text">
                                </input>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="block text-gray-700  mb-1" for="phone">
                                Phone
                            </label>
                            <input class="w-full rounded-lg border py-2 px-3 " id="phone" type="text">
                            </input>
                        </div>
                        <div class="mt-4">
                            <label class="block text-gray-700 " for="address">
                                Address
                            </label>
                            <input class="w-full rounded-lg border py-2 px-3" id="address" type="text">
                            </input>
                        </div>
                        <div class="mt-4">
                            <label class="block text-gray-700 mb-1" for="city">
                                City
                            </label>
                            <input class="w-full rounded-lg border py-2 px-3 " id="city" type="text">
                            </input>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div>
                                <label class="block text-gray-700  mb-1" for="state">
                                    State
                                </label>
                                <input class="w-full rounded-lg border py-2 px-3 " id="state" type="text">
                                </input>
                            </div>
                            <div>
                                <label class="block text-gray-700  mb-1" for="zip">
                                    ZIP Code
                                </label>
                                <input class="w-full rounded-lg border py-2 px-3 " id="zip" type="text">
                                </input>
                            </div>
                        </div>
                    </div>
                    <div class="text-lg font-semibold mb-4">
                        Select Payment Method
                    </div>
                    <ul class="grid w-full gap-6 md:grid-cols-2">
                        <li>
                            <input class="hidden peer" id="hosting-small" name="hosting" required="" type="radio" value="hosting-small" />
                            <label class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100" for="hosting-small">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">
                                        Cash on Delivery
                                    </div>
                                </div>
                                <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none" viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    </path>
                                </svg>
                            </label>
                        </li>
                        <li>
                            <input class="hidden peer" id="hosting-big" name="hosting" type="radio" disabled value="hosting-big">
                            <label class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100" for="hosting-big">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">
                                        Online Paymant
                                    </div>
                                </div>
                                <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none" viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    </path>
                                </svg>
                            </label>
                            </input>
                        </li>
                    </ul>
                </div>

                <div class="border-t mt-8">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                    <span>Total cost</span>
                    <span>$600</span>
                    </div>
                    <button type="submit" class="bg-primary font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">
                        Checkout
                        </button>
                </div>

            </form>

        </div>
    </div>
  </div>
