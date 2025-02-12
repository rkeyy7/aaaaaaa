<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\jersey ;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jersey>
 */
class JerseyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = jersey::class;

    public function definition(): array
    {
        return [
            'name'=> $this->faker->sentence(),
            'description' =>$this->faker->paragraph(),
            'categoria' =>$this->faker->randomElement(['retro','actual'])
        ];
    }
}
