<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tieudetrang')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container>header {
            height: 220px;
        }

        .container>nav {
            height: 56px;
        }

        .container>footer {
            height: 90px;
        }

        .container>main {
            display: flex;
            min-height: 500px;
        }

        #noidung {
            text-align: justify;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="bg-primary text-center"></header>
        <nav class="bg-warning">
            @include('menu')
        </nav>
        <main>
            <article class="col-9 bg-light">
                @yield('noidung')
            </article>
            <aside class="col-3 bg-info text-center">
                THÔNG TIN BỔ SUNG
            </aside>
        </main>
        <footer class="bg-dark text-light text-center">PHÁT TRIỂN BỞI XYZ</footer>
    </div>
</body>

</html>
