@extends('layouts/app')
@section('konten')
    <!-- Column Sizing -->
    <div class="card card-default">
        <div class="card-header">
            <h2>Pemesanan</h2>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <h5>Makanan</h5>
                    <div class="form-row align-items-center">
                        <div class="col-3">
                            <label for="makanan">Pilih Makanan:</label>
                            <select class="form-control rounded-0 bg-light" id="makanan">
                                <option>Rawon</option>
                                <option>Pecel</option>
                                <option>Sop Buntut</option>
                                <option>Gudeg</option>
                                <option>Rendang</option>
                            </select>
                        </div>
                        <div class="col-1">
                            <label for="jumlah_makanan">Jumlah:</label>
                            <input type="number" class="form-control" id="jumlah_makanan">
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-secondary btn-pill mt-6">Tambahkan</button>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <h5>Minuman</h5>
                    <div class="form-row align-items-center">
                        <div class="col-3">
                            <label for="minuman">Pilih Minuman:</label>
                            <select class="form-control rounded-0 bg-light" id="minuman">
                                <option>Es Teh</option>
                                <option>Es Jeruk</option>
                                <option>Es Gud Day</option>
                                <option>Teh Anget</option>
                                <option>Kopi</option>
                            </select>
                        </div>
                        <div class="col-1">
                            <label for="jumlah_minuman">Jumlah:</label>
                            <input type="number" class="form-control" id="jumlah_minuman">
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-secondary btn-pill mt-6">Tambahkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Table Product -->
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Products Inventory</h2>
                    </div>
                    <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product Name</th>
                                    <th>Id</th>
                                    <th>Qty</th>
                                    <th>Harga</th>
                                    <th>Jumlah Harga</th>
                                    <th>Daily Sale</th>
                                    <th>Total Bayar</th>
                                    <th>In Stock</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="py-0">
                                            <img src="/assets/images/products/products-xs-01.jpg" alt="Product Image">
                                        </td>

                                        <td>
                                            @foreach ($order->OrderDetail as $nama)
                                                {{ $nama->product->name }}
                                            @endforeach
                                        </td>
                                        <td>1</td>
                                        <td>
                                            @foreach ($order->OrderDetail as $qty)
                                                {{ $qty->qty }}
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($order->OrderDetail as $harga)
                                                {{ $harga->product->price }}
                                            @endforeach
                                        </td>
                                        <td>
                                            <?php $jumlahTotalBayar = 0; ?>
                                            @foreach ($order->OrderDetail as $jumlah)
                                                {{ $jumlah->harga }}
                                                <?php $jumlahTotalBayar += $jumlah->harga; ?>
                                            @endforeach
                                        </td>
                                        <td>
                                            <div id="tbl-chart-01"></div>
                                        </td>

                                        <td>{{ $jumlahTotalBayar }}</td>
                                        <td>belum</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    @endsection
