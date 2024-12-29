<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomoditasController extends Controller
{
    public function getKomoditasData($id)
    {
        // Data harga komoditas berdasarkan provinsi
        $komoditasData = [
            'IDKI' => [ /* Kalimantan Timur */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '12,500/kg', 'update' => '17 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,000/liter', 'update' => '10 November 2024'],
                    ['name' => 'Cabai', 'harga' => '30,000/kg', 'update' => '15 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDKU' => [ /* North Kalimantan */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '13,000/kg', 'update' => '20 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '15,500/liter', 'update' => '18 November 2024'],
                    ['name' => 'Cabai', 'harga' => '32,000/kg', 'update' => '22 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDNT' => [ /* Nusa Tenggara Timur */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '14,500/kg', 'update' => '25 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '13,000/liter', 'update' => '22 November 2024'],
                    ['name' => 'Cabai', 'harga' => '28,000/kg', 'update' => '24 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDKB' => [ /* Kalimantan Barat */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '11,000/kg', 'update' => '19 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,500/liter', 'update' => '21 November 2024'],
                    ['name' => 'Cabai', 'harga' => '29,000/kg', 'update' => '23 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDPA' => [ /* Papua */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '15,000/kg', 'update' => '20 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '16,000/liter', 'update' => '18 November 2024'],
                    ['name' => 'Cabai', 'harga' => '35,000/kg', 'update' => '22 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDJI' => [ /* Jawa Timur */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '13,000/kg', 'update' => '15 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,200/liter', 'update' => '18 November 2024'],
                    ['name' => 'Cabai', 'harga' => '32,000/kg', 'update' => '20 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDMA' => [ /* Maluku */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '16,500/kg', 'update' => '10 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,300/liter', 'update' => '12 November 2024'],
                    ['name' => 'Cabai', 'harga' => '33,000/kg', 'update' => '14 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDNB' => [ /* Nusa Tenggara Barat */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '13,500/kg', 'update' => '19 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,800/liter', 'update' => '20 November 2024'],
                    ['name' => 'Cabai', 'harga' => '31,500/kg', 'update' => '21 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDSN' => [ /* Sulawesi Selatan */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '12,700/kg', 'update' => '24 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,200/liter', 'update' => '23 November 2024'],
                    ['name' => 'Cabai', 'harga' => '30,000/kg', 'update' => '25 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDJT' => [ /* Jawa Tengah */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '13,200/kg', 'update' => '18 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,500/liter', 'update' => '19 November 2024'],
                    ['name' => 'Cabai', 'harga' => '31,000/kg', 'update' => '20 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDJB' => [ /* Jawa Barat */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '12,800/kg', 'update' => '16 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '13,900/liter', 'update' => '17 November 2024'],
                    ['name' => 'Cabai', 'harga' => '30,500/kg', 'update' => '18 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDJK' => [ /* Jakarta Raya */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '14,000/kg', 'update' => '20 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,500/liter', 'update' => '22 November 2024'],
                    ['name' => 'Cabai', 'harga' => '32,500/kg', 'update' => '24 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDBT' => [ /* Banten */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '12,600/kg', 'update' => '23 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,200/liter', 'update' => '25 November 2024'],
                    ['name' => 'Cabai', 'harga' => '30,000/kg', 'update' => '26 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDYO' => [ /* Yogyakarta */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '13,200/kg', 'update' => '21 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,000/liter', 'update' => '22 November 2024'],
                    ['name' => 'Cabai', 'harga' => '31,500/kg', 'update' => '24 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDSG' => [ /* Sulawesi Tenggara */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '13,100/kg', 'update' => '19 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,600/liter', 'update' => '20 November 2024'],
                    ['name' => 'Cabai', 'harga' => '32,000/kg', 'update' => '21 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDPB' => [ /* Papua Barat */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '15,200/kg', 'update' => '15 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '16,300/liter', 'update' => '17 November 2024'],
                    ['name' => 'Cabai', 'harga' => '36,000/kg', 'update' => '19 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDST' => [ /* Sulawesi Tengah */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '12,800/kg', 'update' => '18 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,200/liter', 'update' => '20 November 2024'],
                    ['name' => 'Cabai', 'harga' => '30,800/kg', 'update' => '22 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDMU' => [ /* Maluku Utara */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '14,400/kg', 'update' => '21 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,600/liter', 'update' => '23 November 2024'],
                    ['name' => 'Cabai', 'harga' => '32,000/kg', 'update' => '25 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDKR' => [ /* Kepulauan Riau */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '11,500/kg', 'update' => '12 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '13,700/liter', 'update' => '14 November 2024'],
                    ['name' => 'Cabai', 'harga' => '29,500/kg', 'update' => '16 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDRI' => [ /* Riau */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '12,200/kg', 'update' => '17 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,000/liter', 'update' => '19 November 2024'],
                    ['name' => 'Cabai', 'harga' => '30,500/kg', 'update' => '21 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDGO' => [ /* Gorontalo */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '13,300/kg', 'update' => '22 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,700/liter', 'update' => '23 November 2024'],
                    ['name' => 'Cabai', 'harga' => '31,000/kg', 'update' => '25 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDSA' => [ /* Sulawesi Utara */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '12,600/kg', 'update' => '15 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,400/liter', 'update' => '17 November 2024'],
                    ['name' => 'Cabai', 'harga' => '29,800/kg', 'update' => '19 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDSR' => [ /* Sulawesi Barat */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '13,100/kg', 'update' => '24 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,500/liter', 'update' => '25 November 2024'],
                    ['name' => 'Cabai', 'harga' => '30,400/kg', 'update' => '26 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDJA' => [ /* Jambi */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '12,700/kg', 'update' => '10 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,300/liter', 'update' => '12 November 2024'],
                    ['name' => 'Cabai', 'harga' => '30,200/kg', 'update' => '14 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDSS' => [ /* Sumatera Selatan */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '13,400/kg', 'update' => '18 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,600/liter', 'update' => '20 November 2024'],
                    ['name' => 'Cabai', 'harga' => '31,200/kg', 'update' => '22 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDLA' => [ /* Lampung */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '12,900/kg', 'update' => '25 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,000/liter', 'update' => '27 November 2024'],
                    ['name' => 'Cabai', 'harga' => '30,300/kg', 'update' => '29 November 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDBE' => [ /* Bengkulu */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '13,200/kg', 'update' => '30 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,400/liter', 'update' => '2 December 2024'],
                    ['name' => 'Cabai', 'harga' => '31,500/kg', 'update' => '3 December 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDSB' => [ /* Sumatera Barat */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '14,000/kg', 'update' => '5 December 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,500/liter', 'update' => '7 December 2024'],
                    ['name' => 'Cabai', 'harga' => '32,000/kg', 'update' => '9 December 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDSU' => [ /* Sumatera Utara */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '13,000/kg', 'update' => '11 December 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,600/liter', 'update' => '12 December 2024'],
                    ['name' => 'Cabai', 'harga' => '30,900/kg', 'update' => '14 December 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDAC' => [ /* Aceh */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '15,000/kg', 'update' => '15 December 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '16,200/liter', 'update' => '17 December 2024'],
                    ['name' => 'Cabai', 'harga' => '35,000/kg', 'update' => '19 December 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDKT' => [ /* Kalimantan Tengah */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '12,400/kg', 'update' => '20 December 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,300/liter', 'update' => '22 December 2024'],
                    ['name' => 'Cabai', 'harga' => '29,700/kg', 'update' => '24 December 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDKS' => [ /* Kalimantan Selatan */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '13,300/kg', 'update' => '25 December 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,500/liter', 'update' => '27 December 2024'],
                    ['name' => 'Cabai', 'harga' => '31,100/kg', 'update' => '29 December 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDBA' => [ /* Bali */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '14,100/kg', 'update' => '30 November 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,700/liter', 'update' => '2 December 2024'],
                    ['name' => 'Cabai', 'harga' => '33,000/kg', 'update' => '4 December 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
            'IDBB' => [ /* Bangka-Belitung */
                'komoditas' => [
                    ['name' => 'Beras', 'harga' => '11,800/kg', 'update' => '5 December 2024'],
                    ['name' => 'Minyak Goreng', 'harga' => '14,000/liter', 'update' => '7 December 2024'],
                    ['name' => 'Cabai', 'harga' => '29,200/kg', 'update' => '9 December 2024'],
                    ['name' => 'Jagung', 'harga' => '10,000/kg', 'update' => '10 November 2024'],
                    ['name' => 'Sayur', 'harga' => '8,000/kg', 'update' => '18 November 2024'],
                    ['name' => 'Buah', 'harga' => '20,000/kg', 'update' => '20 November 2024'],
                ]
            ],
        ];        

        // Periksa apakah provinsi ada dalam data
        if (isset($komoditasData[$id])) {
            return response()->json($komoditasData[$id]);
        }

        return response()->json(['komoditas' => []]);
    }
}