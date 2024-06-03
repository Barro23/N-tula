<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="">
    <title>Nótula</title>
    

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class=""> 
    @include('layout.navbar')

    <section>
        @yield('content')
    </section>
    
    @include('layout.footer')
</div>
</body>
</html>