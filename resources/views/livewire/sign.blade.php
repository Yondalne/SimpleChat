<div class="container mx-auto px-4 h-full">
    <div class="flex content-center items-center justify-center h-full">
        <div class="w-full lg:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                    @if ($route == "/")
                        @livewire("sign-in")
                    @elseif($route == "/signup")
                        @livewire("sign-up")
                    @endif
                </div>
            </div>
        </div>
    </div>
    <footer class="absolute w-full left-0 bottom-0 bg-gray-900 pb-6">
        <div class="container mx-auto px-4">
            <hr class="mb-6 border-b-1 border-gray-700" />

            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4">
                    <div class="text-sm text-white font-semibold py-1">
                        Copyright © 2022
                        <a
                            href="https://github.com/Yondalne"
                            class="text-white hover:text-gray-400 text-sm font-semibold py-1">

                            - Yondaine -
                        </a>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-8/12 px-4 flex justify-center items-center mx-auto">
                <ul class="flex flex-wrap list-none md:justify-end  justify-center">
                    <li>
                        <a href="https://github.com/Yondalne" class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3">
                            - Yondaine -
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3">
                            Blog
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
