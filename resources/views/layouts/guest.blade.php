<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Fpt') }}</title>

       
          <!--================REMIXICONS==================-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('assets/css/office.css')}}" />

        
    </head>
    <body class="body">
        @include('layouts.headerNoNav')
    <main class="main">
        <section class="section block-1">

            <div class="block-2">
                {{ $slot }}
            </div>

        </section>
    </main>

        @include('layouts.footer')
        {{-- <p style='font-size:3rem; color:red;'>dont have the necessary credential to access this page</p> --}}
    
        <script src="{{url('assets/js/scrollreveal.min.js')}}"></script>
        <script src="{{url('assets/js/office.js')}}"></script>
    </body>
</html>