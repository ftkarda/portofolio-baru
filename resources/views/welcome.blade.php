<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ardha Fatika</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- CSS --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/splide.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    

        <!-- Styles -->
        <style>
          
        </style>

    </head>
    <body>
      @yield('content')

      @include('navigation.nav')
    </body>
    

         <!-- Script -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        {{-- <script>src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"</script>   --}}
        <script src="js/app.js"></script>
    
</html>
