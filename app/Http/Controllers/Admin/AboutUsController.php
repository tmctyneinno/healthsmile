<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\GovernanceBoard;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    public function index(){
        return view('admin.aboutUs.index');
    }

    public function governanceBoard(){
        return view('admin.aboutUs.governanceBoard.index');
    }

    public function governanceBoardStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/governanceBoard/'), $imageName);
        }
        
        GovernanceBoard::create(array_merge($validated, ['image' => 'assets/images/governanceBoard/'.$imageName]));
    
        return redirect()->back()->with('success', 'GovernanceBoard created successfully.');
    }

    public function governanceBoardUpdate(Request $request, $id)
    { 
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required', 
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:32768', 
        ]);
    
        $blog = GovernanceBoard::findOrFail($id);   
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/governanceBoard/'), $imageName);
            
            $blog->update(['image' =>  'assets/images/governanceBoard/' . $imageName]);
        } 
       
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    
        return redirect()->route('admin.governanceBoard')->with('success', 'Governance Board successfully.');
    }

}
