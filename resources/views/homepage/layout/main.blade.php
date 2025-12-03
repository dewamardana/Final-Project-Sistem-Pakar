<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="bg-white text-gray-900 dark:bg-slate-900 dark:text-slate-100 transition-colors duration-500">
  @include('homepage.layout.header')
  @yield('content')
  @yield('script')
  @include('homepage.layout.footer')
  <!-- Script Flowbite -->
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

  <!-- Dark Mode Toggle Script -->
  <script>
    const themeToggle = document.getElementById('theme-toggle');
    const html = document.documentElement;

    // Load preference
    if (localStorage.getItem('theme') === 'light') {
      html.classList.remove('dark');
      themeToggle.textContent = '🌞';
    } else {
      html.classList.add('dark');
      themeToggle.textContent = '🌙';
    }

    // Toggle on click
    themeToggle.addEventListener('click', () => {
      html.classList.toggle('dark');
      if (html.classList.contains('dark')) {
        localStorage.setItem('theme', 'dark');
        themeToggle.textContent = '🌙';
      } else {
        localStorage.setItem('theme', 'light');
        themeToggle.textContent = '🌞';
      }
    });
  </script>
</body>

</html>
