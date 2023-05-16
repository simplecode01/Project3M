<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="/bahan"> {{ __('Bahan') }}
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ url('bahan/' . $bahans->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="nama_bahan" :value="__('Bahan')" />
                            <x-text-input id="nama_bahan" class="block mt-1 w-full" type="text" name="nama_bahan"
                                value="{{ $bahans->nama_bahan == $bahans->nama_bahan ? $bahans->nama_bahan : old('nama_bahan') }}"
                                autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('nama_bahan')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="kode_bahan" :value="__('Kode Bahan')" />
                            <x-text-input id="kode_bahan" class="block mt-1 w-full" type="text" name="kode_bahan"
                                value="{{ $bahans->kode_bahan == $bahans->kode_bahan ? $bahans->kode_bahan : old('kode_bahan') }}"
                                autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('kode_bahan')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="dekripsi_bahan" :value="__('Dekripsi')" />
                            <x-text-input id="dekripsi_bahan" class="block mt-1 w-full" type="text"
                                name="dekripsi_bahan"
                                value="{{ $bahans->dekripsi_bahan == $bahans->dekripsi_bahan ? $bahans->dekripsi_bahan : old('dekripsi_bahan') }}"
                                autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('dekripsi_bahan')" class="mt-2" />
                        </div>






                        <div>

                            <x-input-label for="foto" :value="__('Foto')" />
                            <input type="hidden" name="fotoLama" value="{{ $bahans->foto }}">
                            @if ($bahans->foto)
                                <img src="{{ asset('storage/' . $bahans->foto) }}"
                                    class="foto-preview img-fluid mb-3 d-block" width="250px">
                            @else
                                <img class="foto-preview img-fluid mb-3" width="250px">
                            @endif
                            <x-text-input id="foto" class="block mt-1 w-full" type="file" name="foto"
                                id="foto" value="{{ $bahans->foto }}" onchange="previewFoto()" />
                            <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                        </div>











                        <div>
                            <br>
                            <x-primary-button class="ml-4">
                                {{ __('Update') }}
                            </x-primary-button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <script>
        function previewFoto() {

            const foto = document.querySelector('#foto');
            const fotoPreview = document.querySelector('.foto-preview');

            fotoPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(foto.files[0]);

            oFReader.onload = function(oFREvent) {
                fotoPreview.src = oFREvent.target.result;
            }
        }
    </script>

</x-app-layout>
