<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Daftar Kategori
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <a href="{{ route('categories.create') }}"
                       class="bg-blue-500 text-white px-4 py-2 rounded">
                        Tambah Kategori
                    </a>

                    <table class="table-auto w-full mt-4 border border-gray-300">

                        <thead>
                            <tr>
                                <th class="border p-2">No</th>
                                <th class="border p-2">Kategori</th>
                            </tr>
                        </thead>

                        <tbody>

                        @foreach($categories as $category)

                            <tr>
                                <td class="border p-2">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="border p-2">
                                    {{ $category->category }}
                                </td>
                            </tr>

                        @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>