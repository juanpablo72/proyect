<?php

namespace Database\Factories;

use App\Models\materias;
use Illuminate\Database\Eloquent\Factories\Factory;

class MateriasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = materias::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
              'nombre_materia' => $this->faker->name,
            'docente' => $this->faker->numberBetween(1,999),
            'tipoMateria' => $this->faker->numberBetween(1,999),
        ];
    }
}
