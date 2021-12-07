<?php

namespace Database\Factories\frontend;

use App\Models\frontend\PeopleSay;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeopleSayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PeopleSay::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'profile' => 'emon.png',
          'name' => 'MD EMON HASSAN',
          'comment' => $this->faker->text(200)          
        ];
    }
}
