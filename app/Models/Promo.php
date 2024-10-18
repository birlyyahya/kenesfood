<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo
{
    use HasFactory;

    protected $table = null;

    public static function all()
    {
        return collect([
            (object) [
                'id' => 1,
                'name' => 'Promo 1',
                'slug' => 'promo-1',
                'discount' => '10%',
                'description' => 'Claim kupon dengan unduh aplikasi',
                'ketentuan' => 'Promo hanya berlaku untuk pengguna mobil',
                'periode' => '19-12 Oktober',
                'image' => 'storage/promo/1.png'
            ],
            (object) [
                'id' => 2,
                'name' => 'Promo 2',
                'slug' => 'promo-2',
                'discount' => '15%',
                'description' => 'Dapatkan diskon untuk setiap pembelian di atas 200k',
                'ketentuan' => 'Promo hanya berlaku untuk pengguna baru',
                'periode' => '1-31 Oktober',
                'image' => 'storage/promo/2.png'
            ],
            (object) [
                'id' => 3,
                'name' => 'Promo 3',
                'slug' => 'promo-3',
                'discount' => '20%',
                'description' => 'Potongan harga untuk member premium',
                'ketentuan' => 'Hanya berlaku untuk member premium',
                'periode' => '10-25 Oktober',
                'image' => 'storage/promo/3.png'
            ],
            (object) [
                'id' => 4,
                'name' => 'Promo 4',
                'slug' => 'promo-4',
                'discount' => '25%',
                'description' => 'Diskon spesial untuk pelanggan lama',
                'ketentuan' => 'Hanya berlaku untuk pelanggan yang telah berbelanja lebih dari 5 kali',
                'periode' => '5-20 November',
                'image' => 'storage/promo/4.png'
            ],
            (object) [
                'id' => 5,
                'name' => 'Promo 5',
                'slug' => 'promo-5',
                'discount' => '30%',
                'description' => 'Promo akhir tahun dengan diskon besar-besaran',
                'ketentuan' => 'Berlaku untuk semua produk, tanpa minimal pembelian',
                'periode' => '15 November - 31 Desember',
                'image' => 'storage/promo/5.png'
            ],
            (object) [
                'id' => 6,
                'name' => 'Promo 6',
                'slug' => 'promo-6',
                'discount' => '35%',
                'description' => 'Promo eksklusif untuk pengguna kartu kredit',
                'ketentuan' => 'Hanya berlaku untuk pembayaran menggunakan kartu kredit',
                'periode' => '1-15 Desember',
                'image' => 'storage/promo/6.png'
            ]

        ]);
    }
    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }

}
