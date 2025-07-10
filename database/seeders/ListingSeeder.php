<?php

namespace Database\Seeders;

use App\Enums\ListingStatus;
use App\Models\Category;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $broker = User::where('role','editor')->first();
        $categories = Category::first();

        if ($broker && $categories) {
            $listings = [
                [
                    'pid' => (string)\Str::uuid(),
                    'title' => 'Luxury Car for Sale',
                    'description' => 'A high-end luxury car in excellent condition.',
                    'price' => 50000,
                    'status' => ListingStatus::ACTIVE,
                    'category_id' => $categories->id,
                    'broker_id' => $broker->id,
                ],
                [
                    'pid' => (string)\Str::uuid(),
                    'title' => 'Spacious House for Rent',
                    'description' => 'A beautiful house with 4 bedrooms and a large garden.',
                    'price' => 1500,
                    'status' => ListingStatus::PENDING,
                    'category_id' => $categories->id,
                    'broker_id' => $broker->id,
                ],
                [
                    'pid' => (string)\Str::uuid(),
                    'title' => 'Construction Services Available',
                    'description' => 'Professional construction services for residential and commercial projects.',
                    'price' => 2000,
                    'status' => ListingStatus::SOLD,
                    'category_id' => $categories->id,
                    'broker_id' => $broker->id,
                ],
            ];

            foreach ($listings as $listing) {
                Listing::create($listing);
            }
        }
    }
}
