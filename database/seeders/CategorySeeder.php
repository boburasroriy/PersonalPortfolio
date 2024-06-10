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
        Category::create(['name'=>'Books Review']);
        Category::create(['name'=>'Book advice']);
        Category::create(['name'=>'Motivational Books']);
        Category::create(['name'=>'Personal Development Books']);
        Category::create(['name'=>'Movies']);


        Category::create(['name'=>'IELTS writing']);
        Category::create(['name'=>'Quotes']);
        Category::create(['name'=>'Poem']);

        Category::create(['name'=>'Personal Growth']);
        Category::create(['name'=>'Personal development']);
        Category::create(['name'=>'Mindset']);

        Category::create(['name'=>'Career Advice']);
        Category::create(['name'=>'Health and Wellness']);

        Category::create(['name'=>'Stories']);
        Category::create(['name'=>'Success Stories']);
        Category::create(['name'=>'Personal Experiences']);
        Category::create(['name'=>'Case Studies']);

        Category::create(['name'=>'Tips & Tricks']);
        Category::create(['name'=>'Productivity Hacks']);
        Category::create(['name'=>'Study Tips']);

        Category::create(['name'=>'Lifestyle']);
        Category::create(['name'=>'Work-Life Balance']);

        Category::create(['name'=>'Challenges and Solutions']);
        Category::create(['name'=>'Problem-Solving']);
        Category::create(['name'=>'Real-Life Challenges']);

    }
}
