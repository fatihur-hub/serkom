@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">@lang('crud.penjualans.index_title')</h4>
            </div>

            <div class="searchbar mt-4 mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="input-group">
                                <input
                                    id="indexSearch"
                                    type="text"
                                    name="search"
                                    placeholder="{{ __('crud.common.search') }}"
                                    value="{{ $search ?? '' }}"
                                    class="form-control"
                                    autocomplete="off"
                                />
                                <div class="input-group-append">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        <i class="icon ion-md-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-right">
                        @can('create', App\Models\Penjualan::class)
                        <a
                            href="{{ route('penjualans.create') }}"
                            class="btn btn-primary"
                        >
                            <i class="icon ion-md-add"></i>
                            @lang('crud.common.create')
                        </a>
                        @endcan
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.penjualans.inputs.tgl_faktur')
                            </th>
                            <th class="text-left">
                                @lang('crud.penjualans.inputs.no_faktur')
                            </th>
                            <th class="text-left">
                                @lang('crud.penjualans.inputs.nama_konsumen')
                            </th>
                            <th class="text-left">
                                @lang('crud.penjualans.inputs.barang_id')
                            </th>
                            <th class="text-right">
                                @lang('crud.penjualans.inputs.jumlah')
                            </th>
                            <th class="text-right">
                                @lang('crud.penjualans.inputs.harga_satuan')
                            </th>
                            <th class="text-right">
                                @lang('crud.penjualans.inputs.harga_total')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($penjualans as $penjualan)
                        <tr>
                            <td>{{ $penjualan->tgl_faktur ?? '-' }}</td>
                            <td>{{ $penjualan->no_faktur ?? '-' }}</td>
                            <td>{{ $penjualan->nama_konsumen ?? '-' }}</td>
                            <td>
                                {{ optional($penjualan->barang)->nama_barang ??
                                '-' }}
                            </td>
                            <td>{{ $penjualan->jumlah ?? '-' }}</td>
                            <td>{{ $penjualan->harga_satuan ?? '-' }}</td>
                            <td>{{ $penjualan->harga_total ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $penjualan)
                                    <a
                                        href="{{ route('penjualans.edit', $penjualan) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $penjualan)
                                    <a
                                        href="{{ route('penjualans.show', $penjualan) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $penjualan)
                                    <form
                                        action="{{ route('penjualans.destroy', $penjualan) }}"
                                        method="POST"
                                        onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-light text-danger"
                                        >
                                            <i class="icon ion-md-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="8">{!! $penjualans->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
