<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function home()
    {
        return view('users.home', [

            // 'clients' => DB::table('clients')->take(3)->get(),
            // 'teams' => DB::table('teams')->take(3)->get(),
            // 'home' => Page::where('id', 10)->get(),
            // 'team' => Page::where('id', 3)->get(),
            // 'client' => Page::where('id', 4)->get(),
            // 'title' => 'Home'
        ]);
    }

    public function kategori()
    {
        return view('users.kategori', [

            // 'kategoris' => DB::table('kategoris')->take(3)->get(),
            'kategoris' => Kategori::all(),
            // 'teams' => DB::table('teams')->take(3)->get(),
            // 'home' => Page::where('id', 10)->get(),
            // 'team' => Page::where('id', 3)->get(),
            // 'client' => Page::where('id', 4)->get(),
            // 'title' => 'Home'
        ]);
    }

    public function kategoriProduk($params)
    {

        if (Kategori::where('nama_kategori', $params)->exists()) {
            $kategori = Kategori::where('nama_kategori', $params)->first();
            $produks = Produk::where('id_kategori', $kategori->id)->get();

            return view('users.kategoriProduk', compact('produks', 'kategori'));
        } {
            return redirect('/');
        }
    }


    public function bahan()
    {
        return view('users.bahan', [

            'bahans' => Bahan::all(),
        ]);
    }



    public function produk()
    {
        return view('users.produk', [

            'produks' => Produk::all(),
        ]);
    }
}
