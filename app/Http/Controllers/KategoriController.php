<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = kategori::all();
        return view('cms.cms-kategori.index', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.cms-kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriRequest $request)
    {

        $ValidatedData = $request->validate([

            'nama_kategori' => 'required|regex:/^[a-zA-Z ]+$/',
            'dekripsi_kategori' => 'required',
            'foto' => 'image|file|max:2048',
        ]);

        if ($request->file('foto')) {
            $ValidatedData['foto'] = $request->file('foto')->store('/foto-kategori');
        }

        Kategori::create($ValidatedData);

        return redirect('/kategori')->with('tambah', ' Data sudah ditambahkan');
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Kategori $kategori)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kategori_id)
    {

        $kategoris = Kategori::find($kategori_id);
        return view('cms.cms-kategori.update', compact('kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoriRequest $request,  $id)
    {
        $ValidatedData = $request->validate([

            'nama_kategori' => 'required|regex:/^[a-zA-Z ]+$/',
            'dekripsi_kategori' => 'required',
            'foto' => 'image|file|max:2048',
        ]);

        if ($request->file('foto')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $ValidatedData['foto'] = $request->file('foto')->store('/foto-kategori');
        }

        Kategori::where('id', $id)->update($ValidatedData);

        return redirect('/kategori')->with('update', 'Data sudah diUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $test = DB::table('kategoris')->select('foto')
            ->where('id', $id)
            ->get();
        if ($test[0]->foto) {
            Storage::delete($test[0]->foto);
        }
        Kategori::destroy($id);
        return redirect('/kategori')->with('delete', 'your data have been deleted');
    }
}
