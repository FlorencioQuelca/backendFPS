<?php

namespace Database\Factories;

use App\Models\DescripcionSociedadAccidental;
use Illuminate\Database\Eloquent\Factories\Factory;

class DescripcionSociedadAccidentalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DescripcionSociedadAccidental::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           "num"=>rand(1,10),
            "empresa_id"=>1,
            "sociedadAccidental_id"=>1
        ];
    }
}
