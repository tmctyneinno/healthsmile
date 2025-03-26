<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction; 

class TransactionController extends Controller
{
    public function index(){ 
        $data['data'] = Transaction::latest()->get();
        return view('admin.transaction.index', $data);
    }

    public function show($id){
        $transaction = Transaction::where('id', decrypt($id))->first();

        return view('admin.transaction.show', compact('transaction'));
    }

    
    
}
