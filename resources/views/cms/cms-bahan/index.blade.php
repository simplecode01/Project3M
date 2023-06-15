<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="/bahan"> {{ __('Bahan') }}
            </a>
        </h2>
        <x-success-status class="mb-4" :status="session('tambah')" />
        <x-success-status class="mb-4" :status="session('update')" />
        <x-success-status class="mb-4" :status="session('delete')" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <x-primary-button>
                        <a href="/bahan/create" class="btn btn-secondary">{{ __('Tambah Data') }}
                        </a>
                    </x-primary-button>

                    <div align="right" class="input-group rounded">
                        <form action="/bahan" method="GET">
                            <input type="Cari" id="cari" name="cari" class="form-control rounded"
                                placeholder="Cari" aria-label="Cari" aria-describedby="search-addon" />
                        </form>
                    </div>
                    <div class="relative overflow-x-auto">

                        <div class="">
                            <div class="">
                                <div class="">
                                    <h2></h2>
                                </div>
                                <div class="">
                                    {{-- add --}}
                                </div>
                            </div>
                        </div>
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-4">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">#</th>
                                    <th scope="col" class="px-6 py-3">Nama Bahan</th>
                                    <th scope="col" class="px-6 py-3">Kode Bahan</th>
                                    <th scope="col" class="px-6 py-3">Deskripsi</th>
                                    <th scope="col" class="px-6 py-3">Foto</th>
                                    <th scope="col" class="px-6 py-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bahans as $key=>$bahan)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">

                                        <td class="px-6 py-4">{{ $bahans->firstItem() + $key }}</td>
                                        <td class="px-6 py-4">{{ $bahan->nama_bahan }}</td>
                                        <td class="px-6 py-4">{{ $bahan->kode_bahan }}</td>
                                        <td class="px-6 py-4">{{ $bahan->dekripsi_bahan }}</td>
                                        <td class="px-6 py-4"><img src="storage/{{ $bahan->foto }}" class="rounded"
                                                width="100px"></td>

                                        <td class="px-6 py-4">
                                            <button class="ml-4">
                                                <a href="/bahan/{{ $bahan->id }}/edit"> {{ __('Ubah') }}</a>
                                            </button>
                                            <form action="/bahan/{{ $bahan->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="ml-4"
                                                    onclick="return confirm('Yakin ingin menghapus data?')">
                                                    {{ __('Hapus') }}
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                @empty
                                    <tr colspan="6">no record</tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $bahans->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
