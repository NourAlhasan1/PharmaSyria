{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link rel="stylesheet" href="../css/app.css">--}}
{{--    <title>Your Pharmacy</title>--}}
{{--    <script src="https://kit.fontawesome.com/1c0928d3ce.js" crossorigin="anonymous"></script>--}}
{{--    <style>--}}
{{--    /* @font-face {--}}
{{--        font-family: "Yazan";--}}
{{--        src: url("//resources/Fonts/comic.ttf");--}}
{{--    } */--}}

{{--    * {--}}

{{--        box-sizing: border-box;--}}
{{--        margin: 0; padding: 0;--}}
{{--        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;--}}
{{--    }--}}
{{--    #pharFormContainer {--}}
{{--        position: fixed;--}}
{{--        top: 25%;--}}
{{--        left: 0;--}}
{{--        bottom: 0;--}}
{{--        right: 0;--}}
{{--        box-shadow: 0px 10px 13px -15px black;--}}
{{--        width: 35%;--}}
{{--        max-width: 75%;--}}
{{--        height: 55%;--}}
{{--        max-height  : 100%;--}}
{{--        margin: 0 auto;--}}
{{--        border-radius:10px;--}}
{{--        border-bottom: 1px solid black;--}}
{{--    }--}}

{{--    .dashform-label {--}}

{{--        font-size: 15px;--}}
{{--        font-weight: bold;--}}
{{--        text-transform:capitalize;--}}
{{--        margin-bottom: 5px;--}}
{{--    }--}}

{{--    .dashform-input {--}}

{{--        width: 100%;--}}
{{--        padding: 10px;--}}
{{--        border: none;--}}
{{--        background: #f3f4f6 !important;--}}
{{--        border-bottom: 1px solid black;--}}
{{--        margin-bottom: 20px;--}}
{{--        font-size: 16px;--}}
{{--        line-height: 1.5;--}}
{{--    }--}}

{{--    .dashform-input:hover, .dashform-input:focus {--}}
{{--        border-bottom: 2px solid black;--}}
{{--    }--}}

{{--    .dashform-select {--}}

{{--        width: 100%;--}}
{{--        padding: 10px;--}}
{{--        border: none;--}}
{{--        background: #f3f4f6;--}}
{{--        border-bottom: 1px solid black;--}}
{{--        margin-bottom: 20px;--}}
{{--        font-size: 16px;--}}
{{--        line-height: 1.5;--}}
{{--    }--}}

{{--    .dashform-select:hover, .dashform-select:focus {--}}
{{--        border-bottom: 2px solid black;--}}
{{--        cursor: pointer;--}}
{{--    }--}}

{{--    #location {--}}

{{--        margin: 0 auto;--}}
{{--        background:#f3f4f6 !important;--}}
{{--        border-bottom: solid 1px black;--}}
{{--        padding: 10px 20px;--}}
{{--        text-transform: capitalize;--}}
{{--        font-weight: normal;--}}
{{--        letter-spacing: 1px;--}}
{{--        border-bottom: 1px solid black;--}}
{{--        color: black;--}}
{{--        width: 100%;--}}
{{--    }--}}
{{--    #location:hover {--}}
{{--        border-bottom: 2px solid black;--}}
{{--        font-weight: bold;--}}
{{--    }--}}
{{--    #dashSubmit {--}}

{{--        margin: 5% auto;--}}
{{--        background:rgb(77,142,233) !important;--}}
{{--        border-radius: 10px;--}}
{{--        border:solid 1px #777;--}}
{{--        padding: 10px 70px;--}}
{{--        text-transform: capitalize;--}}
{{--        font-weight: bold;--}}
{{--        letter-spacing: 2px;--}}
{{--        border-bottom: 5px solid black;--}}
{{--        color: white;--}}
{{--        display: flex;--}}
{{--        justify-content: center--}}
{{--    }--}}

{{--    #dashSubmit:hover {--}}
{{--        border: 1px solid black;--}}
{{--        border-bottom: 5px solid black;--}}
{{--    }--}}

{{--    #dashSubmit:active{--}}
{{--        position: relative;--}}
{{--        top:5px;--}}
{{--        border-bottom:1px solid black;--}}
{{--    }--}}

{{--    </style>--}}
{{--</head>--}}

{{--<body>--}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight sm:ml-10">شارك معلومات صيدليتك معنا
        </h2>
    </x-slot>


    {{--    id="pharFormContainer"--}}
    <div class="p-6 flex justify-center">
        <form id="pharForm" action="{{ route('pharmacyInformation') }}" method="Post"
              class="flex flex-col justify-center items-center">
            @csrf
            <div class="flex flex-col justify-start ">
                <label class="dashform-label" for="name">اسم الصيدلية</label>
                <input class="dashform-input" type="text" id="name" name="name" required>
            </div>

            <div>

                <label class="dashform-label" for="phone">رقم الصيدلية</label>
                <input class="dashform-input" type="tel" id="phone" name="phone" required>
            </div>

            <div>

                <label class="dashform-label" for="city">المدينة:</label>
                <select class="dashform-select" id="city" name="city" required>
                    <option value="">اختر مدينة</option>
                    <option value="homs">حمص</option>
                    <option value="damascus">دمشق</option>
                    <option value="latakia">اللاذقية</option>
                </select>
            </div>

            <div>


                <label class="dashform-label" for="area">المنطقة</label>
                <input class="dashform-input" type="text" id="area" name="area" required>
            </div>

            <div>
                <label class="dashform-label" for="location">الموقغ</label>
                <x-map/>
            </div>

            {{--  <a href="{{ route('map') }}"> <button type="button" id="location">Location on map</button></a>  --}}

            {{--            <div id="map-section">--}}
            {{--                <div class="map-wrapper">--}}
            {{--                    <div class="map-container">--}}
            {{--                        <x-Dashmap/>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div>
                <button id="dashSubmit" type="submit">حفظ</button>
            </div>
        </form>
    </div>
</x-app-layout>

<link rel="stylesheet" href="https://api.mapbox.com/maplibre-gl-js/v0.53.0/maplibre-gl.css"/>
<script src="https://api.mapbox.com/maplibre-gl-js/v0.53.0/maplibre-gl.js"></script>
