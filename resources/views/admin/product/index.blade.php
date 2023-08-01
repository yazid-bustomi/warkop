<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="card">
                        <div class="card-body ">
                            <a href="{{ route('admin.product.create') }}" class="btn btn-primary p-6">Tambah Product</a>
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($toko->product as $data)
                                        <tr>
                                            <th scope="row">{{ $i }}</th>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->price }}</td>
                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach
                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
