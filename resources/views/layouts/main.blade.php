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
    <link href="{{asset("css/app.css")}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MiChat</title>
    @livewireStyles
</head>
<body class="text-gray-800 antialiased">

    <div>
        <main>
            <section class="absolute w-full h-full">
                <div class="absolute top-0 w-full h-full bg-gray-900"
                        style="background-image: url({{asset("assets/img/register_bg_2.png")}}); background-size: 100%; background-repeat: no-repeat;">
                </div>

                <div class="flex content-center h-full">
                    {{$slot}}
                </div>
            </section>
        </main>

    </div>

    @livewireScripts
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
</html>
