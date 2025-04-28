<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MenuItem;
use App\Models\DropdownItem;
use App\Models\Gallery;
use App\Http\Traits\AdminTrait;
use Illuminate\Support\Facades\File;
use Exception;

class GalleryController extends Controller
{
    use AdminTrait;
    public function __construct()
    {
        $this->middleware('auth.admin');
    }


    public function index(){
        $gallery = Gallery::all();
        return view('admin.gallery.index', compact('gallery'));
    }

    public function create(){
        return view('admin.gallery.create');
    }
   
    public function store(Request $request)
    { 
      
        try{
           
            $validated = $request->validate([
                'title' => 'nullable|string|max:255',
                'caption' => 'nullable|string',
            ]);
            $imagePath = $this->uploadImageSlider($request->image);
            
            Gallery::create(array_merge($request->only([
                'title', 'caption', 
            ]), ['image' => $imagePath]));

            return redirect()->route('admin.gallery.index')->with('success', 'Gallery created successfully.');
        } catch (Exception $e) {
            return redirect()->route('admin.gallery.index')->with('error', 'Gallery creation failed. ' . $e->getMessage());
        }
    }
   


    public function edit($id)
    {
        $gallery = Gallery::findOrFail(decrypt($id));
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function updatee(Request $request, $id)
    {
        $this->validateSlider($request, false);
        $slider = Gallery::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $this->uploadImageSlider($request->image);
            $slider->image = $imagePath; 
        }

        $slider->update($request->only(['title', 'caption']));

        if ($request->hasFile('image')) {
            $slider->save();
        }

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery updated successfully.');
    }

    public function update(Request $request, $id)
{
    // Validate the incoming request
    $request->validate([
        'title' => 'nullable|string|max:255',
        'caption' => 'nullable|string|max:1000',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:6048',  // Validate the image (optional)
    ]);

    $slider = Gallery::findOrFail($id);

    $slider->title = $request->input('title');
    $slider->caption = $request->input('caption');

    // Check if a new image was uploaded
    if ($request->hasFile('image')) {
        // Get the uploaded image file
        $image = $request->file('image');

        // Generate a unique file name to avoid overwriting
        $imageName = time() . '-' . $image->getClientOriginalName();

        // Define the path to save the image
        $imagePath = public_path('assets/images/gallery/');

        // Ensure the directory exists
        if (!File::exists($imagePath)) {
            File::makeDirectory($imagePath, 0755, true);
        }

        // Move the uploaded file to the public directory
        $image->move($imagePath, $imageName);

        if ($slider->image && File::exists(public_path($slider->image))) {
            File::delete(public_path($slider->image));
        }

        $slider->image = 'assets/images/gallery/' . $imageName;
    }

    // Save the updated slider
    $slider->save();

    // Redirect to the slider index or wherever you want, with a success message
    return redirect()->route('admin.gallery.index')->with('success', 'Gallery updated successfully');
}




    protected function validateSlider(Request $request, $isCreate)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'caption' => 'nullable|string',
        ];

        if ($isCreate) {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
        }

        $request->validate($rules);
    }
    
 
    
    public function destroy($slider)
    {
        $slider = Gallery::findOrFail(decrypt($slider));
        $slider->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Gallery deleted successfully.');
    }

   
}
