@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('penjualans.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.penjualans.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.penjualans.inputs.tgl_faktur')</h5>
                    <span>{{ $penjualan->tgl_faktur ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.penjualans.inputs.no_faktur')</h5>
                    <span>{{ $penjualan->no_faktur ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.penjualans.inputs.nama_konsumen')</h5>
                    <span>{{ $penjualan->nama_konsumen ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.penjualans.inputs.barang_id')</h5>
                    <span
                        >{{ optional($penjualan->barang)->nama_barang ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.penjualans.inputs.jumlah')</h5>
                    <span>{{ $penjualan->jumlah ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.penjualans.inputs.harga_satuan')</h5>
                    <span>{{ $penjualan->harga_satuan ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.penjualans.inputs.harga_total')</h5>
                    <span>{{ $penjualan->harga_total ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('penjualans.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Penjualan::class)
                <a
                    href="{{ route('penjualans.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
