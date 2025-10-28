<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
@vite(['resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @livewire('show-posts', ['title'=> 'Este es un titulo de prueba']);
    </div>
     </div>

</body>
</html>
