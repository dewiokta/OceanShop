<?php

namespace App\Http\Controllers;

use App\Models\Ongkir;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order($id){
        $product=Product::where('id',$id)->first();

        return view('detail',compact('product'));
    }

    public function buy(Request $request, $id){
        $product=Product::where('id',$id)->first();
        $tanggal= Carbon::now();

        //simpan data ke db orders
        $ongkir = new Ongkir();
        $order=new Order();
        $order->id_user = Auth::user()->id;
        $order->id_ongkir = 1;
        $order->tanggal_beli = $tanggal;
        $order->subtotal = $product->harga*$request->jml_pesan;
        $order->save();

        //simpan data ke db orders_detailed
        $order_baru = Order::where('id_user',Auth::user()->id)->first();
        
        $orders_detailed= new Order_detail();
        $orders_detailed->id_orders = $order_baru->id;
        $orders_detailed->id_produk = $product->id;
        $orders_detailed->jml_produk = $request->jml_pesan;
        $orders_detailed->total_harga= ($product->harga*$request->jml_pesan)+$ongkir->ongkir;
        $orders_detailed->save();

        return redirect('checkout');

    }

    public function checkout(){
        return view('checkout');
    }
}
