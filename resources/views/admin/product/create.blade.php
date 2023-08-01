<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Product') }}
        </h2>

        <a href="{{ route('admin.product.index') }}" class="font-semibold text-warning text-xl">Back</a>
    </x-slot>

    <form method="POST" action="{{ route('admin.product.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama Product')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
         <!-- Name -->
         <div class="mt-4">
            <x-input-label for="price" :value="__('Harga')" />
            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" required />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-text-input id="toko_id" value="{{ $toko->id }}" hidden type="number" name="toko_id" required />
        </div>

            <x-primary-button class="ml-4">
                {{ __('Tambah') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
