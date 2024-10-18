<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlets
{
    use HasFactory;

    public static function all() {
        return collect([
            (object) [
                'nama' => 'Kenes Bakpia Resto Bakery, Jl. Magelang',
                'alamat' => 'Jl. Magelang No.KM 5,5, Kec. Mlati, Yogyakarta',
                'jamBuka' => 'Senin-Minggu, 06.00-22.00 WIB',
                'nomorTelepon' => '+62 274 5015666',
                'rating' => 4.4,
                'image' => 'magelang.jpg',
                'linkMaps' => 'https://www.google.com/maps/search/?api=1&query=Kenes+Bakpia+Resto+Bakery+Jl.+Magelang+No.KM+5,5,+Kec.+Mlati',
            ],
            (object) [
                'nama' => 'KENES FACTORY, Jl. Wijaya Kusuma',
                'alamat' => 'Jl. Wijaya Kusuma No.307, Kec. Mlati, Yogyakarta',
                'jamBuka' => 'Senin-Minggu, 06.00-21.00 WIB',
                'nomorTelepon' => '+62 274 541074',
                'rating' => 4.6,
                'image' => 'wijayakusuma.jpg',
                'linkMaps' => 'https://www.google.com/maps/search/?api=1&query=KENES+FACTORY+Jl.+Wijaya+Kusuma+No.307,+Kec.+Mlati',
            ],
            (object) [
                'nama' => 'Kenes Bakery, Jl. Kabupaten',
                'alamat' => 'Jl. Kabupaten No.Km 3, Kec. Gamping, Yogyakarta',
                'jamBuka' => 'Senin-Minggu, 06.00-21.00 WIB',
                'nomorTelepon' => '+62 813-3325-2333',
                'rating' => 4.6,
                'image' => 'kabupaten.jpg',
                'linkMaps' => 'https://www.google.com/maps/search/?api=1&query=Kenes+Bakery+Jl.+Kabupaten+No.Km+3,+Kec.+Gamping',
            ],
            (object) [
                'nama' => 'Kenes Bakery, RS Panti Rapih',
                'alamat' => 'Jl. Sagan, Kec. Caturtunggal, Yogyakarta',
                'jamBuka' => 'Senin-Minggu, 08.00-19.00 WIB',
                'nomorTelepon' => '+62 878-7761-6777',
                'rating' => 4.6,
                'image' => 'pantirapih.jpg',
                'linkMaps' => 'https://www.google.com/maps/search/?api=1&query=Kenes+Bakery+RS+Panti+Rapih+Jl.+Sagan,+Kec.+Caturtunggal',
            ],
            (object) [
                'nama' => 'Kenes Bakery & Resto, Godean',
                'alamat' => 'Jl. Godean No.9, Kec. Godean, Yogyakarta',
                'jamBuka' => 'Senin-Minggu, 06.00-19.00 WIB',
                'nomorTelepon' => '+62 878-3929-5999',
                'rating' => 4.6,
                'image' => 'godean.jpg',
                'linkMaps' => 'https://www.google.com/maps/search/?api=1&query=Kenes+Bakery+%26+Resto+Jl.+Godean+No.9,+Kec.+Godean',
            ],
            (object) [
                'nama' => 'Kenes Bakery, RS UII',
                'alamat' => 'Jl. Srandakan, Kec. Bantul, Yogyakarta',
                'jamBuka' => 'Senin-Minggu, 06.00-21.00 WIB, Minggu Tutup',
                'nomorTelepon' => '+62 877-8555-0222',
                'rating' => 5.0,
                'image' => 'srandakan.jpg',
                'linkMaps' => 'https://www.google.com/maps/search/?api=1&query=Kenes+Bakery+RS+UII+Jl.+Srandakan,+Kec.+Bantul',
            ],
            (object) [
                'nama' => 'Kenes Kopitiam & Bakery, Kusumanegara',
                'alamat' => 'Jl. Kusumanegara No.70, Kec. Umbulharjo, Yogyakarta',
                'jamBuka' => 'Senin-Minggu, 06.00-21.00 WIB',
                'nomorTelepon' => '+62 819-3003-0333',
                'rating' => 4.5,
                'image' => 'kusumanegara.jpg',
                'linkMaps' => 'https://www.google.com/maps/search/?api=1&query=Kenes+Kopitiam+%26+Bakery+Jl.+Kusumanegara+No.70,+Kec.+Umbulharjo',
            ],
            (object) [
                'nama' => 'Parsley Bakery, Laksda Adisucipto',
                'alamat' => 'Jl. Laksda Adisucipto No.Km.6, Kec. Depok, Yogyakarta',
                'jamBuka' => 'Senin-Minggu, 07.00-21.00 WIB',
                'nomorTelepon' => '+62 274 2806953',
                'rating' => 4.6,
                'image' => 'adisucipto.jpg',
                'linkMaps' => 'https://www.google.com/maps/search/?api=1&query=Parsley+Bakery+Jl.+Laksda+Adisucipto+No.Km.6,+Kec.+Depok',
            ],
            (object) [
                'nama' => 'Kenes Kopitiam & Bakery, Gejayan',
                'alamat' => 'Jl. Affandi No.15, Kec. Depok, Yogyakarta',
                'jamBuka' => 'Senin-Minggu, 06.00-21.00 WIB',
                'nomorTelepon' => '+62 857-1231-7171',
                'rating' => 4.5,
                'image' => 'affandi.jpg',
                'linkMaps' => 'https://www.google.com/maps/search/?api=1&query=Kenes+Kopitiam+%26+Bakery+Jl.+Affandi+No.15,+Kec.+Depok',
            ],
        ]);


    }
}
