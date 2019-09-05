<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gray Hosting</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/author.css') }}" />
</head>
<body>
    <header class="container d-flex justify-content-between align-items-center">
        <h1>Grazy Hosting</h1>
        <nav>
            <a href="#products" class="px-3">Products</a>
            <a href="#discord" class="px-3">Discrod</a>
            <a href="#team" class="px-3">Team</a>
            <a href="#contact" class="px-3">Contact</a>
        </nav>
    </header>

    <main>
        {{--       --}}
        {{-- slide --}}
        {{--       --}}
        <section id="#slide">

        </section>

        {{--       --}}
        {{-- specs --}}
        {{--       --}}
        <section id="#specs">

        </section>

        {{--          --}}
        {{-- products --}}
        {{--          --}}
        <section id="products">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="" alt="">
                        <h2>Minecraft Servers</h2>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="" alt="">
                        <h2>SSD Opslag</h2>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="" alt="">
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">

                    </div>
                </div>
            </div>
        </section>

        {{--         --}}
        {{-- discord --}}
        {{--         --}}
        <section id="discord">

        </section>

        {{--      --}}
        {{-- team --}}
        {{--      --}}
        <section id="team">

        </section>

        {{--         --}}
        {{-- contact --}}
        {{--         --}}
        <section id="contact">

        </section>
    </main>

    <footer>

    </footer>

{{--  header
      slide
      specs
      products
      discord
      team
      contact
      footer  --}}
</body>
</html>
