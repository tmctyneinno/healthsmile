<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
       
        return view('admin.service.index');
    } 

    public function create(){
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/services/'), $imageName);
        }
        
        Service::create(array_merge($validated, ['image' => 'assets/images/services/'.$imageName]));
    
        return redirect()->route('admin.service.create')->with('success', 'service created successfully.');
    }

    public function edit($id)
    {
        $service = Service::findOrFail(decrypt($id));
        return view('admin.service.edit', compact('service'));
    } 

    public function update(Request $request, $id)
    { 
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required', 
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:32768', 
        ]);
    
        $service = Service::findOrFail($id);   
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/service/'), $imageName);
             
            $service->update(['image' =>  'assets/images/services/' . $imageName]);
        } 
       
        $service->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    
        return redirect()->route('admin.service.index')->with('success', 'service updated successfully.');
    }
    

    public function destroy($id)
    {
        $service= Service::findOrFail(decrypt($id));
        $service->delete();
        return redirect()->route('admin.service.index')->with('success', 'service deleted successfully.');
    }

    public function show($slug)
    {
        $serviceItem = Service::where('slug', $slug)->first();

        if (!$serviceItem) {
            return view('home.errors.404'); 
        } 

        $relatedservice = service::where('id', '!=', $serviceItem->id)
                                     ->inRandomOrder()
                                     ->take(6) 
                                     ->get();

        return view('home.pages.service.service-details', compact('serviceItem', 'relatedservice'));
    }

    public function details($slug){
        $serviceItem = Service::where('slug', $slug)->first();
    
        if (!$serviceItem) {
            return view('home.errors.404'); 
        }

        $relatedservice = Service::where('slug', '!=', $slug)
                                ->latest()
                                ->get();
    
        return view('home.pages.service.service-details', compact('serviceItem', 'relatedservice'));
    }
}
 