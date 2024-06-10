<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Barang::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_barang' => $this->faker->randomNumber(),
            'nama_barang' => $this->faker->text(255),
            'harga_jual' => $this->faker->randomNumber(0),
            'harga_beli' => $this->faker->randomNumber(0),
            'satuan' => $this->faker->text(255),
            'kategori' => $this->faker->text(255),
        ];
    }
}
