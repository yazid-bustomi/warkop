<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mendefinikan user
        $userId = Auth::user()->id;

        // mencari data dari relasi OrderDetail di dalam model order dan relasi product pada model OrderDetail dan yang sesuai id nya
        $orders = Order::with(['OrderDetail', 'OrderDetail.Product'])->where('user_id', $userId)->get();
        // return $orders;

        return view('order.index', compact('orders'));
        

        // foreach($orders as $order){
            // $data = $order->OrderDetail;
        // };
        // return $data->nama;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user()->id;

        // buat menampilkan data sesuai toko id nya
        $tokoId = Auth::user()->toko_id;
        $dataToko = Product::where('toko_id', $tokoId)->get();

        return view('order.create', compact('user', 'dataToko'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
