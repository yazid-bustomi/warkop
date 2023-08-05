<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order') }}
        </h2>

        <a href="{{ route('order.index') }}" class="font-semibold text-warning text-xl">Back</a>
    </x-slot>

    <form method="POST" action="{{ route('order.store') }}">
        @csrf

        <h2>Pilih Data:</h2>
        <select name="selected_data[]" multiple>
            @foreach ($dataToko as $item)
                <option value="{{ $item->id }}">{{ $item->name }} - Harga: {{ $item->price }}</option>
            @endforeach
            <input type="number" hidden value="{{ $user }}" name="user_id">
        </select>
        <button type="submit">Kirim</button>
    </form>
</x-app-layout>
