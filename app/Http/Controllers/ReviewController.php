<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Product;
use App\Models\Review;

class ReviewController extends Controller
{
    public function showAll(string $productId): JsonResponse
    {
        $reviews = Review::where('product_id', $productId)->get();

        return response()->json($reviews);
    }

    public function store(Request $request, string $productId): JsonResponse
    {
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $validated = $request->validate([
            'description' => 'required|string|max:1000',
        ]);

        $review = Review::create([
            'product_id' => $productId,
            'description' => $validated['description'],
        ]);

        return response()->json($review, 201);
    }
}
