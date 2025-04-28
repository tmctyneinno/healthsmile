<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sociallink;
use Illuminate\Http\Request;

class SociallinkController extends Controller
{ 
    public function index(Request $request){
        return view('admin.settings.socialLink.index');
    }
 
    public function storeSocialLinks(Request $request){ 
        $data = $request->validate([
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'whatsapp' => 'nullable',
            'instagram' => 'required',
            'linkedin' => 'required',
            'youtube' => 'nullable',
        ]);

        Sociallink::create($data);
        return redirect()->back()->with('success', 'Social Link created successfully.');
    }

    public function updateSocialLinks(Request $request, $id)
    {
        $data = $request->validate([
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'whatsapp' => 'nullable',
            'instagram' => 'required',
            'linkedin' => 'required',
            'youtube' => 'nullable',
        ]);
        $socialLink = Sociallink::findOrFail($id);
        $socialLink->update($data);

        return redirect()->back()->with('success', 'Social Link updated successfully.');
    }
}
