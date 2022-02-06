<div>
    @auth
        @livewire("navbar")
    @endauth
    <main>
        <section class="absolute w-full h-full">
            <div class="absolute top-0 w-full h-full bg-gray-900"
                    style="background-image: url({{asset("assets/img/register_bg_2.png")}}); background-size: 100%; background-repeat: no-repeat;">
            </div>
            @if ($route == "error")
                <div class="absolute z-10 h-screen w-screen text-white font-bold text-center flex flex-col items-center justify-center">
                    <h1 class="text-9xl">404</h1>
                    <h2 class="text-5xl">Not Found</h2>
                </div>
            @else
                @livewire("sign")
            @endif
        </section>
    </main>

</div>
