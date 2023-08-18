
<x-app-layout>

 
<div class=" container mx-5 py-8">
    <div class="flex ">
        <div class="w-1/4 pr-4">
            <!-- Circle Details Card -->
            <div class="bg-white rounded-lg shadow p-4">
              <div class="text-5xl font-extrabold ...">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
                  Circle
                </span>
                </div>
                         
               <p class="text-gray-600">connect with like-minded individuals, share experiences, and collaborate on their personal growth and well-being journeys.</p>
               
       
                <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="{{ route('dashboard') }}">
                  <svg class="w-[30px] h-[30px] text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                  <span class="ml-2 text-lg font-medium">Create Circle</span>
                </a>
                <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="{{ route('dashboard') }}">
                  <svg class="w-[30px] h-[30px] text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                  <span class="ml-2 text-lg font-medium">Discover Circle</span>
                </a>
              
            </div>
        </div>
        <div class="w-4/4  bg-white rounded-lg shadow p-4">
            <!-- Discussion Board -->
            <section class="py-5 bg-gray-100">
              <div class="mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                  <a href="#">
                    <div class="relative flex h-100 w-200 items-end overflow-hidden rounded-xl">
                      <img src="https://images.unsplash.com/photo-1518708909080-704599b19972?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" class=" h-100 w-100" alt="Hotel Photo" />
                      <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                          <path stroke-linecap="round"  stroke-line join="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
            
                        <button class="text-sm">Join</button>
                      </div>
                    </div>
            
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Wellness and Self-Care</h2>
                      <p class="mt-1 text-sm text-slate-400">Health</p>
            
                      <div class="mt-3 flex items-end justify-between">
                        <p class="text-sm font-semibold 200 Members">200 Members</p>
            
                        <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
            
                          <button class="text-sm">Join</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
                <article class="rounded-xl  bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                  <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img  src="https://images.unsplash.com/photo-1511556532299-8f662fc26c06?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Hotel Photo" />
                      <div class="absolute bottom-3 left-3 inline-flex items-center rounded-lg bg-white p-2 shadow-md">
                        <svg class="w-[20px] h-[20px] text-gray-800 dark:text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11.5 8V4.5a3.5 3.5 0 1 0-7 0V8M8 12v3M2 8h12a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="ml-1 text-sm text-slate-400">Private</span>
                      </div>
                    </div>
            
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Personal Growth and Development</h2>
                      <p class="mt-1 text-sm text-slate-400">Personal Growth and Development</p>
            
                      <div class="mt-3 flex items-end justify-between">
                        <p class="text-sm font-semibold 200 Members">200 Members</p>
                        <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
            
                          <button class="text-sm">Join</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
               
                <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                  <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img src="https://images.unsplash.com/photo-1553830591-fddf9c6e2ed1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Hotel Photo" />
                      <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
            
                        <button class="text-sm">Join</button>
                      </div>
                    </div>
            
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Support and Empathy</h2>
                      <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>
            
                      <div class="mt-3 flex items-end justify-between">
                        <p class="text-sm font-semibold 200 Members">200 Members</p>
                        <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
            
                          <button class="text-sm">Join</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
            
                <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                  <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img src="https://images.unsplash.com/photo-1691478845901-0dcfc185d07e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=986&q=80" alt="Hotel Photo" />
                      <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
            
                        <button class="text-sm">Join</button>
                      </div>
                    </div>
            
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Creativity and Artistry</h2>
                      <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>
            
                      <div class="mt-3 flex items-end justify-between">
                        <p class="text-sm font-semibold 200 Members">200 Members</p>
                        <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
            
                          <button class="text-sm">Join</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
                <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                  <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img src="https://images.unsplash.com/photo-1493612276216-ee3925520721?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80" alt="Hotel Photo" />
                      <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
            
                        <button class="text-sm">Join</button>
                      </div>
                    </div>
            
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Career and Professional Development</h2>
                      <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>
            
                      <div class="mt-3 flex items-end justify-between">
                        <p class="text-sm font-semibold 200 Members">200 Members</p>
                        <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
            
                          <button class="text-sm">Join</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
                <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                  <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img src="https://images.unsplash.com/photo-1551107696-a4b0c5a0d9a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1112&q=80" alt="Hotel Photo" />
                      <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
            
                        <button class="text-sm">Join</button>
                      </div>
                    </div>
            
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Relationships and Connection</h2>
                      <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>
            
                      <div class="mt-3 flex items-end justify-between">
                        <p class="text-sm font-semibold 200 Members">200 Members</p>
            
                        <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
            
                          <button class="text-sm">Join</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
                <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                  <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img src="https://images.unsplash.com/photo-1539185441755-769473a23570?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="Hotel Photo" />
                      <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
            
                        <button class="text-sm">Join</button>
                      </div>
                    </div>
            
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Hobbies and Interests</h2>
                      <p class="mt-1 text-sm text-slate-400">Lisbon, Portugal</p>
            
                      <div class="mt-3 flex items-end justify-between">
                        <p class="text-sm font-semibold 200 Members">200 Members</p>
            
                        <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
            
                          <button class="text-sm">Join</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
                <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                  <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1112&q=80" alt="Hotel Photo" />
                      <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
            
                        <button class="text-sm">Join</button>
                      </div>
                    </div>
            
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Cultural Exchange</h2>
                      <p class="mt-1 text-sm text-slate-400">Education and Learning</p>
            
                      <div class="mt-3 flex items-end justify-between">
                        <p class="text-sm font-semibold 200 Members">200 Members</p>
            
                        <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
            
                          <button class="text-sm">Join</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
                <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                  <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1112&q=80" alt="Hotel Photo" />
                      <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
            
                        <button class="text-sm">Join</button>
                      </div>
                    </div>
            
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Cultural Exchange</h2>
                      <p class="mt-1 text-sm text-slate-400">Education and Learning</p>
            
                      <div class="mt-3 flex items-end justify-between">
                        <p class="text-sm font-semibold 200 Members">200 Members</p>
            
                        <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
            
                          <button class="text-sm">Join</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
                <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                  <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1112&q=80" alt="Hotel Photo" />
                      <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
            
                        <button class="text-sm">Join</button>
                      </div>
                    </div>
            
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Cultural Exchange</h2>
                      <p class="mt-1 text-sm text-slate-400">Education and Learning</p>
            
                      <div class="mt-3 flex items-end justify-between">
                        <p class="text-sm font-semibold 200 Members">200 Members</p>
            
                        <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
            
                          <button class="text-sm">Join</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
                <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                  <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1112&q=80" alt="Hotel Photo" />
                      <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
            
                        <button class="text-sm">Join</button>
                      </div>
                    </div>
            
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Cultural Exchange</h2>
                      <p class="mt-1 text-sm text-slate-400">Education and Learning</p>
            
                      <div class="mt-3 flex items-end justify-between">
                        <p class="text-sm font-semibold 200 Members">200 Members</p>
            
                        <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
            
                          <button class="text-sm">Join</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
                <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                  <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1112&q=80" alt="Hotel Photo" />
                      <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
            
                        <button class="text-sm">Join</button>
                      </div>
                    </div>
            
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Cultural Exchange</h2>
                      <p class="mt-1 text-sm text-slate-400">Education and Learning</p>
            
                      <div class="mt-3 flex items-end justify-between">
                        <p class="text-sm font-semibold 200 Members">200 Members</p>
            
                        <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
            
                          <button class="text-sm">Join</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
                <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                  <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1112&q=80" alt="Hotel Photo" />
                      <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
            
                        <button class="text-sm">Join</button>
                      </div>
                    </div>
            
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Cultural Exchange</h2>
                      <p class="mt-1 text-sm text-slate-400">Education and Learning</p>
            
                      <div class="mt-3 flex items-end justify-between">
                        <p class="text-sm font-semibold 200 Members">200 Members</p>
            
                        <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
            
                          <button class="text-sm">Join</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>
                <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                  <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1112&q=80" alt="Hotel Photo" />
                      <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                        <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
            
                        <button class="text-sm">Join</button>
                      </div>
                    </div>
            
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Cultural Exchange</h2>
                      <p class="mt-1 text-sm text-slate-400">Education and Learning</p>
            
                      <div class="mt-3 flex items-end justify-between">
                          <p class="text-sm font-semibold 200 Members">200 Members</p>
            
                        <div class="flex items-center space-x-1.5 rounded-full bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <svg class="w-[20px] h-[20px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-lineJoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
            
                          <button class="text-sm">Join</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </article>









            </section>
 </div>


</x-app-layout>