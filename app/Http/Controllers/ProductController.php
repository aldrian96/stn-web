<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $dataIncinerator = [
        [
            'name' => 'AG 50',
            'description' => 'Cocok untuk Wilayah: Rumah Tangga, Villa/Kantor, Restoran',
            'image_preview_path' => '/img/ag50.jpeg',
            'kapasitas_pembakaran' => [
                'Lama Pembakaran: 5-8 jam/hari',
                'Daya Bakar: 50 kg/jam',
                'Temperatur: 600 C',
            ],
            'spesifikasi' => [
                "Bahan Bakar Air : 500 m/jam",
                "Dapat PLC/Aplikasi Android berbasis IoT : Optional",
                "Jenis Sampah : Domestik, Kering dan Basah",

            ],
            'material' => [
                "Bata Api Isolasi",
                "Semen tahan Api",
                "Serabut Isolasi",
                "Plat baja di cat",
                "Besi schadul",
                "Aksesisoris Standar Boiler",
                "Stainliestil (optional)",
                "Pemantik manual dan auto(optional)",
            ],
            'garansi' => [
                'Garansi 6 Bulan - 750 jam (Elektrikal)',
                '1 Tahun - 1500 jam',
            ],
            'cocok_untuk_wilayah' => [
                "Rumah tangga",
                "Villa/Kantor",
                "Kos-kostan",
                "Restoran",
                "Kapal ferry",
            ],
            'price' => '500.000.000'
        ],
        [
            'name' => 'AG 100',
            'description' => 'Cocok untuk Wilayah: Rumah Tangga, Villa/Kantor, Restoran',
            'image_preview_path' => '/img/ag100.png',
            'kapasitas_pembakaran' => [
                'Lama Pembakaran: 5-8 jam/hari',
                'Daya Bakar: 50 kg/jam',
                'Temperatur: 600 C',
            ],
            'spesifikasi' => [
                "Bahan Bakar Air : 1000 m/jam",
                "Dapat PLC/Aplikasi Android berbasis IoT : Optional",
                "Jenis Sampah : Domestik, Kering dan Basah",
            ],
            'material' => [
                "Bata Api Isolasi",
                "Semen tahan Api",
                "Serabut Isolasi",
                "Plat baja di cat",
                "Besi schadul",
                "Aksesisoris Standar Boiler",
                "Stainliestil (optional)",
                "Pemantik manual dan auto(optional)",
            ],
            'garansi' => [
                'Garansi 6 Bulan - 750 jam (Elektrikal)',
                '1 Tahun - 1500 jam'
            ],
            'cocok_untuk_wilayah' => [
                "Cluster Perumahan",
                "RT dan RW",
                "Penginapan atau Hotel",
                "Tempat Wisata",
            ],
            'price' => '750.000.000'
        ],
        [
            'name' => 'AG 300',
            'description' => 'Cocok untuk Wilayah: Rumah Tangga, Villa/Kantor, Restoran',
            'image_preview_path' => '/img/ag300.png',
            'kapasitas_pembakaran' => [
                'Lama Pembakaran: 5-8 jam/hari',
                'Daya Bakar: 50 kg/jam',
                'Temperatur: 600 C',
            ],
            'spesifikasi' => [
                "Bahan Bakar Air : 3000 m/jam",
                "Dapat PLC/Aplikasi Android berbasis IoT : Optional",
                "Jenis Sampah : Domestik, Kering dan Basah",
            ],
            'material' => [
                "Bata Api Isolasi",
                "Semen tahan Api",
                "Serabut Isolasi",
                "Plat baja di cat",
                "Besi schadul",
                "Aksesisoris Standar Boiler",
                "Stainliestil (optional)",
                "Pemantik manual dan auto(optional)",

            ],
            'garansi' => [
                'Garansi 6 Bulan - 750 jam (Elektrikal)',
                '1 Tahun - 1500 jam'
            ],
            'cocok_untuk_wilayah' => [
                "Rest Area",
                "Cluster besar",
                "Desa",
                "Pesantren",
                "Apartement",
                "Stasiun dan Terminal",
                "TPS3R dan TPST",
            ],
            'price' => '800.000.000'
        ],
    ];
    public function showIncinerator(Request $request, $id = 0)
    {
        $data = $this->dataIncinerator[$request->id ?? $id];

        $whatsappMessage = "Halo saya tertarik membeli " . $data['name'];
        $encodedMessage = urlencode($whatsappMessage);

        $whatsappLink = "https://wa.me/628129903131?text=" . $encodedMessage;
        $data['whatsapp_link'] = $whatsappLink;
        return view('incinerator', ['data' => $data]);
    }
}
