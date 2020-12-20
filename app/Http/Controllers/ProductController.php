<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function product()
    {
         $temp = Product ::all();
        return view('produk',compact('temp'));

    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
		$temp = DB::table('products')
		->where('nama_product','like',"%".$cari."%")
		->paginate();

		return view('cari',['temp' => $temp]);
 
	}
}
