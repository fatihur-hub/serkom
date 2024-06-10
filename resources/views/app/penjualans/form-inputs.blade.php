@php $editing = isset($penjualan) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.date
            name="tgl_faktur"
            label="Tgl Faktur"
            value="{{ old('tgl_faktur', ($editing ? optional($penjualan->tgl_faktur)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="no_faktur"
            label="No Faktur"
            :value="old('no_faktur', ($editing ? $penjualan->no_faktur : ''))"
            placeholder="No Faktur"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="nama_konsumen"
            label="Nama Konsumen"
            :value="old('nama_konsumen', ($editing ? $penjualan->nama_konsumen : ''))"
            placeholder="Nama Konsumen"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="barang_id" label="Barang" required>
            @php $selected = old('barang_id', ($editing ? $penjualan->barang_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Barang</option>
            @foreach($barangs as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.number
            name="jumlah"
            label="Jumlah"
            :value="old('jumlah', ($editing ? $penjualan->jumlah : ''))"
            placeholder="Jumlah"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.number
            name="harga_satuan"
            label="Harga Satuan"
            :value="old('harga_satuan', ($editing ? $penjualan->harga_satuan : ''))"
            placeholder="Harga Satuan"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.number
            name="harga_total"
            label="Harga Total"
            :value="old('harga_total', ($editing ? $penjualan->harga_total : ''))"
            placeholder="Harga Total"
            required
        ></x-inputs.number>
    </x-inputs.group>
</div>
