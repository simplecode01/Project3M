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

                    <form action="{{ url('produk/' . $produks->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div>
                            <x-input-label for="nama_produk" :value="__('Produk')" />
                            <x-text-input id="nama_produk" class="block mt-2 w-full" type="text" name="nama_produk"
                                value="{{ $produks->nama_produk == $produks->nama_produk ? $produks->nama_produk : old('nama_produk') }}"
                                autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('nama_produk')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label class="block mt-2 w-full" for="id_kategori" :value="__('Kategori')" />
                            <select id="id_kategori" name="id_kategori"
                                class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="   {{ $produks->kategori_id }}"></option>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}"
                                        {{ $produks->id_kategori == $kategori->id ? 'selected' : '' }}>
                                        {{ $kategori->nama_kategori }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('id_kategori')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="dekripsi_produk" :value="__('Dekripsi')" />
                            <x-text-input id="dekripsi_produk" class="block mt-1 w-full" type="text"
                                name="dekripsi_produk"
                                value="{{ $produks->dekripsi_produk == $produks->dekripsi_produk ? $produks->dekripsi_produk : old('dekripsi_produk') }}"
                                autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('dekripsi_produk')" class="mt-2" />
                        </div>

                        <div>

                            <x-input-label for="foto" :value="__('Foto')" />
                            <input type="hidden" name="fotoLama" value="{{ $produks->foto }}">
                            @if ($produks->foto)
                                <img src="{{ asset('storage/' . $produks->foto) }}"
                                    class="foto-preview img-fluid mb-3 d-block" width="250px">
                            @else
                                <img class="foto-preview img-fluid mb-3" width="250px">
                            @endif

                            <x-text-input id="foto" class="block mt-1 w-full" type="file" name="foto"
                                id="foto" value="{{ $produks->foto }}" onchange="previewFoto()" />


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
