<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Review;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            ['product_id' => 1, 'description' => 'Review for Product 1'],
            ['product_id' => 5, 'description' => 'Review for Product 5'],
            ['product_id' => 15, 'description' => 'Review for Product 15'],
            ['product_id' => 18, 'description' => 'Review for Product 18'],
        ];

        foreach ($reviews as $review) {
            Review::firstOrCreate(
                ['description' => $review['description']],
                $review
            );
        }
    }
}
