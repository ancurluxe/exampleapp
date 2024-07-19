<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    @vite('resources/css/app.css')
    <!-- styles and scripts -->
</head>

<body>

    <header>
        @include('frontend.layout.header')

    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
        @include('frontend.layout.footer')
    </footer>
    <!--scripts -->
</body>

</html>