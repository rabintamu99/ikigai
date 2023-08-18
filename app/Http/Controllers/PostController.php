<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    
    // public function createPost(Request $request){
    //      $incomingFields = $request->validate([
    //         'content' => 'required'
    //         'image' => 'nullable',
             
        
    //      ]);

    // $incomingFields['content'] = strip_tags($incomingFields['content']);
    // $incomingFields['user_id'] = auth()->id();


    //  Post::create($incomingFields);
    
    // return redirect()->back()->with('success', 'Post created successfully!');

        
    // }

  

    public function store(Request $request)
{
    // $incomingFields = $request->validate([
    //     'content' => 'required',
    //     'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation rules
    // ]);

    // $incomingFields['content'] = strip_tags($incomingFields['content']);
    // $incomingFields['user_id'] = auth()->id();

    // if ($request->hasFile('image')) {
    //     $file = $request->file('image');
    //     $filename = $file->getClientOriginalName();
    //     $file->storeAs('public/posts', $filename); // Store the image in storage/app/public/posts
    //     $incomingFields['image'] = $filename; // Save the filename to the 'image' field in the database
    // }

    // Post::create($incomingFields);

    // return redirect()->back()->with('success', 'Post created successfully!');
    $request->validate([
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation rules
        ]);

        $newImageName = null;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $newImageName = uniqid() . '_' . $request->title . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('storage/posts'), $newImageName);
        }
        $postData = [
            'content' => $request->input('content'),
            'user_id' => auth()->user()->id
        ];
        
        if ($newImageName !== null) {
            $postData['image'] = $newImageName;
        }
        
        Post::create($postData);
        return redirect()->back()->with('message','Post Like undo successfully!');

    
}

       public function create()
         {


         }



    public function index()
    {
        // $posts = Post::orderBy('created_at','desc')->get();
        // return view('post.feed')->with('posts', $posts);
        // // $posts = Post::orderBy('created_at', 'desc')->get();// Retrieve all blog posts from the database
        // // return view('post.feed'); // Pass the $posts variable to the view

        $users = User::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
    
        $data = [
            'users' => $users,
            'posts' => $posts,
        ];
    
        return view('post.feed', $data);
        
    }
    

    public function likePost($id)
    {
        $post = Post::find($id);
        $post->like();
        $post->save();

        return redirect()->back()->with('message','Post Like successfully!');
    }

    public function unlikePost($id)
    {
        $post = Post::find($id);
        $post->unlike();
        $post->save();
        
        return redirect()->back()->with('message','Post Like undo successfully!');
    }

    public function destroy($id)
{
    $post = Post::findOrFail($id);

    // Check if the authenticated user is the owner of the post
    if ($post->user_id !== auth()->user()->id) {
        return redirect()->route('posts.index')->with('error', 'You are not authorized to delete this post');
    }
    $post->delete();
  
    return redirect()->back()->with('success', 'Post deleted successfully');
}

public function show($id)
{
    $post = Post::with('comments.user')->findOrFail($id);

    return view('post.show', compact('post'));
}



}
