<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'kode_barang' => ['required', 'max:255'],
            'nama_barang' => ['required', 'max:255', 'string'],
            'harga_jual' => ['required', 'numeric'],
            'harga_beli' => ['required', 'numeric'],
            'satuan' => ['required', 'max:255', 'string'],
            'kategori' => ['required', 'max:255', 'string'],
        ];
    }
}
