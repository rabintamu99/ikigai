<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IKIGAI</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
    
<script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="text-gray-100 font-[Poppins]">
    <nav class="fixed top-0 left-0 w-full py-6">
      <div class="container mx-auto flex justify-between">
        <img src="{{ asset('storage/images/logo.png') }}" class="h-12  animate-bounce" />
        <ul class="text-sm tracking-wide items-center flex gap-x-8">
          <li class="hover:scale-125 duration-300 py-1 hover:text-teal-400">
            <a class="cursor-pointer">Home</a>
          </li>
          <li class="hover:scale-125 duration-300 py-1 hover:text-teal-400">
            <a class="cursor-pointer">Product</a>
          </li>
          <li class="hover:scale-125 duration-300 py-1 hover:text-teal-400">
            <a class="cursor-pointer">About us</a>
          </li>
          <li class="hover:scale-125 duration-300 py-1 hover:text-teal-400">
            <a href="{{ route('login') }}"  class="cursor-pointer">Contact</a>
          </li>
          <a href="{{ route('login') }}" >
          <button 
            class="bg-gradient-to-r from-pink-500 to-violet-500 px-7 rounded-full tracking-wide py-3 text-xs hover:scale-110 duration-300" href="{{ route('login') }}" 
          >
            Login
          </button>
</a>
        </ul>
      </div>
    </nav>
    <section class="bg-gradient-to-r from-blue-500 to-green-500 h-screen flex px-[10%] py-[15%]">
      <img
        src="./webim/Ellipse.png"
        class="z-20 animate-ping w-6 absolute left-24 top-56"
      />
      <img
        src="./webim/Ellipse.png"
        class="z-20 animate-ping w-6 absolute right-96 top-36"
      />
      <img
        src="./webim/Ellipse.png"
        class="z-20 animate-ping w-6 absolute left-64 bottom-24"
      />
      <img
        src="./webim/Ellipse.png"
        class="z-20 animate-ping w-6 absolute right-40 top-64"
      />

      <img src="./webim/wave2.png" class=" text-gradient-to-r from-pink-500 to-violet-500 absolute bottom-20 right-36 w-80" />
      {{-- <img
        src="./webim/wave.png"
        class="absolute z-20 bottom-0 right-0 w-2/3"
      /> --}}
      <div class="flex-1">
        <img src="./webim/connect.svg" class="w-9/12 z-20   bottom-0" />
      </div>

      <div class="flex-1 pt-7">
        <div class="absolute">
          <h1 class="text-3xl leading-normal py-6">
          Creating Connections,<br/>
          Transforming Lives<br/>
            <span class="underline decoration-grey-500">つながり、共有、癒し</span>
          </h1>
          <a href="{{ route('register') }}">
          <button href="{{ route('register') }}" 
            class="bg-gradient-to-r from-pink-500 to-violet-500 px-7 rounded-full tracking-wide py-3 text-xs hover:scale-110 duration-300"
          >
            CONNECT
          </button>
</a>
        </div>
      </div>
    </section>
  </body>
</html>