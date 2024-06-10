@php $editing = isset($barang) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="kode_barang"
            label="Kode Barang"
            :value="old('kode_barang', ($editing ? $barang->kode_barang : ''))"
            placeholder="Kode Barang"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="nama_barang"
            label="Nama Barang"
            :value="old('nama_barang', ($editing ? $barang->nama_barang : ''))"
            placeholder="Nama Barang"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.number
            name="harga_jual"
            label="Harga Jual"
            :value="old('harga_jual', ($editing ? $barang->harga_jual : ''))"
            placeholder="Harga Jual"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.number
            name="harga_beli"
            label="Harga Beli"
            :value="old('harga_beli', ($editing ? $barang->harga_beli : ''))"
            placeholder="Harga Beli"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="satuan"
            label="Satuan"
            :value="old('satuan', ($editing ? $barang->satuan : ''))"
            maxlength="255"
            placeholder="Satuan | misal pcs"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="kategori"
            label="Kategori"
            :value="old('kategori', ($editing ? $barang->kategori : ''))"
            maxlength="255"
            placeholder="Kategori | misal makanan"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
