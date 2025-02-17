<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\Sosmed;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DetailSosmedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'member_id' => Member::factory(),
            'sosmed_id' => Sosmed::factory()
        ];
    }
}
