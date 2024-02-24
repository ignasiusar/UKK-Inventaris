<?php
  
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\Pinjam;
use Illuminate\Http\Request;
  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth.login');
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('layouts.dashboard');
        return view('inventaris.index',compact('products'));
    }

    public function adminInvent()
    {
        $suppliers = Supplier::All();
        $products = Product::latest()->paginate(5);

        return view('inventaris.index',compact('products','suppliers'))->with('i',(request()->input('page',1) - 1) * 5);
    }

    public function adminSup()
    {

        return view('suppliers.index', compact('supplier'));
    }

    public function adminPinj()
    {
        $pinjams = Pinjam::All();
        return view('pinjams.index', compact('pinjams'));
    }

    public function userInd()
    {

        return view('user');
    }
   
}