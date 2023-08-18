<x-app-layout>
	<!-- Component Start -->
   <div class="flex justify-center w-screen h-screen px-4 text-gray-700">
	 <div class="flex w-full max-w-screen-lg">
	   <div class="flex flex-col w-64 py-4 pr-3">
		 <a class="px-3 py-2 mt-2 text-lg font-medium rounded-sm hover:bg-gray-300" href="{{ 'dashboard'}}">Home</a>
		 <a class="px-3 py-2 mt-2 text-lg font-medium rounded-sm hover:bg-gray-300" href="{{'feed'}}">Discover</a>
		 <a class="px-3 py-2 mt-2 text-lg font-medium rounded-sm hover:bg-gray-300" href="#">Notifications</a>
		 <a class="px-3 py-2 mt-2 text-lg font-medium rounded-sm hover:bg-gray-300" href="#">Inbox</a>
		 <a class="px-3 py-2 mt-2 text-lg font-medium rounded-sm hover:bg-gray-300" href="#">Saved Posts</a>
		 <a class="px-3 py-2 mt-2 text-lg font-medium rounded-sm hover:bg-gray-300" href="#">Circle</a>
		 <a class="px-3 py-2 mt-2 text-lg font-medium rounded-sm hover:bg-gray-300" href="{{'profile'}}">Profile</a>
		 <a class="flex px-3 py-2 mt-2 mt-auto text-lg rounded-sm font-medium hover:bg-gray-200" href="#">
		   <span class="flex-shrink-0 w-10 h-10 bg-gray-400 rounded-full"></span>
		   <div class="flex flex-col ml-2">
			 <span class="mt-1 text-sm font-semibold leading-none">Rabin</span>
			 <span class="mt-1 text-xs leading-none">@rabin</span>
		   </div>
		 </a>
	   </div>
	   
	   
	  <div class="text-5xl font-extrabold ...">
				<span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
				  Latest Feed
				</span>
			  </div>
   
		 
		 <div class="flex-grow h-0 overflow-auto">
		   <div class="flex w-full p-8 border-b-4 border-gray-300">
			 <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-400" src="profile/rabin.jpg" alt="Image Description">
			 <form action="/create-post" method="post" class="flex flex-col flex-grow ml-4">
				 @csrf
			   <textarea class="p-3 bg-transparent border border-gray-500 rounded-sm" name="content" id="content"  rows="3" placeholder="What's happening?"></textarea>
			   <div class="flex justify-between mt-2">
   
				 <button class="flex items-center  h-8 px-3 text-xs rounded-full bg-green-500 hover:bg-gray-200">
				   {{-- <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
					 <path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
					 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
					 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
					 </svg> --}}
					 <input type='file' class="hidden" name="image" />
					 <span class="text-sm ml-1 text-white leading-none"></span>
					 
				   </button>
				 
				 <button type="submit" class="flex items-center h-8 px-3 text-xs rounded-full bg-blue-500 hover:bg-gray-400">
				   
					 <svg class="w-4 h-4 fill-current text-white" viewBox="0 0 24 24" class="r-jwli3a r-4qtqp9 r-yyyyoo r-16y2uox r-1q142lx r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1srniue"><g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g></svg>
					 <span class="text-sm ml-1 text-white leading-none">Post</span>
				 
				 </button>
			   </div>
			 </form>
		   </div>
   
		   <!-- Display existing posts in the home feed -->
	   @foreach ($posts as $post)
		   <div class="flex w-full p-8 border-b border-gray-300">
			 <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white dark:ring-gray-400" src="profile/rabin.jpg" alt="Image Description">
			 <div class="flex flex-col flex-grow ml-4">
			   <div class="flex">
				 <a class="font-semibold" href="{{ 'profile' }}">{{ $post->user->name }}</a>
				 {{-- <span class="ml-1">{{ $post->user_id }}</span> --}}
				 <span class="ml-auto text-sm">{{ $post->created_at->diffForHumans()}}</span>
			   </div>
			   <p class="mt-1">{{ $post->content }}<a class="underline" href="#"></a></p>
			   <div class="flex mt-2">
				<form action="{{ $post->liked() ? route('unlike.post', $post->id) : route('like.post', $post->id) }}" method="post">
					@csrf
					 @if($post->liked())
					 <button class="flex items-center px-2 py-1 text-xs rounded-full hover:bg-gray-200">
						<svg class="w-[22px] h-[22px] dark:text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
							<path d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z"/>
						  </svg>
						  <span class="text-sm ml-1 text-black leading-none"></span> {{ $post->likeCount }}
						</button>
				 @else
				 <button class="flex items-center px-2 py-1 text-xs rounded-full hover:bg-gray-200">
					<svg class="w-[22px] h-[22px] text-gray-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
					  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1" d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z"/>
					  </svg>
					  <span class="text-sm ml-1 text-black leading-none"></span> {{ $post->likeCount }}
					</button>
				 @endif
					
				</form>
				   <button class="flex items-center ml-2 px-2 py-1 text-xs rounded-full hover:bg-gray-200 ">
					 <svg class="w-[22px] h-[22px] text-gray-600 "  infinite;aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="none" viewBox="0 0 20 16">
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
	   </div>
	   <div class="flex flex-col flex-shrink-0 w-1/4 py-4 pl-4">
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
   <!-- Component End  -->
   
   </x-app-layout>
   