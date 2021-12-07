<?php

namespace Database\Factories\frontend;

use App\Models\frontend\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'slider_photo' => 'mpc ('.$this->faker->numberBetween(1, 8).').png'
        ];
    }
}
