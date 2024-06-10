<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenjualanStoreRequest extends FormRequest
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
            'tgl_faktur' => ['required', 'date'],
            'no_faktur' => ['required', 'max:255'],
            'nama_konsumen' => ['required', 'max:255', 'string'],
            'barang_id' => ['required', 'exists:barangs,id'],
            'jumlah' => ['required', 'numeric'],
            'harga_satuan' => ['required', 'numeric'],
            'harga_total' => ['required', 'numeric'],
        ];
    }
}
