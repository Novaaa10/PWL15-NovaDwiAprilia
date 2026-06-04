<x-app-layout>

<x-slot name="header">
    <h2>Edit Kategori</h2>
</x-slot>

<div class="py-12">

    <div class="max-w-4xl mx-auto">

        <form
            action="{{ route('categories.update',$category->id) }}"
            method="POST">

            @csrf
            @method('PUT')

            <div>

                <label>Nama Kategori</label>

                <input
                    type="text"
                    name="category"
                    value="{{ $category->category }}"
                    class="border w-full">

            </div>

            <br>

            <button
                class="bg-green-500 text-white px-4 py-2 rounded">

                Update

            </button>

        </form>

    </div>

</div>

</x-app-layout>