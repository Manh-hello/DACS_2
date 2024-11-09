<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashion Shop</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/reset.css', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-header></x-header>
    @yield('content')
    <x-footer></x-footer>
</body>

</html>
