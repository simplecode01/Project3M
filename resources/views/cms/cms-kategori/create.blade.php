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

                    <form action="{{ url('kategori') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <x-input-label for="nama_kategori" :value="__('Kategori')" />
                            <x-text-input id="nama_kategori" class="block mt-1 w-full" type="text"
                                name="nama_kategori" :value="old('nama_kategori')" autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('nama_kategori')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="dekripsi_kategori" :value="__('Deskripsi')" />
                            <x-text-input id="dekripsi_kategori" class="block mt-1 w-full" type="text"
                                name="dekripsi_kategori" :value="old('dekripsi_kategori')" autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('dekripsi_kategori')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="foto" :value="__('Foto')" />
                            <img class="foto-preview img-fluid mb-3" width="250px">
                            <x-text-input id="foto" class="block mt-1 w-full" type="file" name="foto"
                                id="foto" :value="old('foto')" onchange="previewFoto()" />
                            <x-input-error :messages="$errors->get('foto')" class="mt-2" />

                        </div>
                        <div>
                            <br>
                            <x-primary-button class="ml-4">
                                {{ __('Tambah') }}
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
