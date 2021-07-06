<?php

namespace Database\Factories;

use App\Catalog;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatalogFactory extends Factory
{
    /**
     
     *
     * @var string
     */
    protected $model = Catalog::class;

    /**
     
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(15, true),
            'description' => $this->faker->paragraph,
            'parent_id' => null,
        ];
    }
}
