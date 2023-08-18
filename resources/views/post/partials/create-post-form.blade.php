<section>
	@if(auth()->check())
			<div class="flex w-full g-white mt-5 shadow rounded-lg  p-8 border-b-4 border-gray-300">
			  <img class="inline-block h-12 w-12 mt-5 rounded-full ring-2 ring-white dark:ring-gray-400" src="{{ asset('storage/images/'.Auth::user()->avatar) }}" alt="Image Description">
			  <form action="post/create" method="post" enctype="multipart/form-data" class="flex flex-col flex-grow ml-4">
				  @csrf
				<textarea class="p-3 resize-none bg-transparent border border-gray-500 rounded-full bg-white h-50 px-5 pr-10  text-sm focus:outline-none" name="content"  rows="3" placeholder="What's happening? {{ Auth::user()->name }}"></textarea>
				<div class="flex justify-between mt-2">
					<div class="flex items-center h-8 px-3 text-xs rounded-full bg-grey-500 hover:bg-gray-200">
						<label for="file">
							<div>
								<svg class="w-[23px] h-[23px] text-gray-600 dark:text-grey" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
									<path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.8" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.8" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
								  </svg>						</div>
						</label>
						<span class="text-sm ml-1 leading-none">Image</span>
							<input id="file"
								   class="absolute w-full h-full"
								   name="image"
								   type="file"
								   accept="image/*" style="visibility: hidden;"/>
						</div>
				  
				  <button type="submit" class="flex items-center h-8 px-3 text-xs rounded-full bg-blue-500 hover:bg-gray-400">
					
					<svg class="w-[23px] h-[23px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 20">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.8" d="m8.806 5.614-4.251.362-2.244 2.243a1.058 1.058 0 0 0 .6 1.8l3.036.356m9.439 1.819-.362 4.25-2.243 2.245a1.059 1.059 0 0 1-1.795-.6l-.449-2.983m9.187-12.57a1.536 1.536 0 0 0-1.26-1.26c-1.818-.313-5.52-.7-7.179.96-1.88 1.88-5.863 9.016-7.1 11.275a1.05 1.05 0 0 0 .183 1.25l.932.939.937.936a1.049 1.049 0 0 0 1.25.183c2.259-1.24 9.394-5.222 11.275-7.1 1.66-1.663 1.275-5.365.962-7.183Zm-3.332 4.187a2.115 2.115 0 1 1-4.23 0 2.115 2.115 0 0 1 4.23 0Z"/>
					  </svg>					
					    <span class="text-sm ml-1 text-white leading-none">Post</span>
				  
				  </button>
				</div>
			  </form>
			</div>
			@else
			<span class="text-sm ml-1 text-black leading-none">Please login to create post</span>
			@endif
</section>

