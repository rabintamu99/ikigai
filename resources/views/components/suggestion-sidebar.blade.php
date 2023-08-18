<section>
    <input class="flex items-center h-8 px-2 border border-gray-500 rounded-sm" type="search" Placeholder="Search…">
    <div>
     
      <h3 class="mt-6 font-semibold">Suggestion for you</h3>

      @foreach ($users as $user)
      <div class="flex w-full py-4 border-b border-grey-300">
     <img class="inline-block h-10 w-10 rounded-full ring-2 bg-gradient-to-r from-pink-500 to-violet-500" src="{{ asset('storage/images/'.$user->avatar) }}" alt="Image Description">
     <div class="flex flex-col flex-grow ml-2">
        <div class="flex text-sm">
        <span class="font-semibold">{{$user->name}} </span>
        <span class="ml-1">@rabing</span>
        </div>
        <p class="mt-1 text-sm"><a class="underline" href="#">#hashtag</a></p>
      </div>
     <button>Add</button>
      </div>
      @endforeach

</section>