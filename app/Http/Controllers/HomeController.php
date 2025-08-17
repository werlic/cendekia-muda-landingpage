<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function facility()
    {
        return view('pages.landingpage.facility');
    }

    public function visiMisi()
    {
        return view('pages.landingpage.visi_misi');
    }

    public function history()
    {
        return view('pages.landingpage.history');
    }

    // Unit/Department Methods
    public function paud()
    {
        return view('pages.landingpage.paud');
    }

    public function sd()
    {
        return view('pages.landingpage.sd');
    }

    public function smp()
    {
        return view('pages.landingpage.smp');
    }

    public function sma()
    {
        return view('pages.landingpage.sma');
    }

    public function alumniPrestasi()
    {
        return view('pages.landingpage.alumni-prestasi');
    }

    public function kontak()
    {
        return view('pages.landingpage.kontak');
    }

    // Sample article data - in a real app, this would come from database
    private $articles = [
        'freshmen-camp-2025-spn-polda-jabar' => [
            'title' => 'Langkah Pertama Menuju Masa Depan: Freshmen Camp 2025 di SPN Polda Jabar',
            'slug' => 'freshmen-camp-2025-spn-polda-jabar',
            'type' => 'article',
            'excerpt' => 'Langkah-langkah kecil mereka hari ini bukan sekadar gerakan fisik tetapi awal dari sebuah perjalanan besar menuju kedewasaan, tanggung jawab, dan kepemimpinan.',
            'image' => 'images/education-back-to-school.png',
            'author' => 'HUMAS CM',
            'date' => '05 Agustus 2025',
            'category' => 'Berita',
            'content' => '<p class="text-justify">Langkah-langkah kecil mereka hari ini bukan sekadar gerakan fisik tetapi awal dari sebuah perjalanan besar menuju kedewasaan, tanggung jawab, dan kepemimpinan.</p>
                            <p class="text-justify">Freshmen Camp 2025 dari SMA Islam Cendekia Muda, salah satu SMA terbaik yang mengintegrasikan kecerdasan intelektual, spiritual, dan emosional, resmi dimulai dan dilaksanakan di tempat yang luar biasa: Sekolah Polisi Negara (SPN) Polda Jawa Barat. Tempat ini menjadi simbol kedisiplinan dan pembentukan karakter, sejalan dengan misi besar sekolah dalam mencetak generasi unggul.</p>
                            <p class="text-justify">Kegiatan ini bukan hanya orientasi biasa. Di sinilah nilai-nilai ukhuwah, integritas, dan kedekatan mulai terbentuk. Para siswa dikenalkan pada budaya sekolah, nilai-nilai Islam, serta pentingnya menjadi pribadi yang bertanggung jawab dan berjiwa kepemimpinan sejak dini.</p>
                            <p class="text-justify">Sebagai salah satu lembaga pendidikan unggulaan, SMA Islam Cendekia Muda terus berkomitmen melahirkan insan berilmu, berakhlak, dan siap menjadi pemimpin masa depan yang membawa perubahan.</p>
                            <p class="italic text-primary-700 font-medium">"Setiap awal adalah ladang harapan. Semoga langkah ini menjadi awal dari kebaikkan dan keberukahan."</p>
                            <p class="text-justify">Selamat datang para penimba ilmu di rumah kedisiplinan dan pembentukan karakter. Mari tumbuh bersama menjadi generasi masa depan yang tangguh, dan berakhlak mulia — bersama SMA Islam Cendekia Muda, sekolah terbaik pilihan masa depan.</p>'
        ],
        'hafal-30-juz-siswi-smp' => [
            'title' => 'Hafal 30 Juz Siswi SMP Merubah Dunia Pendidikan',
            'slug' => 'hafal-30-juz-siswi-smp',
            'type' => 'article',
            'excerpt' => 'Mari bersama menjadi generasi Qur\'ani yang unggul dalam pendidikan dan akhlak.',
            'image' => 'images/Journal2.png',
            'author' => 'HUMAS CM',
            'date' => '03 April 2025',
            'category' => 'Prestasi',
            'content' => '<p class="text-justify">Prestasi luar biasa ditorehkan oleh siswi SMP Islam Cendekia Muda yang berhasil menghafal 30 juz Al-Quran. Pencapaian ini menunjukkan komitmen sekolah dalam mengintegrasikan pendidikan akademik dengan nilai-nilai spiritual Islam.</p>
                            <p class="text-justify">Program tahfidz yang dijalankan secara konsisten telah membuahkan hasil yang membanggakan. Para siswa tidak hanya unggul dalam akademik, tetapi juga memiliki fondasi spiritual yang kuat.</p>'
        ],
        'juara-renang-kelas-dunia' => [
            'title' => 'Juara Renang Kelas Dunia! Cendekia Muda Solutanya',
            'slug' => 'juara-renang-kelas-dunia',
            'type' => 'article',
            'excerpt' => 'Prestasi membanggakan di kancah internasional dari siswa berprestasi.',
            'image' => 'images/Journal1.png',
            'author' => 'HUMAS CM',
            'date' => '08 April 2025',
            'category' => 'Olahraga',
            'content' => '<p class="text-justify">Siswa SMA Islam Cendekia Muda berhasil meraih prestasi gemilang di kompetisi renang tingkat dunia. Pencapaian ini membuktikan bahwa sekolah tidak hanya fokus pada akademik, tetapi juga pengembangan bakat olahraga.</p>
                            <p class="text-justify">Dengan fasilitas olahraga yang lengkap dan pelatihan yang intensif, siswa-siswi Cendekia Muda terus mengharumkan nama bangsa di kancah internasional.</p>'
        ]
    ];

    // Sample publication data
    private $publications = [
        'jurnal-pendidikan-islam-2025' => [
            'title' => 'Jurnal Pendidikan Islam: Integrasi Nilai-Nilai Qurani dalam Pembelajaran Modern',
            'slug' => 'jurnal-pendidikan-islam-2025',
            'type' => 'publication',
            'excerpt' => 'Penelitian mendalam tentang implementasi nilai-nilai Islam dalam sistem pendidikan modern di era digital.',
            'image' => 'images/Journal3.png',
            'author' => 'Tim Peneliti CM',
            'date' => '15 Juli 2025',
            'category' => 'Jurnal',
            'download_url' => '#',
            'content' => '<p class="text-justify">Jurnal ini membahas pentingnya integrasi nilai-nilai Qurani dalam pembelajaran modern. Penelitian dilakukan selama satu tahun akademik dengan melibatkan siswa-siswi dari berbagai tingkat pendidikan.</p>
                            <p class="text-justify">Hasil penelitian menunjukkan bahwa pendekatan integratif antara pembelajaran akademik dan nilai-nilai spiritual Islam memberikan dampak positif terhadap karakter dan prestasi siswa.</p>
                            <p class="text-justify">Metodologi penelitian menggunakan pendekatan kualitatif dan kuantitatif dengan sampel 500 siswa dari berbagai jenjang pendidikan di SMA Islam Cendekia Muda.</p>'
        ],
        'buku-panduan-tahfidz' => [
            'title' => 'Panduan Tahfidz Al-Quran untuk Siswa Sekolah Islam',
            'slug' => 'buku-panduan-tahfidz',
            'type' => 'publication',
            'excerpt' => 'Buku panduan lengkap untuk program tahfidz yang telah terbukti efektif di lingkungan sekolah.',
            'image' => 'images/Journal2.png',
            'author' => 'Ustadz Ahmad Fauzi',
            'date' => '20 Juni 2025',
            'category' => 'Buku Panduan',
            'download_url' => '#',
            'content' => '<p class="text-justify">Buku panduan ini berisi metodologi pembelajaran tahfidz yang telah diuji coba dan terbukti efektif dalam program tahfidz di SMA Islam Cendekia Muda.</p>
                            <p class="text-justify">Panduan ini mencakup teknik menghafal yang efektif, cara muraja\'ah yang benar, dan tips menjaga hafalan dalam jangka panjang.</p>
                            <p class="text-justify">Dilengkapi dengan jadwal harian, target mingguan, dan evaluasi bulanan untuk memastikan progress yang optimal dalam program tahfidz.</p>'
        ],
        'penelitian-metode-pembelajaran' => [
            'title' => 'Penelitian: Efektivitas Metode Blended Learning di Era Post-Pandemic',
            'slug' => 'penelitian-metode-pembelajaran',
            'type' => 'publication',
            'excerpt' => 'Studi komprehensif tentang efektivitas pembelajaran campuran pasca pandemi COVID-19.',
            'image' => 'images/Journal1.png',
            'author' => 'Dr. Siti Aminah, M.Pd',
            'date' => '10 Agustus 2025',
            'category' => 'Penelitian',
            'download_url' => '#',
            'content' => '<p class="text-justify">Penelitian ini menganalisis efektivitas metode blended learning yang diterapkan di SMA Islam Cendekia Muda selama dan setelah pandemi COVID-19.</p>
                            <p class="text-justify">Data dikumpulkan dari 300 siswa dan 50 guru selama periode 2 tahun akademik, dengan fokus pada pencapaian akademik, engagement siswa, dan kepuasan pembelajaran.</p>
                            <p class="text-justify">Hasil menunjukkan peningkatan signifikan dalam hasil belajar siswa dan efisiensi waktu pembelajaran dengan model blended learning yang tepat.</p>'
        ]
    ];

    // Article Methods
    public function getArticles()
    {
        // Filter only articles (type = 'article')
        $articles = array_filter($this->articles, function($item) {
            return $item['type'] === 'article';
        });
        
        return view('pages.landingpage.articles', compact('articles'));
    }

    public function showArticle($slug = null)
    {
        // If no slug provided, show default article
        if (!$slug) {
            $slug = 'freshmen-camp-2025-spn-polda-jabar';
        }

        $article = isset($this->articles[$slug]) ? $this->articles[$slug] : null;
        
        if (!$article || $article['type'] !== 'article') {
            abort(404);
        }
        
        return view('pages.landingpage.article', compact('article'));
    }

    // Publication Methods
    public function getPublications()
    {
        // Filter only publications (type = 'publication')
        $publications = array_filter($this->publications, function($item) {
            return $item['type'] === 'publication';
        });
        
        return view('pages.landingpage.publications', compact('publications'));
    }

    public function showPublication($slug = null)
    {
        // If no slug provided, show first publication
        if (!$slug) {
            $firstPublication = array_keys($this->publications)[0];
            $slug = $firstPublication;
        }

        $publication = isset($this->publications[$slug]) ? $this->publications[$slug] : null;
        
        if (!$publication || $publication['type'] !== 'publication') {
            abort(404);
        }
        
        return view('pages.landingpage.publication', compact('publication'));
    }
}
