<div class="w-full max-w-[85rem] py-10 pt-40 px-4 sm:px-6 lg:px-8 mx-auto font-tertiary">
    <section class="py-10 bg-gray-50 font-poppins dark:bg-gray-800 rounded-lg">
      <div class="px-4 py-4 mx-auto max-w-7xl lg:py-6 md:px-6">
        <div class="flex flex-wrap mb-24 -mx-3">
          <div class="w-full pr-2 lg:w-1/4 lg:block">
            {{-- categories --}}
            <div class="p-4 mb-5 bg-white border border-gray-200 dark:border-gray-900 dark:bg-gray-900">
              <h2 class="text-2xl font-bold dark:text-gray-400"> Categories</h2>
              <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>
              <ul>
                @foreach ($categories as $cat)
                <li class="mb-4" wire:key="{{ $cat ->id }}">
                    <label for="{{ $cat ->slug }}" class="flex items-center dark:text-gray-400 ">
                      <input type="checkbox" wire:model.live="selected_categories" id="{{ $cat ->slug }}" value="{{ $cat -> id }}" class="w-4 h-4 mr-2">
                      <span class="text-lg">{{ $cat -> name }}</span>
                    </label>
                  </li>
                @endforeach

              </ul>

            </div>
            {{-- categories --}}

            {{-- brands --}}
            <div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
              <h2 class="text-2xl font-bold dark:text-gray-400">Brand</h2>
              <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>
              <ul>
                @foreach ($brands as $brand)
                <li class="mb-4" wire:key="{{ $brand ->id }}">
                    <label for="{{ $brand ->slug }}" class="flex items-center dark:text-gray-300">
                      <input type="checkbox" id="{{ $brand ->slug }}" wire:model.live="selected_brands" value="{{ $brand ->id }}" class="w-4 h-4 mr-2">
                      <span class="text-lg dark:text-gray-400">{{ $brand -> name }}</span>
                    </label>
                  </li>
                @endforeach


              </ul>
            </div>
            {{-- brands --}}

            {{-- status --}}
            <div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
              <h2 class="text-2xl font-bold dark:text-gray-400">Product Status</h2>
              <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>
              <ul>
                <li class="mb-4">
                  <label for="" class="flex items-center dark:text-gray-300">
                    <input type="checkbox" checked class="w-4 h-4 mr-2">
                    <span class="text-lg dark:text-gray-400">In Stock</span>
                  </label>
                </li>
              </ul>
            </div>
            {{-- status --}}

            {{-- price range --}}
            {{-- <div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
              <h2 class="text-2xl font-bold dark:text-gray-400">Price</h2>
              <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>
              <div>
                <input type="range" class="w-full h-1 mb-4 bg-blue-100 rounded appearance-none cursor-pointer" max="5000" value="1000" step="5000">
                <div class="flex justify-between ">
                  <span class="inline-block text-lg font-bold text-blue-400 ">PHP 0</span>
                  <span class="inline-block text-lg font-bold text-blue-400 ">PHP 5000</span>
                </div>
              </div>
            </div> --}}
            {{-- price range --}}

          </div>

          <div class="w-full px-3 lg:w-3/4">
            <div class="px-3 mb-4">
                {{-- header --}}
                <div class="items-center justify-between gap-5 hidden px-3 py-2 bg-gray-100 md:flex dark:bg-gray-900 ">
                    <div class="search-bar flex items-center justify-between">
                        @livewire('partials.searchbar')
                    </div>
                    <div>
                        <a href="/cart">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-6">
                                <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z" clip-rule="evenodd" />
                              </svg>

                          </a>
                    </div>

                </div>
                {{-- header --}}


                {{-- product --}}
                <div class="flex flex-wrap items-center mt-5">
                    @foreach ($products as $prod)
                    <div id="list-item" class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3" wire:key="{{ $prod -> id }}" id="list">
                        <div class="border border-gray-300 dark:border-gray-700">
                        <div class="relative bg-gray-200">
                            <a href="/products/{{ $prod -> slug }}" class="">
                            <img src="{{ url('storage',  $prod -> images) }}" alt="{{ $prod -> name }}" class="search object-fit w-full h-56 mx-auto ">
                            </a>
                        </div>
                        <div class="p-3 ">
                            <div class="flex items-center justify-between gap-2 mb-2">
                            <h3 class="text-xl font-medium dark:text-gray-400 uppercase">
                                {{ $prod -> name }}
                            </h3>
                            </div>
                            <p class="text-lg ">
                            <span class="text-green-600 dark:text-green-600"><span>PHP</span>{{ $prod -> price }}</span>
                            </p>
                        </div>
                        <div class="flex justify-center p-4 border-t border-gray-300 dark:border-gray-700">

                            <a wire:click.prevent='addToCart({{ $prod->id }})' href="#" class="text-gray-500 flex items-center space-x-2 dark:text-gray-400 hover:text-red-500 dark:hover:text-red-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3 " viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                            </svg><span wire:loading.remove wire:target='addToCart({{ $prod->id }})'>Add to Cart</span><span wire:loading wire:target='addToCart({{ $prod->id }})'>Adding</span>
                            </a>

                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- product --}}

                <!-- pagination start -->
                <div class="flex justify-end mt-6">
                {{-- <nav aria-label="page-navigation">
                    <ul class="flex list-style-none">
                    <li class="page-item disabled ">
                        <a href="#" class="relative block pointer-events-none px-3 py-1.5 mr-3 text-base text-gray-700 transition-all duration-300  rounded-md dark:text-gray-400 hover:text-gray-100 hover:bg-blue-600">Previous
                        </a>
                    </li>
                    <li class="page-item ">
                        <a href="#" class="relative block px-3 py-1.5 mr-3 text-base hover:text-blue-700 transition-all duration-300 hover:bg-blue-200 dark:hover:text-gray-400 dark:hover:bg-gray-700 rounded-md text-gray-100 bg-blue-400">1
                        </a>
                    </li>
                    <li class="page-item ">
                        <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 hover:bg-blue-100 rounded-md mr-3  ">2
                        </a>
                    </li>
                    <li class="page-item ">
                        <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 hover:bg-blue-100 rounded-md mr-3 ">3
                        </a>
                    </li>
                    <li class="page-item ">
                        <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 hover:bg-blue-100 rounded-md ">Next
                        </a>
                    </li>
                    </ul>
                </nav> --}}
                {{ $products -> links() }}
                </div>
                <!-- pagination end -->
          </div>
        </div>
      </div>
    </section>

  </div>
