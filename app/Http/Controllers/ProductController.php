<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use App\Models\Product;

class ProductController extends Controller
{
    public function showAll(Request $request): JsonResponse
    {
        $name = $request->name;
        $minPrice = $request->min_price;
        $maxPrice = $request->max_price;
        $minWeight = $request->min_weight;
        $maxWeight = $request->max_weight;
        $countries = $request->country;

        $query = Product::query()
            ->select('id', 'name', 'description', 'price', "country_of_origin", "weight");

        if ($name) {
            $query->where('name', 'like', "%{$name}%");
        }

        if ($minPrice) {
            $query->where('price', '>=', $minPrice);
        }

        if ($maxPrice) {
            $query->where('price', '<=', $maxPrice);
        }

        if ($minWeight) {
            $query->where('weight', '>=', $minWeight);
        }

        if ($maxWeight) {
            $query->where('weight', '<=', $maxWeight);
        }

        if ($countries && is_array($countries)) {
            $query->whereIn('country_of_origin', $countries);
        }

        $products = $query->paginate(10);

        return response()->json($products);
    }

    public function showOne(Request $request, string $productId): JsonResponse
    {
        $product = Product::with('reviews')->where('id', $productId)->first();

        return response()->json($product);
    }
}
