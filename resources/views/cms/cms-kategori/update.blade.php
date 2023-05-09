<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="/kategori"> {{ __('Kategori') }}
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- /kategori/{{ $kategoris->id }} --}}
                    <form action="{{ url('kategori/' . $kategoris->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="nama_kategori" :value="__('Kategori')" />
                            <x-text-input id="nama_kategori" class="block mt-1 w-full" type="text"
                                name="nama_kategori"
                                value="{{ $kategoris->nama_kategori == $kategoris->nama_kategori ? $kategoris->nama_kategori : old('nama_kategori') }}"
                                autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('nama_kategori')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="dekripsi_kategori" :value="__('Dekripsi')" />
                            <x-text-input id="dekripsi_kategori" class="block mt-1 w-full" type="text"
                                name="dekripsi_kategori"
                                value="{{ $kategoris->dekripsi_kategori == $kategoris->dekripsi_kategori ? $kategoris->dekripsi_kategori : old('dekripsi_kategori') }}"
                                autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('dekripsi_kategori')" class="mt-2" />
                        </div>






                        <div>

                            <x-input-label for="foto" :value="__('Foto')" />
                            <input type="hidden" name="fotoLama" value="{{ $kategoris->foto }}">
                            @if ($kategoris->foto)
                                <img src="{{ asset('storage/' . $kategoris->foto) }}"
                                    class="foto-preview img-fluid mb-3 d-block" width="250px">
                            @else
                                <img class="foto-preview img-fluid mb-3" width="250px">
                            @endif

                            <x-text-input id="foto" class="block mt-1 w-full" type="file" name="foto"
                                id="foto" value="{{ $kategoris->foto }}" onchange="previewFoto()" />


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

    <script>
        function previewImage() {

            const image = document.querySelector('#picture');
            const imagePreview = document.querySelector('.img-preview');

            imagePreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imagePreview.src = oFREvent.target.result;
            }
        }
    </script>

</x-app-layout>
