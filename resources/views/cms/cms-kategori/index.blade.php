<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="/kategori"> {{ __('Kategori') }}
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


                    <a href="/kategori/create" class="btn btn-secondary">{{ __('KATEGORI') }}
                    </a>

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
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">ID</th>
                                    <th scope="col" class="px-6 py-3">Kategori</th>
                                    <th scope="col" class="px-6 py-3">Dekripsi</th>
                                    <th scope="col" class="px-6 py-3">Foto</th>
                                    <th scope="col" class="px-6 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>


                                @forelse ($kategoris as $kategori)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">

                                        <td class="px-6 py-4">{{ $kategori->id }}</td>
                                        <td class="px-6 py-4">{{ $kategori->nama_kategori }}</td>
                                        <td class="px-6 py-4">{{ $kategori->dekripsi_kategori }}</td>
                                        <td class="px-6 py-4"><img src="storage/{{ $kategori->foto }}" class="rounded"
                                                width="100px"></td>

                                        <td class="px-6 py-4">
                                            <x-primary-button class="ml-4">
                                                <a href="/kategori/{{ $kategori->id }}/edit"> {{ __('Edit') }}</a>
                                            </x-primary-button>
                                            <form action="/kategori/{{ $kategori->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <x-primary-button class="ml-4"
                                                    onclick="return confirm('Are You sure?')">
                                                    {{ __('Delate') }}
                                                </x-primary-button>
                                            </form>
                                        </td>

                                    </tr>
                                @empty
                                    <tr colspan="6">no record</tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $kategoris->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
