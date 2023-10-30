<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">

    <link href="https://unpkg.com/maplibre-gl@2.4.0/dist/maplibre-gl.css" rel="stylesheet"/>
    <script src="https://unpkg.com/maplibre-gl@2.4.0/dist/maplibre-gl.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/index.css')}}">

    <!-- Styles -->
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
   <a class="navbar-brand  d-flex align-items-center" href="/">
       <img style="width: 60px; height:36px ; " src="{{asset('images/caduceus.jpg')}}" alt="">
       PharmaSyria
   </a>
   {{--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
           aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
   </button>  --}}


@if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            <a href="/" class="font-semibold text-gray-600 ml-4  hover:text-blue-500 dark:text-gray-400 " id ="nav"> الرئيسية </a>


            <a href="{{ route('About') }}" class="font-semibold text-gray-600 ml-4  hover:text-blue-500  dark:text-gray-400  "id ="nav">حول الموقع</a>


            <a href="{{ route('Help') }}" class="font-semibold text-gray-600 ml-4  hover:text-blue-500  dark:text-gray-400  " id ="nav">أسئلة متكررة</a>
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold ml-4 text-gray-600 hover:text-gray-900 dark:text-gray-400 " id ="nav">ملفي الشخصي</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold ml-4 text-gray-600  hover:border-blue-500 dark:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500" id="nav">تسجيل الدخول</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-blue-500 dark:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500" id ="nav">إنشاء حساب</a>

                @endif
            @endauth

        </div>
    @endif

</nav>

</body>
</html>
