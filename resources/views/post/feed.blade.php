<x-app-layout>
	<!-- Component Start -->
   <div class="flex justify-center w-screen h-screen px-4 text-gray-700">

	@include('components.sidebar-menu')
	 <div class="flex w-full max-w-screen-lg">
	   
	   <div class="flex  flex-col flex-grow border-l border-r border-gray-300">
		<div class="text-5xl ml-2 font-extrabold ...">
				<span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
				 Profile
				</span>
			  </div>
		 <div class="flex-grow h-0 overflow-auto">
	@include('post.partials.create-post-form')

		   <!-- Display existing posts in the home feed -->
	   @foreach ($posts as $post)
		   <div class="flex w-full g-white  shadow-md rounded-lg p-8 m-1 mb-5 border-b border-gray-300">
			 <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white dark:ring-gray-400" src="{{ asset('storage/images/'.$post->user->avatar) }}" alt="Image Description">
			 <div class="flex flex-col flex-grow ml-4">
			   <div class="flex">
				 <a class="font-semibold" href="{{ 'profile' }}">{{ $post->user->name }}</a>
				 <span class="ml-1">{{ $post->user_id }}</span>
				 <span class="ml-auto text-sm">{{ $post->created_at->diffForHumans()}}</span>
			   </div>
			   <p class="m-2">{{ $post->content }}<a class="underline" href="#"></a></p>
			   <div class="m-2 flex rounded-lg">
				<img src="{{ asset('storage/posts/'.$post->image) }}" alt="No image to show">
			   </div>

			   <div class="flex items-center mt-4">

				<div class=" h-5 w-auto  overflow-x-scroll rounded-lg  lg:overflow-visible">
					<div class="flex items-center -space-x-2">
						<img
							alt="user 1"
							src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
							class="relative inline-block h-8 w-8 rounded-full border-2 border-white object-cover object-center hover:z-10 focus:z-10"
						/>
						<img
							alt="user 2"
							src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1061&amp;q=80"
							class="relative inline-block h-8 w-8  rounded-full border-2 border-white object-cover object-center hover:z-10 focus:z-10"
						/>
						<img
							alt="user 3"
							src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1288&amp;q=80"
							class="relative inline-block h-8 w-8  rounded-full border-2 border-white object-cover object-center hover:z-10 focus:z-10"
						/>
						<img
							alt="user 4"
							src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1287&amp;q=80"
							class="relative inline-block h-8 w-8  rounded-full border-2 border-white object-cover object-center hover:z-10 focus:z-10"
						/>
						<img
							alt="user 5"
							src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1760&amp;q=80"
							class="relative inline-block h-8 w-8  rounded-full border-2 border-white object-cover object-center hover:z-10 focus:z-10"
						/>
					</div>
				</div>
				<div class="flex mt-4">
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
						<form action="{{ route('post.destroy', $post->id) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" class="flex items-center ml-2 px-2 py-1 text-xs rounded-full hover:bg-red-400">
								<svg class="w-[20px] h-[20px] text-gray-800 dark:grey-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
								  </svg>
								  <span class="text-sm ml-1 text-black leading-none"></span> Delete
								</button >
						</form>
						<form action="{{ route('comments.store', ['id' => $post->id]) }}" method="post">
							@csrf
							<textarea name="content" rows="4" cols="50" placeholder="Write a comment"></textarea>
							<button type="submit">Submit Comment</button>
						</form>
						
						
			   </div>
			   </div>
			 </div>
		   </div>
		   @endforeach  
		   
		 </div>
	   </div>
	   
	   <div class="flex flex-col flex-shrink-0 w-1/4 py-4 pl-4">
			@include('components.suggestion-sidebar')
   <!-- Component End  -->
   <div>
   </x-app-layout>
   