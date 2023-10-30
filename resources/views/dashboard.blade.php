<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/1c0928d3ce.js" crossorigin="anonymous"></script>

    <title>Dashboard</title>
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

        #dashContainer {
            position: fixed;
            top: 15%;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            max-width: 75%;
            /* height: 100%;
            max-height: 100%; */
            margin: 0 auto;
            border-radius: 10px;
        }

        .dash h1 {
            font-size: 2em;
            padding-bottom: 1.5em;
        }

        .dash button {
            margin: 2.2em;
            padding: 2.2em
        }

        .dashtext {
            display: block;
            font-size: 1.5em;
            letter-spacing: 1px;
            margin-bottom: 1em;
            font-weight: bold;
        }

    </style>
</head>

<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight sm:ml-10">معلومات صيدليتي</h2>
    </x-slot>
</x-app-layout>

<div id="dashContainer">

 <div class="mt30 mb20 text-center">

    <div class=" col-span-7 mt-5">

                <img src="{{asset('images/pharmacyInfoImg.jpg')}}">
         
        <div class="grid grid-cols-12 border-b-2  mt-15 pb-10 mr-20 ml-3">
            <div class="dash col-span-12  items-start">
          
                <div class="flex justify-center ">
                <a href="{{ route('pharmacyInfo') }}" class="btn btn-primary btn-block p-2 m-2">
                        <i class="bi bi-person-square p-2 m-5">
                            <span class="ml-2">اضافة موقع </span>
                        </i>
                </a>
                </div>
            </div>
        
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
