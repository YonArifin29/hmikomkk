<?php

namespace Database\Factories;

use App\Models\Sosmed;
use App\Models\Training;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'status' => 'kader',
            'image' => 'image.jpg',
            'gender' => "l",
            'phone_number' => '08989829898',
        ];
    }
}
