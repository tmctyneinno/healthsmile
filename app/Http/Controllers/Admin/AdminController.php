<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MenuItem;
use App\Models\Transaction;
use App\Models\DropdownItem;
use App\Models\User;
use App\Models\Slider;
use App\Http\Traits\AdminTrait;
 
class AdminController extends Controller
{
    use AdminTrait; 
    public function __construct()
    {
        $this->middleware('auth.admin');
    }
 
    public function index()
    { 
        
        return view('admin.dashboard');
    }

    public function transaction(){
        $data['data'] = Transaction::latest()->get();
        return view('admin.transaction.index', $data);
    }

}
