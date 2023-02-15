<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Customer;
use App\Models\ParentCategory;
use App\Models\Product;
use App\Models\UserCategoryAccess;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
//            Parentcategory::factory(100)
// ->has(Category::factory()
// ->has(Product::factory()->count(10000))
// ->count(10000))->create();
// ParentCategory::factory(5)
// ->has(Category::factory()
// ->has(Product::factory()->count(100))
// ->count(10))->create();
Customer::factory(10)
->has(UserCategoryAccess::factory()
->count(10))->create();


    }
}
