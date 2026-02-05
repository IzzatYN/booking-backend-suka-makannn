<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = [
            [
                'id' => '1',
                'name' => 'Rendang lembu',
                'description' => 'Rich slow-cooked beef in spices & coconut milk',
                'price' => 55000,
                'category' => 'main-courses',
                'is_available' => true,
                'is_spicy' => true,
                'is_vegetarian' => false,
                'preparation_time' => 35,
            ],
            [
                'id' => '2',
                'name' => 'Nasi Goreng Kampung',
                'description' => 'Village-style fried rice with anchovies & sambal',
                'price' => 28000,
                'category' => 'noodles-rice',
                'is_available' => true,
                'is_spicy' => true,
                'is_vegetarian' => false,
                'preparation_time' => 15,
            ],
            // Add more items here (5-10 total for testing)
            // Example:
            [
                'id' => '3',
                'name' => 'Sate Ayam',
                'description' => 'Grilled chicken skewers with peanut sauce',
                'price' => 35000,
                'category' => 'appetizers',
                'is_available' => true,
                'is_spicy' => false,
                'is_vegetarian' => false,
                'preparation_time' => 20,
            ],
            // ...
        ];

        // Transform to camelCase for frontend
        $transformedItems = array_map(function ($item) {
            return [
                'id' => $item['id'],
                'name' => $item['name'],
                'description' => $item['description'],
                'price' => $item['price'],
                'category' => $item['category'],
                'isAvailable' => $item['is_available'],
                'isSpicy' => $item['is_spicy'],
                'isVegetarian' => $item['is_vegetarian'],
                'preparationTime' => $item['preparation_time'],
            ];
        }, $menuItems);

        return response()->json(['data' => $transformedItems]);
    }
}