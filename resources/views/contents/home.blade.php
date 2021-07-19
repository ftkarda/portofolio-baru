@extends('welcome')

@section('content')

    <body class="antialised text-gray-600">
        <div class="absolute w-full min-h-screen">
          <div class="absolute top-0 w-full h-1/2 bg-cover bg-bottom" style="background-image: url('{{asset('background.jpg')}}'); opacity: 0.7;">
          </div>
        </div>
          <section class="flex justify-center items-center min-h-screen">
              <div class="relative">
                  <div class="bg-card">
                  </div>
                <div class="relative md:flex space-x-12 z-2 bg-white max-w-7xl p-12 rounded-md shadow-md">
                  <div class="flex flex-col space-y-6 justify-between py-4">
                    <div>
                     <img src="{{asset('3x4/photo1.jpg')}}" alt="" class="w-48 rounded-full border-6 border-white shadow-md flex-shrink-0">
                       <p class="text-lg">Hello, I am</p>
                       <h1 class="text-5xl font-bold text-gray-800">
                         Ardha Fatika
                       </h1>
                       <p class="text-xs leading-loose">Email: fatikaardha@gmail.com | No. 085346741110</p>
                    </div>
                     </p>
                     <div class=" inline-flex space-x-4 text-3xl">
                       <a href="https://www.linkedin.com/in/ftkarda/" class="bg-white hover:bg-blue-100 active:bg-blue-100 rounded-full"> <ion-icon name="logo-linkedin"></ion-icon></a>
                       <a href="https://www.instagram.com/ftkarda/" class="bg-white hover:bg-blue-100 rounded-full"> <ion-icon name="logo-instagram"></ion-icon></a>
                       <a href="mailto:fatikaardha@gmail.com" class="bg-white hover:bg-blue-100 rounded-full"> <ion-icon name="mail-outline"></ion-icon></a>
                     </div>
                  </div>
                </div>
              </div>
              <nav class="flex-col space-y-6 z-10 md:flex hidden">
                  <a href="{{route('home') }}" class="{{ Route::is('home') ? 'from-pink-500 to-yellow-500' : 'from-green-400 to-blue-500' }} bg-gradient-to-r  hover:from-pink-500 hover:to-yellow-500 rounded-r-lg py-3 px-6"> <ion-icon name="home-outline"></ion-icon> Home</a>
                  <a href="{{route('about') }}" class="bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 rounded-r-lg py-3 px-6"><ion-icon name="person-outline"></ion-icon> About me </a>
                  <a href="{{route('portfo') }}" class="bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 rounded-r-lg py-3 px-6"><ion-icon name="briefcase-outline"></ion-icon> Portofolios </a>
                <button class="bg-green-400 hover:bg-green-500 rounded-r-lg py-3 px-6" id="whatsapp">Contact Me <ion-icon name="logo-whatsapp"></ion-icon></button>
              </nav>
          </section> 


    </body>

        

@endsection