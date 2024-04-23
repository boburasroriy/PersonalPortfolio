<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name'=>'Science']);
        Category::create(['name'=>'Technology']);
        Category::create(['name'=>'Personal development']);
        Category::create(['name'=>'Quotes']);
        Category::create(['name'=>'Mindset']);




    }
}
