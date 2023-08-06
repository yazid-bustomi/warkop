@extends('layouts.app')
@section('konten')
    <div class="row">
        <div class="col-xl-6">
            <div class="content-wrapper">
                <div class="content">
                    <div class="px-6 py-4">
                        <h2>Tambah Inventaris</h2>
                    </div>

                    <form method="POST" action="{{ route('admin.inv.store') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationServer01">Nama Barang :</label>
                                <input type="text" name="name" class="form-control border-success"
                                    id="validationServer01" placeholder="Nama Barang" required>
                                {{-- <div class="text-success small mt-1">
                                    Looks good!
                                </div> --}}
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationServer02">Jumlah :</label>
                                <input type="number" name="qty" class="form-control border-info"
                                    id="validationServer02" placeholder="1" required>
                                {{-- <div class="text-info small mt-1">
                                    We'll never share your email with anyone else.
                                </div> --}}
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationServer02">Status :</label>
                                <input type="text" name="status" class="form-control border-warning"
                                    id="validationServer02" placeholder="Baru / Rusak" required>
                                {{-- <div class="text-warning small mt-1">
                                    Shucks, check the formatting of that and try again.
                                </div> --}}
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationServer02">Keterangan :</label>
                                <input type="text" name="keterangan" class="form-control border-danger"
                                    id="validationServer02" placeholder="Keterangan bila ada">
                                {{-- <div class="text-daborder-danger small mt-1">
                                    Sorry, that username's taken. Try another?
                                </div> --}}
                            </div>

                            <input id="tokoid" value="{{ $tokoid }}" hidden type="number" name="tokoid">
                        </div>
                        <button class="btn btn-primary btn-pill mr-2" type="submit">Submit</button>
                        <a href="{{ route('admin.inv.index') }}" class="btn btn-danger btn-pill">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
