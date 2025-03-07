<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salecar</title>
    <!-- my style -->
    <link rel="stylesheet" href="/style/style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/image/racecarsale_logo_element.jpg">
    
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&family=Russo+One&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="body">
    <x-navbar/>
       @if (session('message'))
       {{-- continuare dal minuto 45 video 1 e sistemare il margine qui sotto perche non si vede --}}
           <div class="alert alert-success mt-5">
            {{session('message')}}
            {{-- <button class="btn btn-primary btn-sm ms-3" onclick="redirect{{rooute('home')}}">OK</button> --}}
           </div>

       @endif
    <div class="min-vh-100">
        {{ $slot }}
    </div>

    <x-footer/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
   
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <!-- my JS -->
    <script src="/javascript/script.js"></script>
</body>

</html>
