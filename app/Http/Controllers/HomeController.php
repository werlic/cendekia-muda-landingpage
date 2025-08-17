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
            'excerpt' => 'Prestasi membanggakan di kancah internasional dari siswa berprestasi.',
            'image' => 'images/Journal1.png',
            'author' => 'HUMAS CM',
            'date' => '08 April 2025',
            'category' => 'Olahraga',
            'content' => '<p class="text-justify">Siswa SMA Islam Cendekia Muda berhasil meraih prestasi gemilang di kompetisi renang tingkat dunia. Pencapaian ini membuktikan bahwa sekolah tidak hanya fokus pada akademik, tetapi juga pengembangan bakat olahraga.</p>
                            <p class="text-justify">Dengan fasilitas olahraga yang lengkap dan pelatihan yang intensif, siswa-siswi Cendekia Muda terus mengharumkan nama bangsa di kancah internasional.</p>'
        ]
    ];

    // Article Methods
    public function getArticles()
    {
        // This would typically fetch articles from database
        $articles = $this->articles;
        
        return view('pages.landingpage.articles', compact('articles'));
    }

    public function showArticle($slug = null)
    {
        // If no slug provided, show default article
        if (!$slug) {
            $slug = 'freshmen-camp-2025-spn-polda-jabar';
        }

        $article = $this->articles[$slug] ? $this->articles['freshmen-camp-2025-spn-polda-jabar'] : null;
        
        return view('pages.landingpage.article', compact('article'));
    }
}
