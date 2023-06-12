@extends('layouts.main')

@section('container')
    <section>
        <div class="container my-5">
            <div class="row flow-offset-1 text-center">
                <header class="mb-4  text-center">
                    <h3> <b> Kategori</b></h3>
                </header>

                @foreach ($kategoris as $kategori)
                    <div class="col-lg-3 col-md-4">
                        <div class="product tumbnail thumbnail-3 ">
                            <a href="/kategoriUser/{{ $kategori->nama_kategori }}">
                                <img class="img-fluid rounded-3 mb-3 " src="storage/{{ $kategori->foto }}" width="300"
                                    height="300">
                            </a>
                        </div>
                        <div class="caption">
                            <h6>
                                <a href="/kategoriUser/{{ $kategori->nama_kategori }}">{{ $kategori->nama_kategori }}</a>
                            </h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
