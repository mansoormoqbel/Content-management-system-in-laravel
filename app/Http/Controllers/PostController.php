<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
       
       
        $posts= Post::get();
        return view('post.index', compact('posts'));

        /* return view('post.index'); */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { $tags = Tag::all();
        $categories = Category::all();
        return view('post.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_title' => 'required|string',
            'meta_description' => 'required|string',
            'is_draft' => 'nullable|boolean',
            'published_at' => 'nullable|date',
        ]);
        if(!$validatedData == Null ){
                $post = new Post();
            $post->title = $validatedData['title'];
            $post->content = $validatedData['content'];
            $post->meta_title = $validatedData['meta_title'];
            $post->meta_description = $validatedData['meta_description'];
            $post->is_draft = $request->has('is_draft');
            $post->published_at = $validatedData['published_at'];
            $post->save();
            if ($request->categories) {
                $post->categories()->attach($request->categories);
            }
        
            // Attach tags to the post
            if ($request->tags) {
                $post->tags()->attach($request->tags);
            }
        
            return redirect()->route('post.index');
        }else{
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        /* $post = Post::findOrFail($id); */
        // Debugging: Check if post and categories are retrieved correctly
        //dd($post->categories); // or var_dump($post->categories);
      
       return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    { 
        $tags = Tag::all();
        $categories = Category::all();
        
        $post = Post::find($id);
        return  view('post.edit', compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_title' => 'required|string',
            'meta_description' => 'required|string',
            'is_draft' => 'nullable|boolean',
            'published_at' => 'nullable|date',
        ]);
        if (!$validatedData == NULL ) {
           
            $post = Post::find($id);
            
            $post->title = $validatedData['title'];
            $post->content = $validatedData['content'];
            $post->meta_title = $validatedData['meta_title'];
            $post->meta_description = $validatedData['meta_description'];
            $post->is_draft = $request->has('is_draft');
            $post->published_at = $validatedData['published_at'];
            $post->save();
            // Sync categories with the post
            if ($request->categories) {
                $post->categories()->sync($request->categories);
            } else {
                $post->categories()->detach(); // Remove all categories if none selected
            }

            // Sync tags with the post
            if ($request->tags) {
                $post->tags()->sync($request->tags);
            } else {
                $post->tags()->detach(); // Remove all tags if none selected
            }
        
            return redirect()->route('post.index');
        } else {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post= Post::find($id);
            $post->delete();

            return redirect()->route('post.index');
    }
}
