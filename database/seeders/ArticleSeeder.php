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
                "title" => "Menanggulangi Sampah Plastik: Solusi dan Tantangan di Indonesia",
                "author" => "Diana Pratiwi",
                "body" => "Indonesia menghadapi krisis sampah plastik yang serius. Artikel ini membahas dampak lingkungan dari sampah plastik, berbagai upaya pemerintah dan masyarakat dalam mengurangi penggunaan plastik, serta tantangan yang dihadapi dalam mengelola sampah plastik."
            ],
            [
                "title" => "Pengelolaan Sampah di Kota Besar: Studi Kasus Jakarta",
                "author" => "Budi Santoso",
                "body" => "Jakarta, sebagai ibu kota Indonesia, menghadapi masalah pengelolaan sampah yang kompleks. Artikel ini mengulas sistem pengelolaan sampah di Jakarta, tantangan yang dihadapi, dan inisiatif yang diterapkan untuk meningkatkan efisiensi dan keberlanjutan pengelolaan sampah."
            ],
            [
                "title" => "Dampak Sampah pada Kesehatan Masyarakat: Studi Kasus di Surabaya",
                "author" => "Sari Melati",
                "body" => "Sampah yang menumpuk di area permukiman dapat memiliki dampak serius pada kesehatan masyarakat. Artikel ini mengeksplorasi bagaimana masalah sampah di Surabaya mempengaruhi kesehatan warga dan langkah-langkah yang diambil untuk mengatasi masalah tersebut."
            ],
            [
                "title" => "Inovasi Teknologi dalam Pengelolaan Sampah: Contoh dari Bandung",
                "author" => "Arief Rachman",
                "body" => "Bandung telah menjadi pionir dalam penggunaan teknologi untuk mengelola sampah. Artikel ini membahas berbagai inovasi yang diterapkan di Bandung, termasuk sistem pemantauan sampah berbasis teknologi dan metode pengolahan sampah yang efisien."
            ],
            [
                "title" => "Pendidikan Lingkungan untuk Mengurangi Sampah: Peran Sekolah di Yogyakarta",
                "author" => "Nina Hartati",
                "body" => "Pendidikan lingkungan dapat memainkan peran penting dalam mengurangi jumlah sampah. Artikel ini mengulas inisiatif di sekolah-sekolah Yogyakarta yang berfokus pada pendidikan tentang pengelolaan sampah dan dampaknya terhadap lingkungan."
            ],
            [
                "title" => "Membangun Kesadaran Publik tentang Sampah: Kampanye dan Program di Medan",
                "author" => "Rian Nugroho",
                "body" => "Kesadaran publik adalah kunci untuk mengatasi masalah sampah. Artikel ini mengkaji kampanye dan program yang telah diluncurkan di Medan untuk meningkatkan kesadaran masyarakat mengenai pengelolaan sampah dan pentingnya daur ulang."
            ],
            [
                "title" => "Sampah dan Pariwisata: Tantangan di Bali",
                "author" => "Lia Cempaka",
                "body" => "Bali sebagai destinasi wisata terkenal menghadapi tantangan besar terkait sampah. Artikel ini membahas bagaimana sampah mempengaruhi industri pariwisata di Bali dan langkah-langkah yang diambil untuk menjaga kebersihan dan keberlanjutan lingkungan."
            ],
            [
                "title" => "Peran Komunitas dalam Pengelolaan Sampah: Contoh dari Malang",
                "author" => "Eka Wijaya",
                "body" => "Komunitas lokal memiliki peran penting dalam pengelolaan sampah. Artikel ini menyoroti inisiatif komunitas di Malang yang telah berhasil mengurangi sampah melalui program-program berbasis masyarakat."
            ],
            [
                "title" => "Sampah Organik dan Komposting: Upaya di Semarang",
                "author" => "Indah Pramudita",
                "body" => "Sampah organik merupakan bagian besar dari total sampah yang dihasilkan. Artikel ini membahas upaya di Semarang untuk mengelola sampah organik melalui program komposting, serta manfaat dan tantangan dari metode tersebut."
            ],
            [
                "title" => "Kebijakan Pemerintah dalam Pengelolaan Sampah: Evaluasi dan Rekomendasi untuk Indonesia",
                "author" => "Fajar Ramadhan",
                "body" => "Artikel ini mengevaluasi kebijakan pemerintah Indonesia terkait pengelolaan sampah, menganalisis keberhasilan dan kekurangan dari kebijakan tersebut, serta memberikan rekomendasi untuk perbaikan di masa depan."
            ]
        ];
                foreach ($dummyData as $value) {
            $article = new Article();
            foreach($value as $key => $val) {
                $article->{$key} = $val;
            }
            $article->save();
        }
    }
}
