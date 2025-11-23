<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded shadow">
            
            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                
                <div class="mb-4">
                    <label class="block text-gray-700">Nama Produk</label>
                    <input type="text" name="name" class="w-full border p-2 rounded" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Harga</label>
                    <input type="number" name="price" class="w-full border p-2 rounded" value="{{ old('price') }}">
                    @error('price')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Stok</label>
                    <input type="number" name="stock" class="w-full border p-2 rounded" value="{{ old('stock') }}">
                    @error('stock')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex gap-2">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
                    <a href="{{ route('products.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>