<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Document</title> --}}
    <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
        {{-- //Include bootstrap CSS CDN here --}}

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
</head>
<body>
    
    @yield('content')

</body>
{{-- //Include bootstrap JS CDN here  --}}

</body>
</html>


