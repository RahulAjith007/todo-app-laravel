<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device/width,initial-scale=1.0">
    <title>Todos</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" 
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" 
    crossorigin="anonymous" />
</head>
<body>
    <div class="text-center flex justify-center pt-10">
        <div class="w-1/3 border border-gray-400 rounded">
            @yield('content')
        </div>
         
    </div>
</body>