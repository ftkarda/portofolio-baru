@extends('welcome')

@section('content')


<div class="absolute w-full min-h-screen">
  <div class="absolute top-0 w-full h-1/2 bg-cover bg-center " style="background-image: url('{{asset('background2.jpg')}}'); opacity: 0.2;">
  </div>
</div>

<section class="bg-gray-50 py-20 px-8">
  <div class="max-w-7xl mx-auto ">
    
    <div class="text-center">
      <ion-icon name="person" class="text-6xl text-cyan-400"></ion-icon>
      <h2 class="text-5xl text-gray-800 font-bold leading-relaxed">About Me </h2>
      <p class=" text-gray-800 text-2xl">Born in Balikpapan, graduate from <span class="text-red-600"> Telkom University </span> with degree in informatics. I am self-motivated with passion for technology, basic knowledge on programming, networking and have a strong organization skills.</p>
    </div>
  </div>
  
  <div class="flex justify-center space-x-6 md:justify-items-center md:flex hidden pt-24">
  <a href="{{route('home') }}"  class="bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 rounded-full py-3 px-6 z-10"><ion-icon name="home-outline"></ion-icon> Home</a>
  <a href="{{route('about') }}"  class="{{ Route::is('about') ? 'from-pink-500 to-yellow-500' : 'from-green-400 to-blue-500' }} bg-gradient-to-r hover:to-yellow-500 rounded-full py-3 px-6 z-10"><ion-icon name="person-outline"></ion-icon> About me </a>
  <a href="{{route('portfo') }}"  class="bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 rounded-full py-3 px-6 z-10"><ion-icon name="briefcase-outline"></ion-icon> Portofolios </a>
  </div>



 <div class="grid grid-col-1 sm:grid-cols-2 lg:grid-cols-3 gap-16 mt-16">
   
   <div class="relative">
    <div class="bg-card"></div>

      <div class="relative z-10 bg-white p-12 rounded-md shadow-md">
       <p class="text-2xl font-bold">Experience</p>
       <p class="text-xl mt-4"><span class="text-red-600">CV KLIK</span> IT Consultant <span class="text-sm">| May - Current </span></p>
       <p class="">Front End Web Developer</p>
       <p class="mt-2 inline-flex border-b-2 ">Maintance & Development Front end Web</p>
       <br>
       <p class="text-xl mt-4"> <span class="text-red-600"> Auto2000</span> Suci <span class="text-sm"> | May - August 2017 </span></p>
       <p class="">Intern</p>
       <p class="mt-2 inline-flex border-b-2 ">Create an application project for time calculation such a stopwatch for time management in workshop.</p>
       <br>
       <p class="text-xl mt-4"> <span class="text-red-600">Telkom</span> Balikpapan <span class="text-sm">| May - August 2016 </span></p>
       <p class="">Intern</p>
       <p class="mt-2 inline-flex border-b-2 pb-32">Create, Update, Delete data consumer from Telkom database also migrate data consumer from speedy to indihome product.</p>
     </div>
  </div>
 
    <div class="relative">
     <div class="bg-card"></div>
      
       <div class="relative z-10 bg-white p-12 rounded-md shadow-md">
        <p class="text-2xl font-bold">Skills</p>
         <div class="flex-col md:flex-row space-y-6 md:space-y-6 mt-6 pb-11 cursor-default">
          <div class="transition duration-500 ease-in-out transform hover:scale-125 bg-emerald-600 text-white py-3 px-6 rounded-full inline-flex">
            Tailwind/Bootstrap CSS Framework
          </div>
         <div class="transition duration-500 ease-in-out transform hover:scale-125 bg-emerald-600 text-white py-3 px-6 rounded-full inline-flex">
          Adobe Photoshop/Premier
         </div>
        
         <div class="transition duration-500 ease-in-out transform hover:scale-125 bg-emerald-600 text-white py-3 px-6 rounded-full inline-flex">
          Laravel Framework 
         </div>
         <br>
         <div class="transition duration-500 ease-in-out transform hover:scale-125 bg-emerald-600 text-white py-3 px-6 rounded-full inline-flex">
          Microsoft Office
         </div>
         <br>
         <div class="transition duration-500 ease-in-out transform hover:scale-125 bg-emerald-600 text-white py-3 px-6 rounded-full inline-flex">
          HTML/CSS
        </div>
        <br>
        <div class="transition duration-500 ease-in-out transform hover:scale-125 bg-emerald-600 text-white py-3 px-6 rounded-full inline-flex">
          JavaScript
        </div>
       </div>
      </div>
    </div>
 

    <div class="relative">
      <div class="bg-card"></div>
  
        <div class="relative z-10 bg-white p-12 rounded-md shadow-md">
         <p class="text-2xl font-bold">Certificate</p>
         <p class="text-xl mt-4"><span class="text-red-600">Course-Net Indonesia</span>  <span class="text-sm">| 20 - 23 Oct 2020 </span></p>
         <p class="">"Learn Practical Strategies to Become a Network Admin & IT Support"</p>
         <p class="mt-2 inline-flex border-b-2 ">Understand system addressing using IP Address & Building a simulation LAN, WAN and Internet networks by using cisco packet tracer.</p>
         <br>
         <p class="text-xl mt-4"> <span class="text-red-600"> Skill Academy By Ruangguru</span> <span class="text-sm"> | 1 Nov 2020 </span></p>
         <p class="">"Basic Programming for Data Science" </p>
         <p class="mt-2 inline-flex border-b-2 ">learn and understand basic SQL programming language, R language, & python and implement it.</p>
         <br>
         <p class="text-xl mt-4"> <span class="text-red-600">CodePolitan Online & Udemy</span> <span class="text-sm">| 6 Jun 2021</span></p>
         <p class="">"Learn Web Development Using PHP Programming Language" </p>
         <p class="mt-2 inline-flex border-b-2">learn how to build website using PHP language, SQL Database, HTML, CSS, JavaScript, & jQuery and not only learn concepts, but also how to apply them in creating PHP-based applications.</p>
       </div>
    </div>

   </div>

 </section>


          @endsection