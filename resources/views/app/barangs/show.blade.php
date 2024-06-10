@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('barangs.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.barangs.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.barangs.inputs.kode_barang')</h5>
                    <span>{{ $barang->kode_barang ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.barangs.inputs.nama_barang')</h5>
                    <span>{{ $barang->nama_barang ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.barangs.inputs.harga_jual')</h5>
                    <span>{{ $barang->harga_jual ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.barangs.inputs.harga_beli')</h5>
                    <span>{{ $barang->harga_beli ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.barangs.inputs.satuan')</h5>
                    <span>{{ $barang->satuan ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.barangs.inputs.kategori')</h5>
                    <span>{{ $barang->kategori ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('barangs.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Barang::class)
                <a href="{{ route('barangs.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
