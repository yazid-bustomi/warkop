<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\Inventaris;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreInventarisRequest;
use App\Http\Requests\UpdateInventarisRequest;
use App\Models\Inventory_history;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // untuk insialisasi user id nya berapa
        $user = Auth::user()->id;

        // untuk inisialisai user memiliki toko id nya berapa untuk mencari query relasi
        $tokoid = Auth::user()->toko_id;

        // mencari data dari model inventaris yang public functionnya InventoryHistory yang sesuai tokoid nya 
        $inventaris = Inventaris::with('InventoryHistory')->where('toko_id', $tokoid)->get();


        // return $inventaris;
        return view('admin.inventaris.index', compact('inventaris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tokoid = Auth::user()->toko_id;
        return view('admin.inventaris.create', compact('tokoid'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventarisRequest $request)
    {
        $validate = $request->validate([
            'name' => 'min:2',
            'status' => 'min:2',
        ]);

        $inventaris = Inventaris::all();

        $inventaris = new Inventaris();
        $inventaris->name = $request->name;
        $inventaris->qty = $request->qty;
        $inventaris->toko_id = $request->tokoid;
        $inventaris->save();

        // mengambil inventaris id terbaru yang baru di save
        $inventarisId = $inventaris->id;

        $inventarisHistory = Inventory_history::all();

        $inventarisHistory = new Inventory_history();
        $inventarisHistory->inv_id = $inventarisId;
        $inventarisHistory->status = $request->status;
        $inventarisHistory->keterangan = $request->keterangan;
        $inventarisHistory->save();

        return redirect(route('admin.inv.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventaris $inventaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventaris $inventaris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventarisRequest $request, Inventaris $inventaris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventaris $inventaris)
    {
        //
    }
}
