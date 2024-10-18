<?php

namespace App\Models;

use App\Models\ProductData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product
{
    use HasFactory;

    public static function all(){


        // Urutkan berdasarkan ID
        $sortedProducts = ProductData::all()->sortBy('id_kategori')->values();

        // Update ID agar berurutan
        foreach ($sortedProducts as $index => $product) {
            $product->id = $index + 1; // Mulai dari 1
        }

        return $sortedProducts;

    }

    public static function paginate($page, $perPage, $data)
    {
        // Tentukan offset
        $offset = ($page - 1) * $perPage;

        // Ambil semua data dan ubah menjadi array
        $allProducts = $data->toArray();

        // Potong data sesuai dengan halaman dan jumlah item per halaman
        $paginatedProducts = array_slice($allProducts, $offset, $perPage);

        // Hitung total produk dan halaman
        $totalProducts = count($allProducts);
        $totalPages = ceil($totalProducts / $perPage);

        // Return data produk yang dipaginasi beserta informasi halaman
        return [
            'data' => $paginatedProducts,
            'current_page' => $page,
            'total_pages' => $totalPages,
            'total_products' => $totalProducts,
        ];
    }
    public static function find($slug)
    {
        return static::all()->firstWhere('nama', $slug);
    }

    public static function search($data, $key){

        $product = static::all();

        // Filter the products where 'nama' matches the search criteria
        $product = $product->filter(function ($item) use ($data, $key) {
            return stripos($item->$key  , $data) !== false; // Perform case-insensitive search
        });

        return $product;
    }

}
