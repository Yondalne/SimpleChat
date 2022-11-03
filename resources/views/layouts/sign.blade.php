<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MiChat</title>
    @livewireStyles
</head>
<body class="text-gray-800 antialiased">

    <div>
        @auth
            @livewire("navbar")
        @endauth
        <main>
            <section class="absolute w-full h-full">
                <div class="absolute top-0 w-full h-full bg-gray-900"
                        style="background-image: url({{asset("assets/img/register_bg_2.png")}}); background-size: 100%; background-repeat: no-repeat;">
                </div>

                <div class="container mx-auto px-4 h-full">
                    <div class="flex content-center items-center justify-center h-full">
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                                {{$slot}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

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

                            - Yondalne -
                        </a>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-8/12 px-4 flex justify-center items-center mx-auto">
                <ul class="flex flex-wrap list-none md:justify-end  justify-center">
                    <li>
                        <a href="https://github.com/Yondalne" class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3">
                            - Yondalne -
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

    @livewireScripts

    <script>
        function toggleNavbar(collapseID) {
          document.getElementById(collapseID).classList.toggle("hidden");
          document.getElementById(collapseID).classList.toggle("block");
        }
    </script>
</body>
</html>
