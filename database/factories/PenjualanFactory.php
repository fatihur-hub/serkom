<?php

namespace Database\Factories;

use App\Models\Penjualan;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PenjualanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penjualan::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tgl_faktur' => $this->faker->date(),
            'no_faktur' => $this->faker->randomNumber(),
            'nama_konsumen' => $this->faker->text(255),
            'jumlah' => $this->faker->randomNumber(0),
            'harga_satuan' => $this->faker->randomNumber(0),
            'harga_total' => $this->faker->randomNumber(0),
            'barang_id' => \App\Models\Barang::factory(),
        ];
    }
}
