<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except('index');
    }

    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function destroy(Request $request)
    {
//        dd($request->id);
        $products= Product::query()->find($request->id);
        $products->delete();
        Alert::success('Delete', 'Your Product is deleted');
        return back();
    }
}
