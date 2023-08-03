{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Product') }}
        </h2>

        <a href="{{ route('admin.inv.index') }}" class="font-semibold text-warning text-xl">Back</a>
    </x-slot>

    <form method="POST" action="{{ route('admin.inv.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama Barang')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
         <!-- Name -->
         <div class="mt-4">
            <x-input-label for="qty" :value="__('Jumlah')" />
            <x-text-input id="qty" class="block mt-1 w-full" type="number" name="qty" required />
            <x-input-error :messages="$errors->get('qty')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="status" :value="__('Status')" />
            <x-text-input id="status" class="block mt-1 w-full" type="text" name="status" :value="old('status')" required autocomplete="status" />
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="keterangan" :value="__('Keterangan')" />
            <x-text-input id="keterangan" class="block mt-1 w-full" type="text" name="keterangan" :value="old('keterangan')"  autocomplete="keterangan" />
            <x-input-error :messages="$errors->get('keterangan')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-text-input id="tokoid" value="{{ $tokoid }}" hidden type="number" name="tokoid" required />
        </div>

            <x-primary-button class="ml-4">
                {{ __('Tambah') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout> --}}
@extends('layouts.app')
@section('konten')
<div class="row">
    <div class="col-xl-6">
<div class="content-wrapper">
    <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
<div class="px-6 py-4">
<h2>Inventory</h2>
</div>
</div>

<form>
    <div class="form-row">
      <div class="col-md-12 mb-3">
        <label for="validationServer01">Input with success</label>
        <input type="text" class="form-control border-success" id="validationServer01" placeholder="First name" required>
        <div class="text-success small mt-1">
          Looks good!
        </div>
      </div>
      <div class="col-md-12 mb-3">
        <label for="validationServer02">Input with info</label>
        <input type="text" class="form-control border-info" id="validationServer02" placeholder="Last name"
          value="Last Name" required>
        <div class="text-info small mt-1">
          We'll never share your email with anyone else.
        </div>
      </div>
      <div class="col-md-12 mb-3">
        <label for="validationServer02">Input with warning</label>
        <input type="text" class="form-control border-warning" id="validationServer02" placeholder="Last name"
          value="Last Name" required>
        <div class="text-warning small mt-1">
          Shucks, check the formatting of that and try again.
        </div>
      </div>
      <div class="col-md-12 mb-3">
        <label for="validationServer02">Input with danger</label>
        <input type="text" class="form-control border-danger" id="validationServer02" placeholder="Last name"
          value="Last Name" required>
        <div class="text-daborder-danger small mt-1">
          Sorry, that username's taken. Try another?
        </div>
      </div>
    </div>
    <button class="btn btn-primary btn-pill mr-2" type="submit">Submit</button>
    <button class="btn btn-light btn-pill" type="submit">Cancel</button>
  </form>
        </div>
    </div>
</div>
  
@endsection