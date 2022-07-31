<?php

namespace Database\Factories;

use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResourceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resource::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // $table->id();
            // $table->string('description', 3000);
            // $table->string('url', 1500);
            // $table->integer('course_id');
            // $table->timestamps();
            // $table->integer('made_by');
            'id' => $this->faker->unique()->numberBetween(1, 1000),
            'description' => $this->faker->text(3000),
            'url' => $this->faker->url(),
            'course_id' => $this->faker->numberBetween(1, 1000),
            'created_at' => now(),
            'updated_at' => now(),
            'made_by' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
