<x-app-layout>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->

      <!-- Dashboard Container -->
<div class="flex">
<!-- Sidebar Menu -->
<div class="w-1/4 bg-white-300 text-grey-500 p-8">
  <!-- Sidebar Content Goes Here -->
  <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="{{ route('dashboard') }}">
    <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
    </svg>
    <span class="ml-2 text-sm font-medium">Home</span>
  </a>
  <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="{{ route('feed') }}">
    <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
    </svg>
    <span class="ml-2 text-sm font-medium">Explore</span>
  </a>
  <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="{{ route('dashboard') }}">
    <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
    </svg>
    <span class="ml-2 text-sm font-medium">Forums</span>
  </a>
</div>

<!-- Feed -->
<div class="w-1/2 p-4">
  <!-- Feed Content Goes Here -->
  <p></p>
    <!-- Your Feed Content -->
   
	@foreach ($posts as $post)
				<div class="flex w-full p-8 border-b border-gray-300">
					<img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-400" src="profile/rabin.jpg" alt="Image Description">
					<div class="flex flex-col flex-grow ml-4">
						<div class="flex">
							<span class="font-semibold">Rabin grg</span>
							<span class="ml-1">{{ $post->user_id }}</span> 
							<span class="ml-auto text-sm">{{ $post->created_at->diffForHumans()}}</span>
						</div>
						<p class="mt-1">{{ $post->content }}<a class="underline" href="#"></a></p>
						<div class="flex mt-2">
							<love-button></
								<button class="flex items-center ml-2 px-2 py-1 text-xs rounded-full hover:bg-gray-200">
									<svg class="w-[22px] h-[22px] text-gray-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="none" viewBox="0 0 20 16">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1" d="M12.5 4.046H9V2.119c0-.921-.9-1.446-1.524-.894l-5.108 4.49a1.2 1.2 0 0 0 0 1.739l5.108 4.49C8.1 12.5 9 11.971 9 11.051V9.123h2a3.023 3.023 0 0 1 3 3.046V15a5.593 5.593 0 0 0-1.5-10.954Z"/>
									  </svg>
									  <span class="text-sm ml-1 text-black leading-none"></span> Help
									</button>
									<button class="flex items-center ml-2 px-2 py-1 text-xs rounded-full hover:bg-gray-200">
										<svg class="w-[22px] h-[22px] text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 15">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1" d="m13.717 1 5.518 4.95a1.05 1.05 0 0 1 0 1.549l-5.612 5.088m-5.73-3.214v1.615a.95.95 0 0 0 1.525.845l5.108-4.251a1.1 1.1 0 0 0 0-1.646L9.418 1.685a.95.95 0 0 0-1.525.846v1.7c-3.312 0-6 2.979-6 6.654v1.329a.7.7 0 0 0 1.344.353 5.174 5.174 0 0 1 4.652-3.191l.004-.003Z"/>
										  </svg>
										  <span class="text-sm ml-1 text-black leading-none"></span> Share
										</button>
						</div>
					</div>
				</div>
				@endforeach



</div>


<!-- Chat -->
<div class="w-1/4 p-4 ">
  <!-- Chat Content Goes Here -->
  <p></p>


<div class="border border-gray-300 p-4 rounded-lg shadow">
    <p class="text-lg font-semibold mb-2">How are you feeling today?</p>
    <div class="flex space-x-4">
        <button class="mood-button" data-mood="happy">😄</button>
        <button class="mood-button" data-mood="neutral">😐</button>
        <button class="mood-button" data-mood="sad">😢</button>
        <button class="mood-button" data-mood="angry">😡</button>
    </div>
</div>

<input class="flex items-center h-8 px-2 border border-gray-500 rounded-sm" type="search" Placeholder="Search…">
			<div>
				<h3 class="mt-6 font-semibold">Suggestion for you</h3>
				<div class="flex w-full py-4 border-b border-gray-300">
					<span class="flex-shrink-0 w-10 h-10 bg-gray-400 rounded-full"></span>
					<div class="flex flex-col flex-grow ml-2">
						<div class="flex text-sm">
							<span class="font-semibold">Rabin </span>
							<span class="ml-1">@rabing</span>
						</div>
						<p class="mt-1 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, et dolore magna aliqua. <a class="underline" href="#">#hashtag</a></p>
					</div>
				</div>
				<div class="flex w-full py-4 border-b border-gray-300">
					<span class="flex-shrink-0 w-10 h-10 bg-gray-400 rounded-full"></span>
					<div class="flex flex-col flex-grow ml-2">
						<div class="flex text-sm">
							<span class="font-semibold">Username</span>
							<span class="ml-1">@username</span>
						</div>
						<p class="mt-1 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, et dolore magna aliqua. <a class="underline" href="#">#hashtag</a></p>
					</div>
				</div>
				<div class="flex w-full py-4 border-b border-gray-300">
					<span class="flex-shrink-0 w-10 h-10 bg-gray-400 rounded-full"></span>
					<div class="flex flex-col flex-grow ml-2">
						<div class="flex text-sm">
							<span class="font-semibold">Username</span>
							<span class="ml-1">@username</span>
						</div>
						<p class="mt-1 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, et dolore magna aliqua. <a class="underline" href="#">#hashtag</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<!-- Card Section -->
<div class="max-w-5xl px-4 py-50 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
    <!-- Card -->
    <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-500
     dark:border-gray-800" href="#">
      <div class="p-4 md:p-5">
        <div class="flex">
          <svg class="mt-1 shrink-0 w-5 h-5 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
          </svg>

          <div class="grow ml-5">
            <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
              Ask our community
            </h3>
            <p class="text-sm text-gray-200">
              Get help from 40k+ Preline users
            </p>
          </div>
        </div>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group flex flex-col dark:bg-slate-500 border shadow-sm rounded-xl hover:shadow-md transition dark:bg-grey-500 dark:border-gray-500" href="#">
      <div class="p-4 md:p-5">
        <div class="flex">
          <svg class="mt-1 shrink-0 w-5 h-5 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
            <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          </svg>

          <div class="grow ml-5">
            <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
              Get help in the app
            </h3>
            <p class="text-sm text-gray-200">
              Just head to «Help» in the app
            </p>
          </div>
        </div>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group flex flex-col dark:bg-slate-500 border shadow-sm rounded-xl hover:shadow-md transition dark:bg-grey-500 dark:border-gray-500" href="#">
      <div class="p-4 md:p-5">
        <div class="flex">
          <svg class="mt-1 shrink-0 w-5 h-5 text-gray-800 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z"/>
          </svg>

          <div class="grow ml-5">
            <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
              Email us
            </h3>
            <p class="text-sm text-gray-200">
              Reach us at <span class="text-blue-600 font-medium dark:text-blue-500">info@site.com</span>
            </p>
          </div>
        </div>
      </div>
    </a>
    <!-- End Card -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Section -->


</x-app-layout>
