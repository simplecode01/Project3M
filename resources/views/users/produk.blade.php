@extends('layouts.main')
{{-- <style>
    img {
        border: 2px solid #000000;
    }
</style> --}}
@section('container')
    <section style="background-color: #eee;">
        <div class="container py-5 ">
            <header class="mb-4  text-center">
                <h3> <b> Produk</b></h3>
            </header>
            <div class="row">
                @foreach ($produks as $produk)
                    <div class="col-lg-4 col-md-12 mb-4 ">
                        <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                            <img src="/storage/{{ $produk->foto }}" class="w-100" />
                            <div class="mask">
                                <div class="d-flex justify-content-start h-100">
                                    <h5 class="text-center">
                                        <span>
                                            {{ $produk->nama_produk }}
                                        </span>
                                    </h5>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
