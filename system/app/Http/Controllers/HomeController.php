<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        $data['list_produk'] = Produk::orderBY('id','DESC')->take(4)->get();
        $data['pembeli'] = auth()->guard('pembeli')->user();
        return view('ecommerce.admin.index', $data);
    }
    
    public function produk()
    { 
        $data['list_produk'] = Produk::all();
        $data['pembeli'] = auth()->guard('pembeli')->user();
        return view('ecommerce.admin.produk',$data);
    }

}