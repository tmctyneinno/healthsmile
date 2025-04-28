<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact; 

class ContactController extends Controller
{
    public function index(){ 
        $data['data'] = Contact::latest()->get();
        return view('admin.contact.index', $data);
    }

    public function show($id){
        $transaction = Transaction::where('id', decrypt($id))->first();

        return view('admin.contact.show', compact('transaction'));
    }

    
    
}
