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

use App\Models\Booking;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Contact;
use App\Models\Gallery;
 
class AdminController extends Controller
{
    use AdminTrait; 
    public function __construct()
    {
        $this->middleware('auth.admin');
    }
 
    public function index()
    {  
        $totalBookings = Booking::count();
        $totalBlogs = Blog::count();
        $totalServices = Service::count();
        $totalTransactions = Transaction::count();
        $totalContacts = Contact::count();
        $totalGalleryItems = Gallery::count();

        // Pass the counts to the view
        return view('admin.dashboard', compact(
            'totalBookings',
            'totalBlogs',
            'totalServices',
            'totalTransactions',
            'totalContacts',
            'totalGalleryItems'
        ));
        return view('admin.dashboard');
    }

    public function transaction(){
        $data['data'] = Transaction::latest()->get();
        return view('admin.transaction.index', $data);
    }

}
