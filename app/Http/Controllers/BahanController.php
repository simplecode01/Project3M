<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreBahanRequest;
use App\Http\Requests\UpdateBahanRequest;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $bahans = Bahan::where('nama_bahan', 'LIKE', '%' . $request->cari . '%')->paginate(5);
            $bahans->appends($request->all());
        } else {
            $bahans = Bahan::paginate(5);
        }


        return view('cms.cms-bahan.index', compact('bahans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.cms-bahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBahanRequest $request)
    {
        $ValidatedData = $request->validate([

            'nama_bahan' => 'required|max:255|regex:/^[a-zA-Z ]+$/',
            'kode_bahan' => 'required|max:255|unique:bahans',
            'dekripsi_bahan' => 'required|max:255',
            'foto' => 'required|image|file|max:2048',
        ]);

        if ($request->file('foto')) {
            $ValidatedData['foto'] = $request->file('foto')->store('/foto-bahan');
        }

        Bahan::create($ValidatedData);

        return redirect('/bahan')->with('tambah', ' Data berhasil ditambahkan');
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Bahan $bahan)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($bahan_id)
    {
        $bahans = Bahan::find($bahan_id);
        return view('cms.cms-bahan.update', compact('bahans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBahanRequest $request, $id)
    {
        $ValidatedData = $request->validate([

            'nama_bahan' => 'required|max:255|regex:/^[a-zA-Z ]+$/',
            'kode_bahan' => 'required|max:255',
            'dekripsi_bahan' => 'required|max:255',
            'foto' => 'image|file|max:2048',
        ]);

        if ($request->file('foto')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $ValidatedData['foto'] = $request->file('foto')->store('/foto-bahan');
        }

        Bahan::where('id', $id)->update($ValidatedData);

        return redirect('/bahan')->with('update', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $test = DB::table('bahans')->select('foto')
            ->where('id', $id)
            ->get();
        if ($test[0]->foto) {
            Storage::delete($test[0]->foto);
        }
        Bahan::destroy($id);
        return redirect('/bahan')->with('delete', 'Data berhasil dihapus');
    }
}
