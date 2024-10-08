<div id="search-bar z-50">
    <form role="search">
        <input type="search" class="rounded-xl focus:transition focus:ease-linear px-5  border drop-shadow-2xl focus:w-80 py-1" wire:model.live="search"  placeholder="Search..."  autocomplete="off"/>
    </form>

    @foreach ($products as $res)
    <div class="bg-white w-60 absolute mt-5 rounded">

        <a href="products/{{ $res -> slug }}" class="flex justify-center items-center border-b">
            <div>
                <img src="{{ url('storage', $res -> images) }}" alt="{{ $res -> name }}" class="w-20">
            </div>
            <div>
                {{ $res -> name }}
            </div></a>
    </div>
    @endforeach
</div>
