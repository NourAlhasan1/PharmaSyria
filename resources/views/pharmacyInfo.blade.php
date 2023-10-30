<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <title>Your Pharmacy</title>
    <script src="https://kit.fontawesome.com/1c0928d3ce.js" crossorigin="anonymous"></script>
    <style>
        /* @font-face {
            font-family: "Yazan";
            src: url("//resources/Fonts/comic.ttf");
        } */

        * {

            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        #pharFormContainer {
            /*position: fixed;*/

            box-shadow: 0px 10px 13px -15px black;
            width: 35%;
            max-width: 75%;
            min-height: 60vh;
            max-height: 60vh;
            margin: 20px auto;
            overflow-y: scroll;

            scroll-behavior: smooth;
            border-radius: 10px;
            border-bottom: 1px solid black;
        }

        .dashform-label {

            font-size: 15px;
            font-weight: bold;
            text-transform: capitalize;
            margin-bottom: 5px;
        }

        .dashform-input {

            width: 100%;
            padding: 10px;
            border: none;
            background: #f3f4f6 !important;
            border-bottom: 1px solid black;
            margin-bottom: 20px;
            font-size: 16px;
            line-height: 1.5;
        }

        .dashform-input:hover, .dashform-input:focus {
            border-bottom: 2px solid black;
        }

        .dashform-select {

            width: 100%;
            padding: 10px;
            border: none;
            background: #f3f4f6;
            border-bottom: 1px solid black;
            margin-bottom: 20px;
            font-size: 16px;
            line-height: 1.5;
        }

        .dashform-select:hover, .dashform-select:focus {
            border-bottom: 2px solid black;
            cursor: pointer;
        }

        #location {

            margin: 0 auto;
            background: #f3f4f6 !important;
            border-bottom: solid 1px black;
            padding: 10px 20px;
            text-transform: capitalize;
            font-weight: normal;
            letter-spacing: 1px;
            border-bottom: 1px solid black;
            color: black;
            width: 100%;
        }

        #location:hover {
            border-bottom: 2px solid black;
            font-weight: bold;
        }

        #dashSubmit {

            margin: 2% auto;
            background: rgb(77, 142, 233) !important;
            border-radius: 10px;
            border: solid 1px #777;
            padding: 10px 70px;
            text-transform: capitalize;
            font-weight: bold;
            letter-spacing: 2px;
            border-bottom: 5px solid black;
            color: white;
            display: flex;
            justify-content: center
        }

        #dashSubmit:hover {
            border: 1px solid black;
            border-bottom: 5px solid black;
        }

        #dashSubmit:active {
            position: relative;
            border-bottom: 1px solid black;
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>

<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight sm:ml-10">شارك معلومات صيدليتك معنا </h2>
    </x-slot>


    {{--    id="pharFormContainer"--}}
    <form id="pharForm"
              action="{{ route('pharmacyInformation') }}"
          method="Post">
        @csrf
        <div id="pharFormContainer" class="no-scrollbar">
            <label class="dashform-label" for="name"> اسم الصيدلية</label>
            <input class="dashform-input" type="text" id="name" name="name" value="{{$pharmacy?->Pharmacy_name}}" required>

            <label class="dashform-label" for="phone">رقم الصيدلية</label>
            <input class="dashform-input" type="tel" id="phone" name="phone" value="{{$pharmacy?->Pharmacy_number}}" required>

            <label class="dashform-label" for="city">المدينة</label>
            <select class="dashform-select" id="city" name="city" required>
                <option value="">Select a city</option>
                <option value="homs" @if($pharmacy?->City == "homs") selected @endif>حمص</option>
                <option value="damascus"@if($pharmacy?->City == "damascus") selected @endif >دمشق</option>
                <option value="latakia"@if($pharmacy?->City == "latakia") selected @endif >اللاذقية</option>
            </select>

            <label class="dashform-label" for="area">المنطقة</label>
            <input class="dashform-input" type="text" id="area" name="area" value="{{$pharmacy?->Area}}" required>

            <label class="dashform-label" for="location">الموقع
            <div class="flex justify-between items-center grid grid-cols-12">
                <h1 class="col-span-8">حدد موقع صيدليتك  </h1>
                <div class="col-span-4 text-xs">
                  
                    <input type="text" readonly class="h-4 w-full latitude-value" name="latitude"  value="{{$pharmacy?->latitude}}"/>
                    <br/>
                    <input type="text" readonly class="h-4 w-full longitude-value" name="longitude"  value="{{$pharmacy?->longitude}}"/>
                </div>
            </div>
            <hr class="w-50"/>

            <x-select-on-map longitude="{{$pharmacy?->longitude}}" latitude="{{$pharmacy?->latitude}}" />;

        </div>
        <button id="dashSubmit" type="submit">حفظ</button>
    </form>
</x-app-layout>

<link rel="stylesheet" href="https://api.mapbox.com/maplibre-gl-js/v0.53.0/maplibre-gl.css"/>
<script src="https://api.mapbox.com/maplibre-gl-js/v0.53.0/maplibre-gl.js"></script>
</body>

</html>
