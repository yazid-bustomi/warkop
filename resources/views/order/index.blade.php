<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="card">
                        <div class="card-body ">
                            <a href="{{ route('order.create') }}" class="btn btn-primary p-6">Order</a>
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <th scope="row">{{ $no }}</th>
                                            <td>
                                                @foreach ($order->OrderDetail as $nama)
                                                    <li>{{ $nama->product->name }}</li>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($order->OrderDetail as $harga)
                                                    <li>{{ $harga->product->price }}</li>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($order->OrderDetail as $qty)
                                                    <li>{{ $qty->qty }}</li>
                                                @endforeach
                                            </td>
                                            <td>
                                                <?php $jumlahTotalBayar = 0; ?>
                                                @foreach ($order->OrderDetail as $jumlah)
                                                    <li>{{ $jumlah->harga }}</li>
                                                    <?php $jumlahTotalBayar += $jumlah->harga; ?>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <td colspan="4">Total Bayar :</td>
                                        <td>{{ $jumlahTotalBayar }}</td>
                                        <?php $no++; ?>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
