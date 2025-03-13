<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function __construct(
        private array $categories = [
            ['category' => 'Technology', 'alias' => 'TECHNOLOGY'],
            ['category' => 'Gaming', 'alias' => 'GAMING'],
            ['category' => 'Entertainment', 'alias' => 'ENTERTAINMENT'],
            ['category' => 'Science', 'alias' => 'SCIENCE'],
            ['category' => 'Sports', 'alias' => 'SPORTS'],
            ['category' => 'Business & Finance', 'alias' => 'BUSINESSFINANCE'],
            ['category' => 'Real Estate', 'alias' => 'REALESTATE'],
            ['category' => 'Vehicles', 'alias' => 'VEHICLES'],
            ['category' => 'Lifestyle', 'alias' => 'LIFESTYLE'],
            ['category' => 'Education', 'alias' => 'EDUCATION'],
            ['category' => 'Health & Wellness', 'alias' => 'HEALTHWELLNESS'],
            ['category' => 'Memes & Humor', 'alias' => 'MEMESHUMOR']
        ]
    ) {}
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert($this->categories);
    }
}
