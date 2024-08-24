<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $dataIncinerator = [
        [
            'name' => 'AG 50',
            'description' => 'Cocok untuk Wilayah: Rumah Tangga, Villa/Kantor, Restoran',
            'image_preview_path' => '',
            'capacity' => [
                'Lama Pembakaran: 5-8 jam/hari',
                'Daya Bakar: 50 kg/jam',
                'Temperatur: 600 C',
            ],
            'specification' => [
                'Bahan Bakar Air',
                'Dapat PLC/Aplikasi Android berbasis IoT',
                'Jenis Sampah'
            ],
            'additional_information' => [
                'Garansi 6 Bulan - 750 jam (Elektrikal)',
                '1 Tahun - 1500 jam',
            ],
            'price' => '500.000.000'
        ],
        [
            'name' => 'AG 100',
            'description' => 'Cocok untuk Wilayah: Rumah Tangga, Villa/Kantor, Restoran',
            'image_preview_path' => '',
            'capacity' => [
                'Lama Pembakaran: 5-8 jam/hari',
                'Daya Bakar: 50 kg/jam',
                'Temperatur: 600 C',
            ],
            'specification' => [
                'Bahan Bakar Air',
                'Dapat PLC/Aplikasi Android berbasis IoT',
                'Jenis Sampah'
            ],
            'additional_information' => [
                'Garansi 6 Bulan - 750 jam (Elektrikal)',
                '1 Tahun - 1500 jam'
            ],
            'price' => '750.000.000'
        ],
        [
            'name' => 'AG 300',
            'description' => 'Cocok untuk Wilayah: Rumah Tangga, Villa/Kantor, Restoran',
            'image_preview_path' => '',
            'capacity' => [
                'Lama Pembakaran: 5-8 jam/hari',
                'Daya Bakar: 50 kg/jam',
                'Temperatur: 600 C',
            ],
            'specification' => [
                'Bahan Bakar Air',
                'Dapat PLC/Aplikasi Android berbasis IoT',
                'Jenis Sampah'
            ],
            'additional_information' => [
                'Garansi 6 Bulan - 750 jam (Elektrikal)',
                '1 Tahun - 1500 jam'
            ],
            'price' => '800.000.000'
        ],
    ];
    public function showIncinerator(Request $request, $id = 0)
    {
        $data = $this->dataIncinerator[$request->id ?? $id];
        // dd($data);
        return view('incinerator', ['data' => $data]);
    }
}
