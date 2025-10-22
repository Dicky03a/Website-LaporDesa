<!DOCTYPE html>
<html lang="en">

<head>
      @include('partials.head')
      <title>Main Layout</title>
</head>

<body class="bg-gray-100 font-sans antialiased">

      @yield('main')

      @include('components.layouts.navbar')

</body>

</html>