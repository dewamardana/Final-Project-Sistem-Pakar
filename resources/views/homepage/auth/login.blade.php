<!-- resources/views/auth/login.blade.php -->
@extends('homepage.layout.main')
@section('content')
  <section class="mt-10 mx-auto min-h-[80vh] max-w-md bg-gray-50 dark:bg-slate-900 transition-colors">
    <div class="w-full bg-white dark:bg-slate-800 rounded-lg shadow-lg p-8">
      <h2 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-slate-100">Login ke <span
          class="text-amber-500">MindCheck</span></h2>

      <form action="" method="POST" class="space-y-5">
        @csrf
        <!-- Email -->
        <div>
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Email</label>
          <input type="email" name="email" id="email" required
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-gray-400 dark:text-white">
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Password</label>
          <input type="password" name="password" id="password" required
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-gray-400 dark:text-white">
        </div>

        <!-- Remember -->
        <div class="flex items-center">
          <input id="remember" type="checkbox" name="remember"
            class="w-4 h-4 text-amber-500 bg-gray-100 border-gray-300 rounded focus:ring-amber-500 dark:focus:ring-amber-600 dark:ring-offset-gray-800 dark:bg-slate-700 dark:border-slate-600">
          <label for="remember" class="ml-2 text-sm text-gray-600 dark:text-gray-300">Ingat saya</label>
        </div>

        <!-- Submit -->
        <button type="submit"
          class="w-full bg-amber-500 hover:bg-amber-600 text-white font-medium rounded-lg px-5 py-2.5 text-center">Login</button>

      </form>
    </div>
  </section>
@endsection
