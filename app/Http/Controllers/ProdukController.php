<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $produks = produk::all();
        $produks = DB::table('produks')->paginate(5);
        return view('cms.cms-produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all('id', 'nama_kategori');
        return view('cms.cms-produk.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdukRequest $request)
    {

        $ValidatedData = $request->validate([
            'nama_produk' => 'required|regex:/^[a-zA-Z ]+$/',
            'id_kategori' => 'required',
            'dekripsi_produk' => 'required',
            'foto' => 'image|file|max:2048',
        ]);

        if ($request->file('foto')) {
            $ValidatedData['foto'] = $request->file('foto')->store('/foto-produk');
        }

        Produk::create($ValidatedData);

        return redirect('/produk')->with('tambah', ' Data sudah ditambahkan');
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Produk $produk)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($produk_id)
    {
        $produks = produk::find($produk_id);
        $kategoris = Kategori::all('id', 'nama_kategori');
        return view('cms.cms-produk.update', compact('produks', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdukRequest $request,  $id)
    {

        $ValidatedData = $request->validate([
            'nama_produk' => 'required|regex:/^[a-zA-Z ]+$/',
            'id_kategori' => 'required',
            'dekripsi_produk' => 'required',
            'foto' => 'image|file|max:2048',
        ]);
        if ($request->file('foto')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $ValidatedData['foto'] = $request->file('foto')->store('/foto-produk');
        }

        Produk::where('id', $id)->update($ValidatedData);

        return redirect('/produk')->with('update', 'Data berhasil diUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $test = DB::table('produks')->select('foto')
            ->where('id', $id)
            ->get();
        if ($test[0]->foto) {
            Storage::delete($test[0]->foto);
        }
        produk::destroy($id);
        return redirect('/produk')->with('delete', 'Data berhasil dihapus');
    }
}
