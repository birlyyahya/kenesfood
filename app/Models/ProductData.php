<?php

namespace App\Models;


class ProductData
{
    public static function all()
    {
        return collect([
            (object) [
                'id' => 1,
                'nama' => 'Bakpia Kuno Kini',
                'slug' => 'bakpia-kuno-kini',
                'harga' => 'Rp 49,000',
                'komposisi' => 'Tepung terigu, gula, minyak sayur, butter, cokelat, keju, pasta/bubuk rasa',
                'isi' => '20 pcs dalam 1 box',
                'beratBersih' => '300 gram',
                'masaSimpan' => '11 hari',
                'image' => '',
                'id_kategori' => 1,
            ],
            (object) [
                'id' => 2,
                'nama' => 'Bakpia Premium',
                'harga' => 'Rp 35,000',
                'komposisi' => 'Tepung terigu, gula, minyak sayur, butter, cokelat, keju, pasta/bubuk rasa',
                'isi' => '12 varian rasa dalam 1 box',
                'beratBersih' => '250 gram',
                'masaSimpan' => '11 hari',
                'image' => '',
                'id_kategori' => 1,
            ],
            (object) [
                'id' => 3,
                'nama' => 'Bakpia Mini',
                'harga' => 'Rp 19,000',
                'komposisi' => 'Terigu, minyak sayur, gula, butter, cokelat, keju, pasta/bubuk rasa',
                'isi' => '5 pcs dalam 1 box',
                'beratBersih' => '125 gram (estimasi)',
                'masaSimpan' => '11 hari',
                'image' => '',
                'id_kategori' => 1,
            ],
            (object) [
                'id' => 4,
                'nama' => 'Bigpia (Bakpia Super Premium)',
                'harga' => 'Rp 35,000',
                'komposisi' => 'Terigu, minyak sayur, gula, butter, cokelat, keju, pasta/bubuk rasa',
                'isi' => '1 pcs dalam 1 box (ukuran lebih besar)',
                'beratBersih' => '200 gram (estimasi)',
                'masaSimpan' => '11 hari',
                'image' => '',
                'id_kategori' => 1,
            ],
            (object) [
                'id' => 1,
                'nama' => 'Banana Choco Cheese',
                'harga' => 'Rp 10,000',
                'komposisi' => 'Tepung terigu, pisang, cokelat, keju',
                'isi' => '1 pcs',
                'beratBersih' => '100 gram',
                'masaSimpan' => '3 hari',
                'image' => 'banana-choco-cheese.png',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 2,
                'nama' => 'Banana Spiral',
                'harga' => 'Rp 10,000',
                'komposisi' => 'Tepung terigu, pisang, gula, ragi',
                'isi' => '1 pcs',
                'beratBersih' => '100 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 3,
                'nama' => 'Beef Floss Special',
                'harga' => 'Rp 12,500',
                'komposisi' => 'Tepung terigu, daging sapi, bumbu',
                'isi' => '1 pcs',
                'beratBersih' => '100 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 4,
                'nama' => 'Blueberry Ice',
                'harga' => 'Rp 7,300',
                'komposisi' => 'Tepung terigu, blueberry, krim',
                'isi' => '1 pcs',
                'beratBersih' => '80 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 5,
                'nama' => 'Braid Ovomaltine',
                'harga' => 'Rp 8,500',
                'komposisi' => 'Tepung terigu, ovomaltine, gula',
                'isi' => '1 pcs',
                'beratBersih' => '90 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 6,
                'nama' => 'Cheese Banana',
                'harga' => 'Rp 14,000',
                'komposisi' => 'Tepung terigu, pisang, keju',
                'isi' => '1 pcs',
                'beratBersih' => '100 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 7,
                'nama' => 'Cheese Late',
                'harga' => 'Rp 9,200',
                'komposisi' => 'Tepung terigu, keju, gula',
                'isi' => '1 pcs',
                'beratBersih' => '90 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 8,
                'nama' => 'Cheese Puff Special',
                'harga' => 'Rp 8,200',
                'komposisi' => 'Tepung terigu, keju, mentega',
                'isi' => '1 pcs',
                'beratBersih' => '80 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 9,
                'nama' => 'Cheese Sausage',
                'harga' => 'Rp 15,500',
                'komposisi' => 'Tepung terigu, sosis, keju',
                'isi' => '1 pcs',
                'beratBersih' => '100 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 10,
                'nama' => 'Chicken Classic',
                'harga' => 'Rp 7,200',
                'komposisi' => 'Tepung terigu, daging ayam, bumbu',
                'isi' => '1 pcs',
                'beratBersih' => '100 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 11,
                'nama' => 'Choco Cappucino',
                'harga' => 'Rp 7,700',
                'komposisi' => 'Tepung terigu, cokelat, kopi',
                'isi' => '1 pcs',
                'beratBersih' => '90 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 12,
                'nama' => 'Choco Cheese Bread',
                'harga' => 'Rp 8,200',
                'komposisi' => 'Tepung terigu, cokelat, keju',
                'isi' => '1 pcs',
                'beratBersih' => '100 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 13,
                'nama' => 'Choco Mousse',
                'harga' => 'Rp 9,000',
                'komposisi' => 'Tepung terigu, cokelat, krim',
                'isi' => '1 pcs',
                'beratBersih' => '80 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 14,
                'nama' => 'Choco Stripe Puff',
                'harga' => 'Rp 8,200',
                'komposisi' => 'Tepung terigu, cokelat, mentega',
                'isi' => '1 pcs',
                'beratBersih' => '80 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 15,
                'nama' => 'Choco Twin',
                'harga' => 'Rp 7,500',
                'komposisi' => 'Tepung terigu, cokelat',
                'isi' => '1 pcs',
                'beratBersih' => '90 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 16,
                'nama' => 'Chocolate Banana',
                'harga' => 'Rp 12,600',
                'komposisi' => 'Tepung terigu, cokelat, pisang',
                'isi' => '1 pcs',
                'beratBersih' => '100 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 17,
                'nama' => 'Chocolate Bread',
                'harga' => 'Rp 7,300',
                'komposisi' => 'Tepung terigu, cokelat',
                'isi' => '1 pcs',
                'beratBersih' => '90 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 18,
                'nama' => 'Chocolate Crunchy',
                'harga' => 'Rp 7,300',
                'komposisi' => 'Tepung terigu, cokelat, kacang',
                'isi' => '1 pcs',
                'beratBersih' => '90 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 2,
            ],
            (object) [
                'id' => 1,
                'nama' => 'Brownies Kukus Pandan Coklat',
                'harga' => 'Rp 75,000',
                'komposisi' => 'Tepung terigu, cokelat, pandan',
                'isi' => '1 pcs',
                'beratBersih' => '500 gram',
                'masaSimpan' => '3 hari',
                'image' => 'brownies-kukus-pandan-coklat.png',
                'id_kategori' => 3,
            ],
            (object) [
                'id' => 2,
                'nama' => 'Brownies Kukus Coklat',
                'harga' => 'Rp 75,000',
                'komposisi' => 'Tepung terigu, cokelat, gula',
                'isi' => '1 pcs',
                'beratBersih' => '500 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 3,
            ],
            (object) [
                'id' => 3,
                'nama' => 'Brownies Pangggang Coklat',
                'harga' => 'Rp 85,000',
                'komposisi' => 'Tepung terigu, cokelat, gula',
                'isi' => '1 pcs',
                'beratBersih' => '500 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 3,
            ],
            (object) [
                'id' => 4,
                'nama' => 'Chiffon',
                'harga' => 'Rp 43,000',
                'komposisi' => 'Tepung terigu, gula, telur',
                'isi' => '1 pcs',
                'beratBersih' => '400 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 3,
            ],
            (object) [
                'id' => 5,
                'nama' => 'Chiffon Extra Topping',
                'harga' => 'Rp 72,000',
                'komposisi' => 'Tepung terigu, gula, telur, topping',
                'isi' => '1 pcs',
                'beratBersih' => '400 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 3,
            ],
            (object) [
                'id' => 6,
                'nama' => 'Chiffon Full Topping',
                'harga' => 'Rp 77,000',
                'komposisi' => 'Tepung terigu, gula, telur, full topping',
                'isi' => '1 pcs',
                'beratBersih' => '400 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 3,
            ],
            (object) [
                'id' => 7,
                'nama' => 'Duo Mix Cake',
                'harga' => 'Rp 63,000',
                'komposisi' => 'Tepung terigu, gula, telur, campuran rasa',
                'isi' => '1 pcs',
                'beratBersih' => '500 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 3,
            ],
            (object) [
                'id' => 8,
                'nama' => 'Duo Mix Roll Chocolate & Cheese',
                'harga' => 'Rp 95,000',
                'komposisi' => 'Tepung terigu, cokelat, keju',
                'isi' => '1 pcs',
                'beratBersih' => '500 gram',
                'masaSimpan' => '3 hari',
                'image' => 'duo-mix-roll-chocolate-cheese.png',
                'id_kategori' => 3,
            ],
            (object) [
                'id' => 9,
                'nama' => 'Lapis Surabaya Coklat',
                'harga' => 'Rp 58,000',
                'komposisi' => 'Tepung terigu, cokelat, telur',
                'isi' => '1 pcs',
                'beratBersih' => '400 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 3,
            ],
            (object) [
                'id' => 10,
                'nama' => 'Lapis Talas',
                'harga' => 'Rp 58,000',
                'komposisi' => 'Tepung terigu, talas, keju',
                'isi' => '1 pcs',
                'beratBersih' => '400 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 3,
            ],
            (object) [
                'id' => 11,
                'nama' => 'Marmer Pandan',
                'harga' => 'Rp 52,000',
                'komposisi' => 'Tepung terigu, pandan, varian rasa',
                'isi' => '1 pcs',
                'beratBersih' => '300 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 3,
            ],
            (object) [
                'id' => 12,
                'nama' => 'Muffin Belgian Chocolate',
                'harga' => 'Rp 52,000',
                'komposisi' => 'Tepung terigu, cokelat, gula',
                'isi' => '1 pcs',
                'beratBersih' => '100 gram',
                'masaSimpan' => '3 hari',
                'image' => '',
                'id_kategori' => 3,
            ],
            (object) [
                'id' => 1,
                'nama' => 'Almond Cookies',
                'harga' => 'Rp 58,000',
                'komposisi' => 'Tepung terigu, almond, gula, butter',
                'isi' => '1 box (15 pcs)',
                'beratBersih' => '250 gram',
                'masaSimpan' => '14 hari',
                'id_kategori' => 5,
                'image' => '', // tambahkan URL image di sini
            ],
            (object) [
                'id' => 2,
                'nama' => 'Bagelen',
                'harga' => 'Rp 42,000',
                'komposisi' => 'Tepung terigu, gula, butter',
                'isi' => '1 box (10 pcs)',
                'beratBersih' => '250 gram',
                'masaSimpan' => '30 hari',
                'id_kategori' => 5,
                'image' => '', // tambahkan URL image di sini
            ],
            (object) [
                'id' => 3,
                'nama' => 'Bolu Panggang',
                'harga' => 'Rp 68,000',
                'komposisi' => 'Tepung terigu, gula, telur, butter',
                'isi' => '1 box (8 pcs)',
                'beratBersih' => '300 gram',
                'masaSimpan' => '7 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 5,
            ],
            (object) [
                'id' => 4,
                'nama' => 'Button Cookies',
                'harga' => 'Rp 35,000',
                'komposisi' => 'Tepung terigu, gula, butter, choco chips',
                'isi' => '1 box (15 pcs)',
                'beratBersih' => '250 gram',
                'masaSimpan' => '14 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 5,
            ],
            (object) [
                'id' => 5,
                'nama' => 'Candy Cookies',
                'harga' => 'Rp 32,000',
                'komposisi' => 'Tepung terigu, gula, butter, candy',
                'isi' => '1 box (15 pcs)',
                'beratBersih' => '250 gram',
                'masaSimpan' => '14 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 5,
            ],
            (object) [
                'id' => 6,
                'nama' => 'Chocotime',
                'harga' => 'Rp 42,000',
                'komposisi' => 'Tepung terigu, cokelat, butter',
                'isi' => '1 box (15 pcs)',
                'beratBersih' => '250 gram',
                'masaSimpan' => '14 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 5,
            ],
            (object) [
                'id' => 7,
                'nama' => 'Crunchy Oatmeal Cookies',
                'harga' => 'Rp 42,000',
                'komposisi' => 'Oatmeal, tepung terigu, gula, butter',
                'isi' => '1 box (10 pcs)',
                'beratBersih' => '250 gram',
                'masaSimpan' => '14 hari',
                'image' => 'crunchy-oatmeal-cookies.png', // tambahkan URL image di sini
                'id_kategori' => 5,
            ],
            (object) [
                'id' => 8,
                'nama' => 'Crunchy Fruits Pie',
                'harga' => 'Rp 65,000',
                'komposisi' => 'Tepung terigu, buah kering, gula',
                'isi' => '1 box (6 pcs)',
                'beratBersih' => '300 gram',
                'masaSimpan' => '14 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 5,
            ],
            (object) [
                'id' => 9,
                'nama' => 'French Meringue Kisses Strawberry',
                'harga' => 'Rp 32,000',
                'komposisi' => 'Putih telur, gula, strawberry',
                'isi' => '1 box (12 pcs)',
                'beratBersih' => '200 gram',
                'masaSimpan' => '7 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 5,
            ],
            (object) [
                'id' => 10,
                'nama' => 'Heart Cookies',
                'harga' => 'Rp 47,000',
                'komposisi' => 'Tepung terigu, gula, butter',
                'isi' => '1 box (15 pcs)',
                'beratBersih' => '250 gram',
                'masaSimpan' => '14 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 5,
            ],
            (object) [
                'id' => 11,
                'nama' => 'Kastengel',
                'harga' => 'Rp 92,000',
                'komposisi' => 'Tepung terigu, keju, butter',
                'isi' => '1 box (10 pcs)',
                'beratBersih' => '250 gram',
                'masaSimpan' => '14 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 5,
            ],
            (object) [
                'id' => 12,
                'nama' => 'Katetong Original',
                'harga' => 'Rp 42,000',
                'komposisi' => 'Tepung terigu, gula, butter',
                'isi' => '1 box (10 pcs)',
                'beratBersih' => '250 gram',
                'masaSimpan' => '30 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 5,
            ],
            (object) [
                'id' => 13,
                'nama' => 'Lemon Coin',
                'harga' => 'Rp 42,000',
                'komposisi' => 'Tepung terigu, lemon, gula',
                'isi' => '1 box (10 pcs)',
                'beratBersih' => '250 gram',
                'masaSimpan' => '14 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 5,
            ],
            (object) [
                'id' => 14,
                'nama' => 'Nastar',
                'harga' => 'Rp 82,000',
                'komposisi' => 'Tepung terigu, selai nanas, gula',
                'isi' => '1 box (10 pcs)',
                'beratBersih' => '250 gram',
                'masaSimpan' => '14 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 5,
            ],
            (object) [
                'id' => 15,
                'nama' => 'Palm Cheese',
                'harga' => 'Rp 85,000',
                'komposisi' => 'Tepung terigu, keju, gula',
                'isi' => '1 box (10 pcs)',
                'beratBersih' => '250 gram',
                'masaSimpan' => '14 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 5,
            ],
            (object) [
                'id' => 1,
                'nama' => 'Apple Cinnamon',
                'harga' => 'Rp 13,500',
                'komposisi' => 'Tepung terigu, apel, kayu manis',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 2,
                'nama' => 'Austrian Chicken',
                'harga' => 'Rp 13,500',
                'komposisi' => 'Tepung terigu, daging ayam, bumbu',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 3,
                'nama' => 'Austrian Sausage',
                'harga' => 'Rp 13,500',
                'komposisi' => 'Tepung terigu, sosis, bumbu',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 4,
                'nama' => 'Cheese Banana Danish',
                'harga' => 'Rp 13,500',
                'komposisi' => 'Tepung terigu, keju, pisang',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 5,
                'nama' => 'Cheese Finland',
                'harga' => 'Rp 13,500',
                'komposisi' => 'Tepung terigu, keju',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 6,
                'nama' => 'Cheese Velvet',
                'harga' => 'Rp 13,500',
                'komposisi' => 'Tepung terigu, keju',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 7,
                'nama' => 'Choco Banana Danish',
                'harga' => 'Rp 13,500',
                'komposisi' => 'Tepung terigu, cokelat, pisang',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 8,
                'nama' => 'Choco Finland',
                'harga' => 'Rp 11,500',
                'komposisi' => 'Tepung terigu, cokelat',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 9,
                'nama' => 'Classic Banana',
                'harga' => 'Rp 11,000',
                'komposisi' => 'Tepung terigu, pisang',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 10,
                'nama' => 'Classic Bluebrry',
                'harga' => 'Rp 10,500',
                'komposisi' => 'Tepung terigu, blueberry',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 11,
                'nama' => 'Classic Kiwi',
                'harga' => 'Rp 10,500',
                'komposisi' => 'Tepung terigu, kiwi',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 12,
                'nama' => 'Classic Strawberry',
                'harga' => 'Rp 10,500',
                'komposisi' => 'Tepung terigu, strawberry',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 13,
                'nama' => 'Croissant Telur Asin',
                'harga' => 'Rp 13,000',
                'komposisi' => 'Tepung terigu, telur asin',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 14,
                'nama' => 'Premium Choconuts',
                'harga' => 'Rp 11,000',
                'komposisi' => 'Tepung terigu, cokelat, kacang',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 15,
                'nama' => 'Premium Pandan',
                'harga' => 'Rp 10,500',
                'komposisi' => 'Tepung terigu, pandan',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 16,
                'nama' => 'Read Bean Danish',
                'harga' => 'Rp 10,500',
                'komposisi' => 'Tepung terigu, kacang merah',
                'isi' => '1 pcs',
                'beratBersih' => '200 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 4,
            ],
            (object) [
                'id' => 1,
                'nama' => 'Banoffee',
                'harga' => 'Rp 18,000',
                'komposisi' => 'Biskuit, pisang, krim, karamel',
                'isi' => '1 porsi',
                'beratBersih' => '150 gram',
                'masaSimpan' => '2 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 6,
            ],
            (object) [
                'id' => 2,
                'nama' => 'Vanilla Mango',
                'harga' => 'Rp 23,000',
                'komposisi' => 'Mango, krim vanilla',
                'isi' => '1 porsi',
                'beratBersih' => '150 gram',
                'masaSimpan' => '2 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 6,
            ],
            (object) [
                'id' => 3,
                'nama' => 'Mille Crêpes Blueberry Cheese',
                'harga' => 'Rp 25,000',
                'komposisi' => 'Crepes, blueberry, keju, krim',
                'isi' => '1 porsi',
                'beratBersih' => '150 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 6,
            ],
            (object) [
                'id' => 4,
                'nama' => 'Mille Crêpes Strawberry Cheese',
                'harga' => 'Rp 25,000',
                'komposisi' => 'Crepes, strawberry, keju, krim',
                'isi' => '1 porsi',
                'beratBersih' => '150 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 6,
            ],
            (object) [
                'id' => 5,
                'nama' => 'Thai Milk Bun Choco',
                'harga' => 'Rp 27,000',
                'komposisi' => 'Roti lembut, cokelat',
                'isi' => '1 porsi',
                'beratBersih' => '150 gram',
                'masaSimpan' => '2 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 6,
            ],
            (object) [
                'id' => 6,
                'nama' => 'Thai Milk Bun Blueberry',
                'harga' => 'Rp 27,000',
                'komposisi' => 'Roti lembut, blueberry',
                'isi' => '1 porsi',
                'beratBersih' => '150 gram',
                'masaSimpan' => '2 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 6,
            ],
            (object) [
                'id' => 7,
                'nama' => 'Creme Brulee',
                'harga' => 'Rp 30,000',
                'komposisi' => 'Krim, gula, vanila',
                'isi' => '1 porsi',
                'beratBersih' => '150 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 6,
            ],
            (object) [
                'id' => 8,
                'nama' => 'Panna Cotta',
                'harga' => 'Rp 28,000',
                'komposisi' => 'Krim, gula, gelatin',
                'isi' => '1 porsi',
                'beratBersih' => '150 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 6,
            ],
            (object) [
                'id' => 9,
                'nama' => 'Tiramisu',
                'harga' => 'Rp 32,000',
                'komposisi' => 'Biskuit, kopi, krim, cokelat',
                'isi' => '1 porsi',
                'beratBersih' => '150 gram',
                'masaSimpan' => '2 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 6,
            ],
            (object) [
                'id' => 10,
                'nama' => 'Cheesecake',
                'harga' => 'Rp 35,000',
                'komposisi' => 'Biskuit, krim keju, gula',
                'isi' => '1 porsi',
                'beratBersih' => '150 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 6,
            ],
            (object) [
                'id' => 1,
                'nama' => 'Cheese Special Cake',
                'harga' => 'Rp 185,000',
                'komposisi' => 'Biskuit, krim keju, gula',
                'isi' => 'Diameter 20 cm',
                'beratBersih' => '500 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 7,
            ],
            (object) [
                'id' => 2,
                'nama' => 'Choco Bulgari',
                'harga' => 'Rp 245,000',
                'komposisi' => 'Biskuit, cokelat, krim',
                'isi' => 'Diameter 20 cm',
                'beratBersih' => '500 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 7,
            ],
            (object) [
                'id' => 3,
                'nama' => 'Chocolate Special Cake',
                'harga' => 'Rp 185,000',
                'komposisi' => 'Biskuit, cokelat, krim',
                'isi' => 'Diameter 20 cm',
                'beratBersih' => '500 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 7,
            ],
            (object) [
                'id' => 4,
                'nama' => 'Chocolindt',
                'harga' => 'Rp 218,000',
                'komposisi' => 'Biskuit, cokelat, krim',
                'isi' => 'Diameter 20 cm',
                'beratBersih' => '500 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 7,
            ],
            (object) [
                'id' => 5,
                'nama' => 'Classic Blackforest',
                'harga' => 'Rp 195,000',
                'komposisi' => 'Biskuit, krim, ceri',
                'isi' => 'Diameter 20 cm',
                'beratBersih' => '500 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 7,
            ],
            (object) [
                'id' => 7,
                'nama' => 'Ganache Royaltine',
                'harga' => 'Rp 205,000',
                'komposisi' => 'Biskuit, ganache, cokelat',
                'isi' => 'Diameter 20 cm',
                'beratBersih' => '500 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 7,
            ],
            (object) [
                'id' => 8,
                'nama' => 'Ganache Sunrise',
                'harga' => 'Rp 205,000',
                'komposisi' => 'Biskuit, ganache, buah-buahan',
                'isi' => 'Diameter 20 cm',
                'beratBersih' => '500 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 7,
            ],
            (object) [
                'id' => 9,
                'nama' => 'Korean Flower Cake',
                'harga' => 'Rp 230,000',
                'komposisi' => 'Biskuit, krim, hiasan bunga',
                'isi' => 'Diameter 20 cm',
                'beratBersih' => '500 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 7,
            ],
            (object) [
                'id' => 10,
                'nama' => 'Royal Blackforest',
                'harga' => 'Rp 195,000',
                'komposisi' => 'Biskuit, krim, ceri',
                'isi' => 'Diameter 20 cm',
                'beratBersih' => '500 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 7,
            ],
            (object) [
                'id' => 2,
                'nama' => 'Edible Flowers',
                'harga' => 'Rp 55,000',
                'komposisi' => 'Pudding dengan motif bungan',
                'isi' => '1 porsi',
                'beratBersih' => '450 gram',
                'masaSimpan' => '20 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 8,
            ],
            (object) [
                'id' => 3,
                'nama' => 'French Fruits Pudding',
                'harga' => 'Rp 65,000',
                'komposisi' => 'Susu, buah-buahan, gula',
                'isi' => '1 porsi',
                'beratBersih' => '150 gram',
                'masaSimpan' => '3 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 8,
            ],
            (object) [
                'id' => 4,
                'nama' => 'Fresh Fruits Pudding',
                'harga' => 'Rp 65,000',
                'komposisi' => 'Pudding dengan varian buah',
                'isi' => '1 porsi',
                'beratBersih' => '450 gram',
                'masaSimpan' => '20 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 8,
            ],
            (object) [
                'id' => 5,
                'nama' => 'Pudding Buah Chocolate',
                'harga' => 'Rp 75,000',
                'komposisi' => 'Pudding buah dengan rasa coklat',
                'isi' => '1 porsi',
                'beratBersih' => '450 gram',
                'masaSimpan' => '20 hari',
                'image' => '', // tambahkan URL image di sini
                'id_kategori' => 8,
            ],

        ]);
    }
}
