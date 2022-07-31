<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->numberBetween(1, 1000),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'rating' => $this->faker->randomFloat(2, 1, 5),
            // the most commented adjective of the teacher
            'adjective' => $this->faker->randomElement(
                [
                    'Puntual',
                    'Comprensivo',
                    'Responsable',
                    'Eficaz',
                    'Estricto',
                    'Flexible',
                    'Organizado',
                ]
            ),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
