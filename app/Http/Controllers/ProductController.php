<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Toko;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Inisialisasi user dari id nya yang login
        $userID = Auth::user()->id;

        // memfilter data dari user id yang login dan mengambil data yang pertama ketemu
        $toko = Toko::whereHas('user', function ($query) use ($userID) {
            $query->where('id', $userID);
        })->with(['User', 'Product', 'Inventaris'])->first();

        // return $toko->id;
        return view('admin.product.index', compact('toko'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Inisialisasi user dari id nya yang login
        $userID = Auth::user()->id;

        // memfilter data dari user id yang login dan mengambil data yang pertama ketemu
        $toko = Toko::whereHas('user', function ($query) use ($userID) {
            $query->where('id', $userID);
        })->with(['User', 'Product', 'Inventaris'])->first();

        // mengirimkan data user dan data toko untuk di eksekusi ke store
        return view('admin.product.create', compact('toko'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validate = $request->validate([
            'name' => 'min:1',
            'price' => 'min:4'
        ]);

        $product = Product::all();

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->toko_id = $request->toko_id;
        $product->save();

        return redirect(route('admin.product.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
