<x-app-layout>

<x-slot name="header">
    <h2>Tambah Kategori</h2>
</x-slot>

<div class="py-12">

    <div class="max-w-4xl mx-auto">

        <form action="{{ route('categories.store') }}"
              method="POST">

            @csrf

            <div>

                <label>Nama Kategori</label>

                <input
                    type="text"
                    name="category"
                    class="border w-full">

            </div>

            <br>

            <button
                class="bg-blue-500 text-white px-4 py-2 rounded">

                Simpan

            </button>

        </form>

    </div>

</div>

</x-app-layout>