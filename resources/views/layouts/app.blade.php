<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD Data Siswa Menggunakan Livewire</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

	   @livewireStyles
	
    </head>
    <body>

        @yield('content')

         <footer class="text-center  my-5">
             Developed by Ravialdo Imanda Putra
         </footer>
        
        @livewireScripts

        <script  src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
