@extends('welcome')

@section('content')

<div class="absolute w-full min-h-screen">
  <div class="absolute top-0 w-full h-1/2 bg-cover bg-top " style="background-image: url('{{asset('background3.jpg')}}'); opacity: 0.2;">
  </div>
</div>

<section class="bg-gray-50 py-20 px-8">
  <div class="max-w-7xl mx-auto ">
    
    <div class="text-center">
      <ion-icon name="briefcase" class="text-6xl text-cyan-400"></ion-icon>
      <h2 class="text-5xl text-gray-800 font-bold leading-relaxed">Portofolios</h2>
      <p class="text-gray-800 text-2xl">Here's what i'm doing</p>
    </div>
  </div>
  
  
  {{-- <div class="flex justify-center space-x-6 md:justify-items-center md:flex hidden pt-24">
  <a href="{{route('home') }}"  class="bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 rounded-full py-3 px-6 z-10"><ion-icon name="home-outline"></ion-icon> Home</a>
  <a href="{{route('about') }}"  class="bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 rounded-full py-3 px-6 z-10"><ion-icon name="person-outline"></ion-icon> About me </a>
  <a href="{{route('portfo') }}"  class="{{ Route::is('portfo') ? 'from-pink-500 to-yellow-500' : 'from-green-400 to-blue-500' }} bg-gradient-to-r hover:from-pink-500 hover:to-yellow-500 rounded-full py-3 px-6 z-10"><ion-icon name="briefcase-outline"></ion-icon> Portofolios </a>
  </div> --}}

  <div class="grid grid-col-1 sm:grid-cols-2 lg:grid-cols-3 gap-16 mt-16">
   
    <div class="relative">
     <div class="bg-card"></div>

      <div class="relative z-10 bg-white p-12 rounded-md shadow-md">
       <p class="text-2xl font-bold">Company Profile</p>

       <div id="card-slider" class="splide mt-4">
         <div class="splide__track">
           <ul class="splide__list">
            <li class="splide__slide">
              <img src="{{asset('portofolio/cvklik1.jpg')}}" class="object-cover">
            </li>
            <li class="splide__slide">
              <img src="{{asset('portofolio/cvklik2.jpg')}}" class="object-cover">
             
            </li>
            <li class="splide__slide">
              <img src="{{asset('portofolio/cvklik3.JPG')}}" class="object-cover">
            </li>
            <li class="splide__slide">
              <img src="{{asset('portofolio/cvklik4.JPG')}}" class="object-cover">
            </li>
           </ul>
         </div>
        <p class="mt-4 font-semibold">Build Company Profile cvklik.com</p>
       </div>
      
      </div>
    </div>

    <div class="relative">
      <div class="bg-card"></div>
       
        <div class="relative z-10 bg-white p-12 rounded-md shadow-md">
         <p class="text-2xl font-bold">Maintance Website</p>

         <img src="{{asset('portofolio/halopajajaran.JPG')}}" alt="Halopapajaran.com" class="mt-4 zoom">

         <p class="mt-14 font-semibold">Maintance Website halopajajaran.com</p>

       </div>
     </div>

     
    <div class="relative">
      <div class="bg-card"></div>
       
        <div class="relative z-10 bg-white p-12 rounded-md shadow-md">
         <p class="text-2xl font-bold">Portfolio Online</p>

         <img src="{{asset('portofolio/portfo.JPG')}}" alt="http://ftkarda.herokuapp.com " class="mt-4 zoom">

         <p class="mt-14 font-semibold">Build portfolio http://ftkarda.herokuapp.com Inspire from tailwind play</p>

       </div>
       
     </div>
     
       </div>
     </div>

  </div>
  

  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
   </div>

    </section> 


</body>

@endsection