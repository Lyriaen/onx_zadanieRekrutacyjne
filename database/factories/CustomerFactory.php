<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $arrayOfUsersID = User::all() -> pluck('id') -> toArray();
        $randomUserID = $arrayOfUsersID[array_rand($arrayOfUsersID)];
        return [
            'name' => $this->faker->name(),
            'user_ID' => $randomUserID,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
