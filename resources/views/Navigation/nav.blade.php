



<nav class="fixed bottom-4 bg-gradient-to-r from-cyan-400 to-emerald-400 right-4 rounded-full px-4 py-6 z-50 md:hidden" id="hamburger">
    <span>Menu</span>
  
  <div class="fixed flex flex-col bg-green-100 bg-opacity-50 text-2xl justify-end items-end pb-24 pr-5 space-y-6 inset-0 antialised text-gray-600 md:hidden js-toggle">
    <a href="{{route('home') }}"  class="bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 rounded-full py-3 px-6 z-10"><ion-icon name="home-outline"></ion-icon> Home</a>
    <a href="{{route('about') }}"  class="bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 rounded-full py-3 px-6 z-10"><ion-icon name="person-outline"></ion-icon> About me </a>
    <a href="{{route('portfo') }}"  class="bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 rounded-full py-3 px-6 z-10"><ion-icon name="briefcase-outline"></ion-icon> Portofolios </a>
    <button class="bg-green-500 hover:bg-green-700 rounded-full py-3 px-6 " id="whatsapp">Contact Me <ion-icon name="logo-whatsapp"></ion-icon></button>
  </div>
</nav>