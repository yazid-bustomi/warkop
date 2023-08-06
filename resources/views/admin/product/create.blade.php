@extends('layouts/app')
@section('konten')
    <div class="row">
        <div class="col-xl-6">
            <div class="content-wrapper">
                <div class="content">
                    <div class="px-6 py-4">
                        <h2>Tambah Product</h2>
                    </div>

                    <form method="POST" action="{{ route('admin.product.store') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationServer01">Nama Product :</label>
                                <input type="text" name="name" class="form-control border-success"
                                    id="validationServer01" placeholder="Nama Product" required>
                                {{-- <div class="text-success small mt-1">
                                    Looks good!
                                </div> --}}
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationServer02">Harga :</label>
                                <input type="number" name="price" class="form-control border-info"
                                    id="validationServer02" placeholder="10000" required>
                            </div>

                            <input id="toko_id" value="{{ $toko->id }}" hidden type="number" name="toko_id">
                        </div>
                        <button class="btn btn-primary btn-pill mr-2" type="submit">Submit</button>
                        <a href="{{ route('admin.product.index') }}" class="btn btn-danger btn-pill">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
