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
        $categories = [
            [
                'name'=> 'Car',
                'description'=> 'All car listings',

            ],
            [
                'name' => 'House',
                'description'=>' All house listings'
            ],
            [
                'name' => 'Construction',
                'description'=>' Construction jobs and services '
            ],

        ];
        foreach ($categories as $category) {
            Category::Create([
                'pid' => \Str::uuid(),
                'name' => $category['name'],
                'description' => $category['description'],
            ]);
        }
    }
}
