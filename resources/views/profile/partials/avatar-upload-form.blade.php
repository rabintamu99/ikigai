<section>
    <div class="my-4">
        <h2 class="text-lg font-medium text-gray-900">
            Upload Profile Image
        </h2>
    <form id="send-verification" method="post" action="{{ route('profile.upload') }}" enctype="multipart/form-data">
        @csrf
    </form>

    <div class="flex justify-center items-center">
        <div class="flex items-center m-4">
       <div class="shrink-0 mr-3 ">
         <img class="h-16 w-16 object-cover rounded-full" src="{{ asset('storage/images/'.Auth::user()->avatar) }}" alt="avatar" />
       </div>
       <form action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
       <label class="block">
         <span class="sr-only">Choose profile photo</span>
         <input type="file" name="avatar" class="block w-full text-sm text-slate-500
           file:mr-4 file:py-2 file:px-4
           file:rounded-full file:border-0
           file:text-sm file:font-semibold
           file:bg-violet-50 file:text-blue-700
           hover:file:bg-violet-100
         "/>
       
       </label>
     </div>
     <button  type="submit" class="bg-white-300 hover:bg-gray-100 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
      <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
      <span>Upload</span>
    </button>
    </div>
</section>
