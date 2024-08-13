<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Coba</title>
</head>
<body>
    <h1>Ini View Laravel Coba!</h1>

    {{-- @php
        for ($i = 0; $i < 10; $i++) { 
            echo '<h1>ini perulangan</h1>';
        }
    @endphp --}}

    {{-- <br />

    @for ($i = 0; $i < 10; $i++)
        @if ($i % 2)
            <h1>ini perulangan ke 3</h1>
        @endif
    @endfor

    @for ($i = 0; $i < 10; $i++)
        <h1>Perulangan menggunakan blade</h1>

        @if ($i == 3)
            <h1>ini perulangan ke 3</h1>
        @endif
    @endfor --}}

    <img src="{{ asset('react.png') }}" alt="gambar-react" width="300">
</body>
</html>