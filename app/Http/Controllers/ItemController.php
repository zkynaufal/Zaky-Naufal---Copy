<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\Satuan;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Item';
        $items = Item::with('satuan')->get();
        // ELOQUENT
        $items = Item::all();


        return view('item.index', [
            'pageTitle' => $pageTitle,
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Tambah Item';
        // // ELOQUENT
        $satuan = Satuan::all();

        return view('item.create', compact('pageTitle', 'satuan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Semua field harus diisi.',
            'unique' => 'Kode item harus unik.',
            'numeric' => 'Harga item hanya boleh berupa angka.'
        ];

        $validator = Validator::make($request->all(), [
            'kodeBarang' => 'required|unique:items,kode_item',
            'namaBarang' => 'required',
            'hargaBarang' => 'required|numeric',
            'deskripsiBarang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        // ELOQUENT
        $item = new Item;
        $item->kodeBarang = $request->kodeBarang;
        $item->namaBarang = $request->namaBarang;
        $item->hargaBarang = $request->hargaBarang;
        $item->deskripsiBarang = $request->deskripsiBarang;
        $item->satuan_id = $request->satuan;
        $item->save();

        return redirect()->route('lists.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Item';
        // // ELOQUENT
        $satuan = Satuan::all();
        $item = Item::find($id);
        return view('list.edit', compact('pageTitle', 'satuan', 'item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Semua field harus diisi.',
            'unique' => 'Kode item harus unik.',
            'numeric' => 'Harga item hanya boleh berupa angka.'
        ];

        $validator = Validator::make($request->all(), [
            'kodeBarang' => 'required|unique:items,kode_item,' . $id,
            'namaBarang' => 'required',
            'hargaBarang' => 'required|numeric',
            'deskripsiBarang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $item = Item::find($id);
        $item->kodeBarang = $request->kodeBarang;
        $item->namaBarang = $request->namaBarang;
        $item->hargaBarang = $request->hargaBarang;
        $item->deskripsiBarang = $request->deskripsiBarang;
        $item->satuan_id = $request->satuan;
        $item->save();


        return redirect()->route('lists.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // QUERY BUILDER
        DB::table('items')
            ->where('id', $id)
            ->delete();

        return redirect()->route('lists.index');
    }
}
