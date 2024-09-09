    <nav x-data="{ isOpen: false }" class="bg-white font-secondary text-primary drop-shadow-2xl fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
          <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button-->
              <button @click = "isOpen = !isOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>

                <svg x-show="!isOpen" x-bind:class=" !isOpen ? 'block' : 'hidden'" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <svg x-show="isOpen" x-bind:class=" isOpen ? 'block' : 'hidden'" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex-shrink-0 flex items-center">
                <div class="sm:block w-28">
                    <a href="">@livewire('partials.logo2')</a>

                </div>
              </div>
              <div class="hidden sm:block sm:ml-6">
                <div class="flex justify-between w-full font-primary">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="/" class="hover:bg-secondary px-3 py-2 rounded-md text-sm font-medium  {{ (request()->is('/')) ? 'active text-secondary border-b-2 border-secondary' : '' }}">Home</a>

                  <a href="/services" class="hover:bg-secondary px-3 py-2 rounded-md text-sm font-medium  {{ (request()->is('services')) ? 'active text-secondary border-b-2 border-secondary' : '' }}">Services</a>

                  <a href="/products" class="hover:bg-secondary px-3 py-2 rounded-md text-sm font-medium  {{ (request()->is('products')) ? 'active text-secondary border-b-2 border-secondary' : '' }}">Products</a>

                  <a href="/about" class="hover:bg-secondary  px-3 py-2 rounded-md text-sm font-medium  {{ (request()->is('about')) ? 'active text-secondary border-b-2 border-secondary' : '' }}">About</a>
                </div>
              </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 gap-3"
            x-data="{
                open: false,
                toggle() {
                    if (this.open) {
                        return this.close()
                    }

                    this.$refs.button.focus()

                    this.open = true
                },
                close(focusAfter) {
                    if (! this.open) return

                    this.open = false

                    focusAfter && focusAfter.focus()
                }
            }"
            x-on:keydown.escape.prevent.stop="close($refs.button)"
            x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
            x-id="['dropdown-button']">
                <div class="hidden sm:block">
                    @livewire('partials.searchbar')
                </div>

              <button  x-ref="button"
              x-on:click="toggle()"
              :aria-expanded="open"
              :aria-controls="$id('dropdown-button')"
              type="button" class="">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#243c5a" class="size-10 p-2 flex items-center justify-center rounded-full hover:fill-secondary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-secondary focus:ring-white">
                    <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z" clip-rule="evenodd" />
                  </svg>
              </button>

              <div
              x-ref="panel"
              x-show="open"
              x-transition.origin.top.left
              x-on:click.outside="close($refs.button)"
              :id="$id('dropdown-button')"
              style="display: none;"
              class="absolute float-right mt-40 ml-40 w-40 rounded-md bg-white shadow-md"
          >
              <a href="/cart" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                  Cart
              </a>

              <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                  Orders
              </a>

              <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                  <span class="text-red-600">Login</span>
              </a>
          </div>


            </div>
          </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="isOpen" class="sm:hidden" id="mobile-menu">

          <div class="px-2 pt-2 pb-3 space-y-1 flex flex-col font-primary">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/" class="hover:bg-secondary px-3 py-2 rounded-md text-sm font-medium  {{ (request()->is('/')) ? 'active text-secondary border-b-2 border-secondary' : '' }}">Home</a>

            <a href="/services" class="hover:bg-secondary px-3 py-2 rounded-md text-sm font-medium  {{ (request()->is('services')) ? 'active text-secondary border-b-2 border-secondary' : '' }}">Services</a>

            <a href="/products" class="hover:bg-secondary px-3 py-2 rounded-md text-sm font-medium  {{ (request()->is('products')) ? 'active text-secondary border-b-2 border-secondary' : '' }}">Products</a>

            <a href="/about" class="hover:bg-secondary px-3 py-2 rounded-md text-sm font-medium  {{ (request()->is('about')) ? 'active text-secondary border-b-2 border-secondary' : '' }}">About</a>
          </div>

          <div>
            <button class="block sm:hidden ml-3 mb-3 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 cursor-pointer rounded-3xl bg-primary text-white text-center items-center text-nowrap justify-center px-3 py-2 hover:bg-secondary">Contact Us</button>
          </div>
        </div>
      </nav>
