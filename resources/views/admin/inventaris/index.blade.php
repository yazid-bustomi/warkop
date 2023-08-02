<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tulisan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('admin.inv.create') }}" class="btn btn-primary p-6">Tambah Inventaris</a>
                    <table class="table-auto mx-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">No</th>
                                <th class="px-4 py-2">Nama</th>
                                <th class="px-4 py-2">Jumlah</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $indexAwal = 1; ?>
                            <tr>
                                @foreach ($inventaris as $data)
                                    <td class="border px-4 py-2">{{ $indexAwal }}</td>
                                    <td class="border px-4 py-2">{{ $data->name }}</td>
                                    <td class="border px-4 py-2">{{ $data->qty }}</td>
                                    <td class="border px-4 py-2">
                                        @foreach ($data->InventoryHistory as $item)
                                            {{ $item->status }}
                                        @endforeach
                                    </td>
                                    <td class="border px-4 py-2">
                                        @foreach ($data->InventoryHistory as $item)
                                            {{ $item->keterangan }}
                                        @endforeach
                                    </td>
                            </tr>
                            <?php $indexAwal++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
