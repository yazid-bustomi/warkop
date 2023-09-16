@extends('layouts.app')
@section('tittle')
    {{'dashboard'}}
@endsection
@section('header')
    {{'Dashboard'}}
@endsection
@section('konten')
    <!-- Top Statistics -->
    <div class="row">
        <div class="col-xl-3 col-sm-6">
          <div class="card card-default card-mini">
            <div class="card-header">
              <h2>$10,000</h2>
              <div class="sub-title">
                <span class="mr-1">Penjualan Hari Ini</span> |
                <span class="mx-1">45%</span>
                <i class="mdi mdi-arrow-up-bold text-success"></i>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-wrapper">
                <div>
                  <div id="spline-area-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Sales by Product -->
    <div class="card card-default">
        <div class="card-header align-items-center">
          <h2 class="">Produk Terjual</h2>
          <a href="#" class="btn btn-primary btn-pill" data-toggle="modal" data-target="#modal-stock">Add Stock</a>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <table id="product-sale" class="table table-product " style="width:100%">
              <thead>
                <tr>
                  <th>Nama Produk</th>
                  <th>Jumlah</th>
                  <th>Total Penjualan</th>
                  <th>%(persentase)</th>
                  <th class="th-width-250"></th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>Coach Swagger</td>
                  <td>134</td>
                  <td>$24541</td>
                  <td>35.28%</td>
                  <td>
                    <div class="progress progress-md rounded-0">
                      <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>


@endsection