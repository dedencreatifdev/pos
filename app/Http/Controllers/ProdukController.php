<?php

namespace App\Http\Controllers;

use App\DataTables\ProdukDataTable;
use App\DataTables\UsersDataTable;
use App\Models\Produk;
use App\Models\Satuan;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Produk::query()
                ->with('getSatuan')
                ->with('getKategori')
                ->with('getMerk');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (Produk $row) {
                    return view('pages.produk.btn-produk', compact('row'));
                })
                ->addColumn('satuan', function (Produk $produk): string {
                    return $produk->getSatuan['name'] ?? '';
                })
                ->addColumn('kategori', function (Produk $produk): string {
                    return $produk->getKategori['name'] ?? '';
                })
                ->addColumn('merk', function (Produk $produk): string {
                    return $produk->getMerk['name'] ?? '';
                })
                ->rawColumns(['action'])
                ->make(true)
            ;
        }
        return view('pages.produk.produk-index')->with('title', 'Produk List');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.produk.tambah-produk')->with('title', 'Tambah Produk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produk::create([
            'code' => '123456798',
            'name' => '123456798',
            'price' => '123456798',
            'category_id' => '6',
            'barcode_symbology' => 'code128',
            'type' => 'standard',
        ]);
        return redirect()->route('produklist.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produklist.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}