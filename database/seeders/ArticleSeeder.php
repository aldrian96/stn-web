<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dummyData = [
            [
                "title" => "Mengurangi Sampah Plastik di Laut: Inisiatif Global dan Lokal",
                "author" => "Andi Wijaya",
                "body" => "Sampah plastik di laut menjadi masalah global yang memerlukan perhatian serius. Artikel ini membahas berbagai inisiatif, baik global maupun lokal, untuk mengurangi sampah plastik di laut dan dampaknya terhadap ekosistem laut."
            ],
            [
                "title" => "Pengelolaan Sampah Elektronik: Tantangan dan Solusi",
                "author" => "Rina Suryani",
                "body" => "Sampah elektronik atau e-waste menjadi masalah yang berkembang seiring dengan peningkatan penggunaan perangkat elektronik. Artikel ini mengeksplorasi tantangan dalam pengelolaan e-waste dan solusi yang dapat diterapkan untuk mengurangi dampaknya terhadap lingkungan."
            ],
            [
                "title" => "Mengolah Sampah Organik Menjadi Kompos: Praktik di Perkotaan",
                "author" => "Dewi Ratnasari",
                "body" => "Sampah organik dapat diolah menjadi kompos yang bermanfaat untuk pertanian dan penghijauan kota. Artikel ini membahas berbagai teknik pengomposan di perkotaan dan manfaatnya dalam mengurangi volume sampah yang dibuang ke TPA."
            ],
            [
                "title" => "Peran Teknologi dalam Pengelolaan Sampah: Dari Sensor hingga AI",
                "author" => "Hari Pratama",
                "body" => "Teknologi dapat memainkan peran penting dalam pengelolaan sampah yang lebih efisien. Artikel ini mengeksplorasi penggunaan teknologi seperti sensor dan kecerdasan buatan (AI) dalam memantau dan mengelola sampah secara real-time."
            ],
            [
                "title" => "Zero Waste Lifestyle: Mengurangi Sampah dari Rumah",
                "author" => "Siti Nuraini",
                "body" => "Gaya hidup Zero Waste semakin populer sebagai cara untuk mengurangi sampah dari sumbernya. Artikel ini memberikan tips praktis untuk memulai gaya hidup Zero Waste di rumah dan dampaknya terhadap lingkungan."
            ],
            [
                "title" => "Ekonomi Sirkular: Cara Efektif Mengatasi Masalah Sampah",
                "author" => "Ahmad Ramzi",
                "body" => "Ekonomi sirkular adalah pendekatan yang dapat mengurangi sampah dengan cara mendaur ulang dan menggunakan kembali produk. Artikel ini menjelaskan konsep ekonomi sirkular dan bagaimana implementasinya dapat membantu mengatasi masalah sampah."
            ],
            [
                "title" => "Inisiatif Komunitas dalam Mengurangi Sampah: Studi Kasus di Surabaya",
                "author" => "Yuni Astuti",
                "body" => "Komunitas memiliki peran penting dalam upaya pengelolaan sampah. Artikel ini menyoroti beberapa inisiatif yang telah dilakukan oleh komunitas di Surabaya untuk mengurangi sampah dan meningkatkan kesadaran lingkungan."
            ],
            [
                "title" => "Manfaat Pemilahan Sampah di Sumber: Memudahkan Proses Daur Ulang",
                "author" => "Tono Subagyo",
                "body" => "Memilah sampah sejak dari sumbernya merupakan langkah penting untuk mendukung proses daur ulang. Artikel ini menjelaskan manfaat dari pemilahan sampah dan bagaimana hal itu dapat dilakukan di tingkat rumah tangga dan komunitas."
            ],
            [
                "title" => "Dampak Sampah pada Kehidupan Satwa Liar: Kasus di Hutan Sumatra",
                "author" => "Bambang Setiawan",
                "body" => "Sampah yang tidak dikelola dengan baik dapat berdampak negatif pada satwa liar. Artikel ini mengulas kasus di Hutan Sumatra, di mana sampah plastik mempengaruhi kesehatan dan kehidupan satwa liar di sana."
            ],
            [
                "title" => "Pendidikan Lingkungan untuk Anak: Mengenalkan Konsep Reduce, Reuse, Recycle",
                "author" => "Lia Handayani",
                "body" => "Pendidikan lingkungan sejak dini penting untuk membentuk kebiasaan baik dalam mengelola sampah. Artikel ini menjelaskan pentingnya mengajarkan konsep Reduce, Reuse, Recycle kepada anak-anak dan metode yang efektif untuk melakukannya."
            ]
        ];

        foreach ($dummyData as $value) {
            $article = new Article();
            foreach ($value as $key => $val) {
                $article->{$key} = $val;
            }
            $article->save();
        }
    }
}
