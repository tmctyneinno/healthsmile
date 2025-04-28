<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Blog;

use Illuminate\Http\Request; 

class BlogController extends Controller
{
    public function index(){
       
        return view('admin.blog.index');
    }

    public function create(){
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            // 'icon_class' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/blog/'), $imageName);
        }
        
        Blog::create(array_merge($validated, ['image' => 'assets/images/blog/'.$imageName]));
     
        return redirect()->route('admin.blog.create')->with('success', 'Blog created successfully.');
    }

    public function edit($id)
    {
        $post = Blog::findOrFail(decrypt($id));
        return view('admin.blog.edit', compact('post'));
    } 

    public function update(Request $request, $id)
    { 
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required', 
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:32768', 
        ]);
    
        $blog = Blog::findOrFail($id);   
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/blog/'), $imageName);
            
            $blog->update(['image' =>  'assets/images/blog/' . $imageName]);
        } 
       
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    
        return redirect()->route('admin.blog.index')->with('success', 'Blog updated successfully.');
    }
     

    public function destroy($id)
    {
        $blog= Blog::findOrFail(decrypt($id));
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully.');
    }

    public function show($slug)
    {
        $blogItem = Blog::where('slug', $slug)->first();

        if (!$blogItem) {
            return view('home.errors.404'); 
        }

        $relatedBlog = Blog::where('id', '!=', $blogItem->id)
                                     ->inRandomOrder()
                                     ->take(6) 
                                     ->get();

        return view('home.pages.blog.blog-details', compact('blogItem', 'relatedBlog'));
    }

    public function details($slug){
        $postItem = Blog::where('slug', $slug)->first();
    
        if (!$postItem) {
            return view('home.errors.404'); 
        }

        $relatedPost = Blog::where('slug', '!=', $slug)
                                ->latest()
                                ->get();
    
        return view('home.pages.post.post-details', compact('postItem', 'relatedPost'));
    }
}
