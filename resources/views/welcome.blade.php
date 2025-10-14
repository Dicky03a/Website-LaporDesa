<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body>
    <h1 class="text-4xl">Hallo Ini projek website kelompoknya <section class="text-8xl"> mas zaki ganteng banget dan kambali si cool banget anjay</section> awok awok</h1>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">
        <a href="{{ route('lapor.create') }}">Klik Saya kalau ada masalah</a>
    </button>
</body>

</html>