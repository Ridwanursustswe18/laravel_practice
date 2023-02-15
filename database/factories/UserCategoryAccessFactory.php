<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserCategoryAccess>
 */
class UserCategoryAccessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
        $category_id = Category::pluck('id')->random(20);
        return [
            //
            'accessable_category'=>
                json_encode($category_id)
            
            
        ];
    }
}
