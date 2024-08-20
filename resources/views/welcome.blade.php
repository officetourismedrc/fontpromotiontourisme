<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Fpt</title>
          <!--================REMIXICONS==================-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('assets/css/office.css')}}" />

        <!-- Styles -->
       
    </head>
    <body class="antialiased">
        
        {{-- page header  --}}
        @include('layouts.header')


        {{-- page main  --}}
        <main class="main" id="main">
             @include('layouts.main.section.definition')
        </main>



        {{-- page footer  --}}
        @include('layouts.footer')
       


        {{-- js script  --}}

        <script src="{{url('assets/js/scrollreveal.min.js')}}"></script>
       <script src="{{url('assets/js/office.js')}}"></script>


    </body>
</html>
