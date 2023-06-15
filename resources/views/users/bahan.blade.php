@extends('layouts.main')

{{-- <style>
    img {
        border: 10px solid #000000;
    }
</style> --}}

@section('container')
    <section>
        <div class="container my-5">
            <header class="mb-4  text-center">
                <h3> <b>Bahan</b></h3>
            </header>
            <div class="row">
                @foreach ($bahans as $bahan)
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="product tumbnail thumbnail-8">
                            <a href="" data-bs-toggle="modal" data-bs-target="#detail-{{ $bahan->id }}">
                                <img src="storage/{{ $bahan->foto }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                            </a>
                            <div class="text-center">
                                <h5>{{ $bahan->nama_bahan }}</h5>
                            </div>



                            {{-- modal  start --}}
                            <div class="modal fade" id="detail-{{ $bahan->id }}" tabindex="-1"
                                aria-labelledby="detailLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="detailLabel"><b>{{ $bahan->nama_bahan }}</b></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>


                                        <div class="modal-body">
                                            <div class="container-fluid">

                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <img src="storage/{{ $bahan->foto }}" class=" card-img-top">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label class="mb-2 "> <b>Dekripsi Bahan : </b></label>
                                                        <p>{{ $bahan->dekripsi_bahan }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            {{-- modal end --}}


                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection



{{-- <div class="col-lg-4 col-md-12 mb-4">
                        <div class="bg-image hover-zoom ripple shadow-1-strong rounded ripple-surface">
                            <a href="" data-bs-toggle="modal" data-bs-target="#detail-{{ $bahan->id }}">
                                <img src="storage/{{ $bahan->foto }}" class="w-100" />
                                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                                    <div class="d-flex justify-content-start align-items-start h-100">
                                        <h5><span
                                                class="badge bg-light pt-2 ms-3 mt-3 text-dark">{{ $bahan->nama_bahan }}</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                             </div> --}}
