<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Dashboard')</title>
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/flowbite@2.5.1/dist/flowbite.min.js"></script>
</head>

<body class="bg-gray-100 dark:bg-slate-900">
  @include('dashboard.layouts.header')
  @include('dashboard.layouts.sidebar')

  <!-- Content -->
  <main class="p-6 sm:ml-64 mt-20">
    @yield('content')
  </main>
</body>

</html>
