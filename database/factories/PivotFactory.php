<?php

namespace Database\Factories;

use App\Models\Pivot;
use Illuminate\Database\Eloquent\Factories\Factory;

class PivotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pivot::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => rand(1, 15),
            'tag_id'  => rand(1, 4),
        ];
    }
}
