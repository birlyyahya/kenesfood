<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category
{
    use HasFactory;

    protected $table = null;

    Public static function all(){
        return collect([
            (object) [
                'id' => 1,
                'name' => 'BAKPIA',
                'slug' => 'bakpia',
                'description' => 'Kue khas Yogyakarta yang terbuat dari adonan tepung terigu dengan berbagai isian manis.',
                'image' => 'bakpia.png', // Ganti dengan path gambar bakpia
            ],
            (object) [
                'id' => 2,
                'name' => 'ROTI PREMIUM',
                'slug' => 'roti-premium',
                'description' => 'Roti berkualitas tinggi dengan berbagai varian rasa dan tekstur yang lezat.',
                'image' => 'premium.png', // Ganti dengan path gambar roti premium
            ],
            (object) [
                'id' => 3,
                'name' => 'TRADITIONAL CAKE',
                'slug' => 'traditional-cake',
                'description' => 'Kue tradisional yang terbuat dari bahan-bahan alami dengan resep turun temurun.',
                'image' => 'traditionalcake.png', // Ganti dengan path gambar kue tradisional
            ],
            (object) [
                'id' => 4,
                'name' => 'DANISH & PASTRY',
                'slug' => 'danish-pastry',
                'description' => 'Pastry yang renyah dan lembut dengan berbagai isian yang menggoda selera.',
                'image' => 'danish.png', // Ganti dengan path gambar pastry
            ],
            (object) [
                'id' => 5,
                'name' => 'ROTI KERING',
                'slug' => 'roti-kering',
                'description' => 'Roti yang memiliki tekstur kering, cocok untuk camilan sehari-hari.',
                'image' => 'rotikering.png', // Ganti dengan path gambar roti kering
            ],
            (object) [
                'id' => 6,
                'name' => 'DESSERT',
                'slug' => 'dessert',
                'description' => 'Berbagai jenis hidangan penutup yang manis dan nikmat.',
                'image' => 'dessert.png', // Ganti dengan path gambar dessert
            ],
            (object) [
                'id' => 7,
                'name' => 'TART',
                'slug' => 'tart',
                'description' => 'Kue tart yang dibuat dengan dasar pastry dan isian yang beragam.',
                'image' => 'tart.png', // Ganti dengan path gambar tart
            ],
            (object) [
                'id' => 8,
                'name' => 'PUDDING',
                'slug' => 'pudding',
                'description' => 'Hidangan penutup lembut yang terbuat dari susu dan bahan lainnya.',
                'image' => 'pudding.png', // Ganti dengan path gambar pudding
            ],
        ]);
    }
    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }
}
