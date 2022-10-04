<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @inertiaHead
</head>

<body>
    @inertia
</body>

</html>