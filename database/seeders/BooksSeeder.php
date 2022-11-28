<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'book_id' => 'BOB001',
            'pub_id_book' => 'PUB001',
            'title' => '5cm : Aku, Kamu, Samudera, dan Bintang Bintang',
            'author' => 'Donny Dhirgantoro',
            'year' => '2020',
            'synopsis' => 'Ia di sini sekarang, perjalanan pulang setelah Mahameru—Perjalanan Hati—puncak tertinggi Jawa, dan
            segala tentangnya. Alih pandangnya sekarang melihat jendela kereta Matarmaja yang melaju membawanya
            pulang menuju Jakarta. Pejaman mata dan tarikan nafasnya, seakan mencoba menjawab segala pertanyaan
            besar yang terus memenuhi benaknya semenjak kemarin Ranu Kumbolo hilang dari pandangannya.
            Pertanyaan-pertanyaan yang bukan dari siapa-siapa, tetapi dari dirinya sendiri. Teruntuk yang tidak lain
            adalah diriku sendiri... Zafran, manusia paling idealis, humanis, dan fantastis… Manusia paling keren
            ditongkrongan ini… Sebenarnya, untuk siapa kamu melakukan semua yang ingin kamu lakukan di dunia ini?
            Untuk kebahagiaan diri kamu? Atau untuk kebahagiaan orang lain? Apakah kamu seorang manusia yang hanya
            hidup untuk ngabis-ngabisin waktu aja? Celingak-celinguk, berbagi tanah, air, dan udara, namun tanpa
            tujuan. Menjadi manusia hanya untuk menuh-menuhin bumi, ngabisin airnya, ngabisin oksigennya. Hanya
            menjadi seonggok daging yang bisa berbicara, berjalan, dan punya nama—tanpa punya makna? Apakah kamu
            telah menjalani hidup yang kamu mau? Hidup yang kamu inginkan? Bukan yang orang lain inginkan dari kamu?
            Apakah kamu mencintai diri kamu sendiri? Apakah ada seseorang yang kamu cintai, lebih dari kamu
            mencintai diri kamu sendiri? Adakah cintamu yang terbalas? Atau mungkin tak terbalas? Atau ada yang
            begitu mencintaimu, tapi kamu tidak bisa membalasnya. Pernahkah kamu mengalami kesedihan yang luar biasa
            dalam hidup kamu? Pernahkah kamu mengalami kebahagiaan yang luar biasa dalam hidup kamu? Apakah kamu
            hidup dalam ketakutan-ketakutan kamu? Atau dalam harapan-harapan kamu? Apa yang harus kamu perbuat?
            Zafran termenung sejenak, namun beban pertanyaan yang baru saja menghunjam itu terasa ringan saat di
            bangku kereta, tak jauh darinya, ia melihat Genta, Riani, Ian, Arial, dan Dinda tersenyum kepadanya.',
            'book_image' => '5cm.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB002',
            'pub_id_book' => 'PUB001',
            'title' => 'Sebuah Seni Untuk Bersikap Bodo Amat',
            'author' => 'Mark Manson',
            'year' => '2005',
            'synopsis' => 'Selama beberapa tahun belakangan, Mark Manson—melalui blognya yang sangat populer—telah membantu
            mengoreksi harapan-harapan delusional kita, baik mengenai diri kita sendiri maupun dunia. Ia kini
            menuangkan buah pikirnya yang keren itu di dalam buku hebat ini.
            “Dalam hidup ini, kita hanya punya kepedulian dalam jumlah yang terbatas. Makanya, Anda harus bijaksana
            dalam menentukan kepedulian Anda.” Manson menciptakan momen perbincangan yang serius dan mendalam,
            dibungkus dengan cerita-cerita yang menghibur dan “kekinian”, serta humor yang cadas. Buku ini merupakan
            tamparan di wajah yang menyegarkan untuk kita semua, supaya kita bisa mulai menjalani kehidupan yang
            lebih memuaskan, dan apa adanya."',
            'book_image' => 'Seni-Untuk-Bersikap-Bodo-Amat_1.png'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB003',
            'pub_id_book' => 'PUB001',
            'title' => 'Segala-galanya Ambyar',
            'author' => 'Mark Manson',
            'year' => '2020',
            'synopsis' => 'Dayan, Surman, Odi, dan Poci adalah 4 sahabat yang tinggal di Kampung Laopo, Pulau Buton. Empat sekawan
            ini memiliki visi yang sama yaitu melakukan tradisi turun temurun mereka, menjaga kelestarian laut.
            Latar belakang ekonomi mereka yang mirip membuat mereka memiliki jiwa entrepreneurship sejak dini.
            Petualangan mereka dimulai ketika mereka menemukan banyak sekali ikan mati mengapung di permukaan laut.
            Mereka berempat bertekad untuk mencari tahu penyebabnya. Bersamaan dengan misi ini, mereka berempat
            menghadapi masalah keluarga yang tak kalah peliknya Ayah Surman meninggal karena tenggelam di laut,
            meninggalkan Surman dan Ibunya dengan segudang hutang dan cacian. Kemudian Ibunya jadi gila, jatuh
            sakit, dan meninggal. Dayan, berusaha mengembalikan kepercayaan keluarga padanya karena keluarganya
            kecewa Dayan telah dirampok dan berbohong. Sedangkan Odi, dengan kecerdasan dan semangatnya,menemukan
            fakta tak terduga tentang keluarga Poci, yang menyebabkan Poci jadi dendam pada Odi, namun semua
            akhirnya menjadi bumerang untuk Odi
            Selain mengangkat isu nyata mengenai lingkungan kelautan di negeri novel ini juga menceritakan tentang
            kasih sayang keluarga, antara orang tua dengan anak, persahabatan, gotong royong serta berwirausaha',
            'book_image' => 'segalanya.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB004',
            'pub_id_book' => 'PUB001',
            'title' => 'Serdadu Pantai',
            'author' => 'Laode Insan',
            'year' => '2019',
            'synopsis' => 'Ia di sini sekarang, perjalanan pulang setelah Mahameru—Perjalanan Hati—puncak tertinggi Jawa, dan
            segala tentangnya. Alih pandangnya sekarang melihat jendela kereta Matarmaja yang melaju membawanya
            pulang menuju Jakarta. Pejaman mata dan tarikan nafasnya, seakan mencoba menjawab segala pertanyaan
            besar yang terus memenuhi benaknya semenjak kemarin Ranu Kumbolo hilang dari pandangannya.
            Pertanyaan-pertanyaan yang bukan dari siapa-siapa, tetapi dari dirinya sendiri. Teruntuk yang tidak lain
            adalah diriku sendiri... Zafran, manusia paling idealis, humanis, dan fantastis… Manusia paling keren
            ditongkrongan ini… Sebenarnya, untuk siapa kamu melakukan semua yang ingin kamu lakukan di dunia ini?
            Untuk kebahagiaan diri kamu? Atau untuk kebahagiaan orang lain? Apakah kamu seorang manusia yang hanya
            hidup untuk ngabis-ngabisin waktu aja? Celingak-celinguk, berbagi tanah, air, dan udara, namun tanpa
            tujuan. Menjadi manusia hanya untuk menuh-menuhin bumi, ngabisin airnya, ngabisin oksigennya. Hanya
            menjadi seonggok daging yang bisa berbicara, berjalan, dan punya nama—tanpa punya makna? Apakah kamu
            telah menjalani hidup yang kamu mau? Hidup yang kamu inginkan? Bukan yang orang lain inginkan dari kamu?
            Apakah kamu mencintai diri kamu sendiri? Apakah ada seseorang yang kamu cintai, lebih dari kamu
            mencintai diri kamu sendiri? Adakah cintamu yang terbalas? Atau mungkin tak terbalas? Atau ada yang
            begitu mencintaimu, tapi kamu tidak bisa membalasnya. Pernahkah kamu mengalami kesedihan yang luar biasa
            dalam hidup kamu? Pernahkah kamu mengalami kebahagiaan yang luar biasa dalam hidup kamu? Apakah kamu
            hidup dalam ketakutan-ketakutan kamu? Atau dalam harapan-harapan kamu? Apa yang harus kamu perbuat?
            Zafran termenung sejenak, namun beban pertanyaan yang baru saja menghunjam itu terasa ringan saat di
            bangku kereta, tak jauh darinya, ia melihat Genta, Riani, Ian, Arial, dan Dinda tersenyum kepadanya.',
            'book_image' => 'serdadu.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB005',
            'pub_id_book' => 'PUB002',
            'title' => 'Para Pelindung (The Guardians)',
            'author' => 'John Grisham',
            'year' => '2022',
            'synopsis' => 'Di kota kecil Seabrook, Florida utara, seorang pengacara muda bernama Keith Russo ditembak mati saat
            bekerja hingga larut malam. Tak ada saksi, motif, atau petunjuk apa pun. Polisi menetapkan pelakunya
            adalah Quincy Miller, pria kulit hitam yang pernah menjadi klien Russo. Quincy dijebak dan dipenjara
            seumur hidup. Selama 23 tahun dia mendekam di penjara tanpa ada bantuan pengacara. Lalu dia menulis
            surat kepada Guardian Ministries, kelompok nirlaba kecil yang didirikan oleh pengacara/pendeta bernama
            Cullen Post. Misi mereka adalah membela orang-orang yang dijatuhi hukuman padahal tidak bersalah.',
            'book_image' => 'theguardians.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB006',
            'pub_id_book' => 'PUB002',
            'title' => 'Bumi',
            'author' => 'Tere Liye',
            'year' => '2019',
            'synopsis' => 'Bersama kedua temannya, Seli dan Ali, mereka bertualang ke klan-klan asing, berusaha untuk mengungkap
            misteri kekuatan mereka, mengalahkan musuh-musuh jahat yang ingin menguasai dunia paralel, kebenaran
            tentang leluhur mereka, dan tentu menemukan makna-makna kehidupan yang mendewasakan mereka.',
            'book_image' => 'bumi.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB007',
            'pub_id_book' => 'PUB002',
            'title' => 'Negeri di Ujung Tanduk',
            'author' => 'Tere Liye',
            'year' => '2018',
            'synopsis' => 'Kisah Negeri Di Ujung Tanduk ini merupakan lanjutan dari perjalanan Thomas dan teman-temannya dalam
            memperjuangkan kebenaran. Dengan setting waktu setahun setelah peristiwa Om Liem, Thomas kembali
            menjalankan kehidupannya di negeri yang berada pada tanduk demokrasi.
            Cerita bermula pada suatu klub petarung yang kali ini diadakan di Makau. Para anggota klub melakukan
            duel seru yang dihadiri seluruh anggota dari belahan negara manapun termasuk Thomas. Dalam duelnya
            Thomas mampu menang atas Lee, yang juga seorang pengusaha besar sekaligus relasi baiknya.
            Kini Thomas yang telah menjadi seorang konsultan politik, sudah memiliki cukup banyak pengalaman
            memegang klien yang ingin menjabat, misalnya dari walikota menjadi gubernur. Saat ini dirinya membantu
            JD sebagai klien untuk bisa menjadi kandidat partai untuk calon presiden mendatang.
            Namun rupanya sebuah kasus dituduhkan pada kliennya, dengan tujuan mencoreng nama baik JD sebagai
            kandidat. Usut punya usut, rupanya itu adalah perbuatan kubu lawan JD yang tidak segan-segan melemparkan
            kasus korupsi besar-besaran pada JD, saat dirinya menjabat sebagai gubernur tahun lalu.
            Di Negeri di Ujung Tanduk kehidupan semakin rusak. Bukan karena orang jahat semakin banyak, tapi semakin
            banyak orang yang memilih tidak peduli lagi. Di Negeri di Ujung Tanduk para penipu menjadi pemimpin,
            para pengkhianat menjadi pujaan.',
            'book_image' => 'negeriujung.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB008',
            'pub_id_book' => 'PUB002',
            'title' => 'Grit',
            'author' => 'Angela Duckworth',
            'year' => '2018',
            'synopsis' => 'Angela Duckworth -- seorang psikolog perintis-- menunjukkan bhawa rahasia untuk pencapaian yang luar
            biasa buknlah bakat, tetapu perpaduan istimewa antara hasrat(passion) dan kegigihan (perseverance) yang
            idisebut " ketabahan" (grit). Berdasarakan penelitian, wawancara dengan orang-orang yang berprestasi
            tinggi serta pengalamannya sendiri, DuUckworth menunjukkan bahwa kecenderungan suatu pencapaian terapaku
            pada bakat alami, padahal adahal yang lebih penting, yakni usaha yang dilakukan dan reaksi kita terhadap
            hambatan. Pada buku ini dijelaskan juga bahwa ketabahn bisa dipelajari sekaligus menawarkan rumusan baru
            kesuksesan individu maupun kesuksesan kolektif.',
            'book_image' => 'grit.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB009',
            'pub_id_book' => 'PUB003',
            'title' => 'Pesta Bunuh Diri',
            'author' => 'Daniel Ahmad',
            'year' => '2022',
            'synopsis' => 'Terlalu banyak masalah dan misteri pada desa ini. Para penduduknya harus mengalami berbagai musibah,
            wabah, terbatasnya bahan pangan dan pengetahuan, bahkan gangguan binatang. Namun, itu bukanlah masalah
            besar bagi mereka, ada sesuatu yang jahat dan lebih sering mengganggu mereka. Kumpulan Sisik Hitam
            selalu datang tiap malam, mengundang penduduk ke sebuah pesta, namun pesta singkat karena selalu
            berakhir sebelum sempat dimulai.',
            'book_image' => 'pestabunuhdiri.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB010',
            'pub_id_book' => 'PUB003',
            'title' => 'Jika Kita Tak Pernah Jadi Apa-Apa',
            'author' => 'Alvi Syahrin',
            'year' => '2019',
            'synopsis' => 'Kau melihat teman-teman dan mereka sudah mendapatkan impian,
            sementara kau masih termangu menggenggam harapan. Pelan, dalam hati kau berujar, “Kapan mimpiku
            terwujud?”
            Jika Kita Tak Pernah Jadi Apa-Apa
            Selama perjalanan mencapai tujuan, adakalanya kau melihat sekeliling… menakar jauh jangkauan. Atau, kau
            malah membandingkannya dengan orang lain. Lalu, lupa melanjutkan perjalanan.
            Jika Kita Tak Pernah Jadi Apa-Apa
            Benarkah segala usaha dan upayamu selama ini lebur bersama kecewa yang kau bangun sendiri? Sungguhkah
            sesuatu yang hanya kau lihat dalam dunia maya menjadikanmu merasa bukan apa-apa?
            Jika Kita Tak Pernah Jadi Apa-Apa akan menemanimu selama perjalanan.
            Buku ini untukmu yang khawatir tentang masa depan. Tenang saja, kau tidak sedang diburu waktu. Bacalah
            tiap lembarnya dengan penuh kesadaran bahwa hidup adalah tentang sebaik-baiknya berusaha, jatuh lalu
            bangun lagi, dan tidak berhenti percaya bahwa segala perjuanganmu tidak akan sia-sia. Bukankah sebaiknya
            apa-apa yang fana tidak selayaknya membuatmu kecewa?',
            'book_image' => 'jikakita.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB011',
            'pub_id_book' => 'PUB003',
            'title' => 'Jika Kita Tak Pernah Baik-Baik Saja',
            'author' => 'Alvi Syahrin',
            'year' => '2020',
            'synopsis' => 'Jika Kita Tak Pernah Baik-Baik Saja
            Bagaimana caranya aku bisa mencintai diriku ketika yang kulakukan kepada diriku adalah
            kesalahan-kesalahan bodoh tanpa hentinya?
            Jika Kita Tak Pernah Baik-Baik Saja
            Susah mencintai
            seseorang yang terus
            melakukan kesalahan, lantas bagaimana kalau diri ini yang terus melakukan kesalahan? How can I even
            start loving myself?
            Jika Kita Tak Pernah Baik-Baik Saja
            Lalu, bagaimana caranya aku bisa menerima segala kekuranganku?
            Bagaimana aku bisa menjadi diriku sendiri kalau aku sendiri tidak suka diriku sendiri?
            Kita pernah mengalami krisis, tak pernah baik-baik saja menerima keadaan dan menyalahkan diri sendiri.
            Mengarungi hidup adalah tentang seni mencintai—termasuk mencintai diri sendiri dengan segala kekurangan,
            dan berusaha memperbaikinya. Jika Kita Tak Pernah Baik-Baik Saja, mengajak kita mengenal arti kecewa dan
            bahagia demi mencintai diri sendiri dan sesuatu yang lebih dari segalanya.',
            'book_image' => 'baiksaja.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB012',
            'pub_id_book' => 'PUB003',
            'title' => 'Asing',
            'author' => 'Fadli Inzaghi',
            'year' => '2021',
            'synopsis' => 'Menjadi seseorang yang terlupakan mungkin pemah dialami semua orang. Pernahkah kamu merasakannya juga?
            Bagaimana caramu menghadapinya?
            Apa yang bisa membuatmu bertahan dengan banyak luka?
            Ini memang tak mudah. Melupakan seseorang yang hanya menganggap kita sebatas pernah. Namun, mau sampai
            kapan menunggu? Sedangkan punggungnya sudah semakkin jatuh. Tak ada lagi andai, yang tersisa hanyalah
            harapan yang semakin landai. Saatnya mengakui bahwa ia sudah tak mau lagi diperjuangkan.
            Meski sudah merelakan, di benakku masih tersisa banyak pertanyaan. Semudah itukah menghilangkan aku dari
            rasamu? Padahal purnama berikutnya baru saja hadir sejak kumelepasmu, melangkah seperti tidak pernah ada
            apa-apa.
            Menjadi dua orang asing yang tak saling kenal padahal pernah berbagi tawa.',
            'book_image' => 'asing.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB013',
            'pub_id_book' => 'PUB004',
            'title' => 'Teman',
            'author' => 'Jounatan & Guntur Alam',
            'year' => '2020',
            'synopsis' => 'Konon, tiga puluh tahun lalu, terjadi pembunuhan di sekolah Jounatan. Namun peristiwa itu ditutupi pihak
            sekolah. Tak banyak yang tahu, termasuk murid-murid di sana. Lalu, tiba-tiba seorang anak kelas sepuluh
            mengungkap cerita terlarang itu kepada Jou. Katanya, arwah korban yang terbunuh itu akan menuntut balas.
            Jou tak menggubrisnya. Namun kesurupan massal terjadi di sekolahnya, tak hanya satu, tetapi berulang
            kali. Teman-teman Jou pun mulai diteror sesuatu yang tak kasatmata. Jou kembali terjebak. Tanpa sadar
            dia telah membangkitkan sesuatu yang tertidur selama tiga puluh tahun. Sesuatu yang penuh dendam juga
            haus darah. Sialnya, Jou sudah tak dapat membedakan mana lawan atau kawan. Salah menebak, Jou akan
            diantar menuju kematian.',
            'book_image' => 'teman.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB014',
            'pub_id_book' => 'PUB004',
            'title' => 'The Devil All The Time',
            'author' => 'Donald Ray Pollock',
            'year' => '2022',
            'synopsis' => 'Willard Russel, mantan tentara saksi kekejaman perang, sudah menumpahkan banyak darah tapi tak sanggup
            menyelamatkan istrinya dari kematian.

            Carl dan Sandy Henderson, pasangan pembunuh berantai yang setiap musim panas mengincar para korbannya di
            jalanan. Roy dan Theodore, pengkhotbah keliling yang melarikan diri dan dijadikan buronan.

            Di dunia mereka yang menggila, sesosok pemuda terjebak di tengahnya, dipaksa untuk mengerti bahwa
            kebaikan dan kejahatan sesungguhnya memiliki batas yang fana.',
            'book_image' => 'TheDevilAllTheTime.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB015',
            'pub_id_book' => 'PUB004',
            'title' => 'Why? People - Stephen Hawking',
            'author' => 'Elex Media K',
            'year' => '2014',
            'synopsis' => 'STEPHEN HAWKING (1942-~) Anggota termuda dari Royal Society pada tahun 1974, pada tahun 1979 dilantik
            sebagai The Lucasian Professor of Mathematics at The University of Cambridge serta fisikawan universe
            yang sehebat Einstein, Newton, dan Galileo. Hawking lahir di Oxford, Inggris tahun 1942.
            Saat usia 21 tahun, dia didiagnosis menderita penyakit Lou Gehrig di mana penyakit ini menghancurkan sel
            saraf yang ada di dalam tubuhnya yang membuatnya tidak bisa hidup lebih dari 2 tahun lagi. Dia tidak
            menyerah, bahkan hingga kini dia sudah mengemukakan banyak teori dan teori ilmu ruang angkasa.
            Bahkan dia mengakui bahwa ada kesalahan dalam teori black hole yang dia kemukakan sendiri 30 tahun yang
            lalu dan menerima teori baru. Sikap Hawking ini menunjukkan seorang sarjana sejati yang tidak memikirkan
            gengsi dan wibawa.',
            'book_image' => 'Stephen Hawking.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB016',
            'pub_id_book' => 'PUB004',
            'title' => 'Petualang Super Kids',
            'author' => 'Tim Elex Media Komputindo',
            'year' => '2016',
            'synopsis' => 'Tidak semua anak suka makan sayur dan buah. Selalu ada alasan yang mereka lontarkan ketika orangtua
            meminta mereka makan sayur dan buah. Demikian juga dengan Farel. Ia seringkali tidak mau makan buah dan
            sayur.
            Pada suatu hari, Farel diganggu oleh tiga temannya yang sangat nakal. Sanggupkah Farel menghadapi ke
            tiga temannya yang nakal itu?
            K-Link mengajak anak-anak untuk mengikuti bagaimana cara Farel menghadapi ke tiga anak yang nakal itu?
            Simak kisahnya dan jadilah anak yang berani seperti Farel!',
            'book_image' => 'petualang.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB017',
            'pub_id_book' => 'PUB002',
            'title' => 'Hantu di Rumah Kos',
            'author' => 'DINI W.TAMAM & ERBY S',
            'year' => '2018',
            'synopsis' => 'Dari Pekanbaru ke kota Bandung, hanya satu tujuan Renata. Kuliah di sebuah Universitas untuk menuntut
            ilmu dan menggapai cita. Kakak satu-satunya, Radit, memilih sebuah rumah kos yang letaknya terjangkau
            dari kampusnya.

            Bangunan kos terlihat baik-baik saja. Tidak ada kesan menakutkan. Tetapi ternyta itu salah. Renata
            merasakan keanehan yang tidak disangka. Suasana begitu menakutkan terlebih ketika malam menurunkan
            gelapnya. Ada sesuatu di sana. Ia terlalu sulit menghindar. Ternyata, kos itu bukan kos seperti pada
            umumnya.',
            'book_image' => 'hantu_di_ruma_p.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB018',
            'pub_id_book' => 'PUB003',
            'title' => 'Pulang Pergi',
            'author' => 'Tere Liye',
            'year' => '2021',
            'synopsis' => 'Ada jodoh yang ditemukan lewat tatapan pertama.
            Ada persahabatan yang diawali lewat sapa hangat.
            Bagaimana jika takdir bersama ternyata,
            diawali dengan pertarungan mematikan?
            Lantas semua cerita berkelindan dengan,
            pengejaran demi pengejaran mencari jawaban?
            Pulang-Pergi',
            'book_image' => 'pulang-pergi_tere_liye.jpeg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB019',
            'pub_id_book' => 'PUB002',
            'title' => 'You Do You',
            'author' => 'Fellexandro Ruby',
            'year' => '2020',
            'synopsis' => 'I feel you. Gue juga pernah mengalami keresahan yang sama. Faktanya, satu dekade pertama dalam
            perjalanan karier gue dihabiskan untuk bereksperimen dengan sembilan macam role yang berbeda, sampai
            akhirnya gue menemukan ikigai.

            Sales, petugas lelang, operator alat berat, travel blogger, food photographer, penyanyi, social media
            manager, product manager di sebuah tech startup, sampai pengusaha pernah gue jalani. Menariknya, semua
            kegalauan dan pencarian itu mulai terjawab dengan sendirinya ketika gue bisa menjawab pertanyaan: “Who
            are you?” Ketika gue mengenal diri sendiri, maka pada titik itulah gue menemukan jawaban bahwa “your
            life (career, business, relationship, and finance) should be an extension of who you are”.',
            'book_image' => 'youdoyou.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB020',
            'pub_id_book' => 'PUB001',
            'title' => 'KKN Di Desa Penari',
            'author' => 'Simpleman',
            'year' => '2019',
            'synopsis' => 'Saat motor melaju kencang menembus hutan, Widya mendengar tabuhan gamelan. Suaranya mendayu-dayu dan
            terasa semakin dekat. Tiba-tiba Widya melihat sesosok manusia tengah menelungkup seakan memasang pose
            menari. Ia berlenggak-lenggok mengikuti irama musik gamelan yang ditabuh cepat.
            Siapa yang menari di malam gulita seperti ini?
            Tiga puluh menit berlalu, dan atap rumah terlihat samar-samar dengan cahaya yang meski tamaram bisa
            dilihat jelas oleh mata.
            "Mbak... kita sudah sampai di desa."',
            'book_image' => 'kkndesapenari.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB021',
            'pub_id_book' => 'PUB004',
            'title' => 'Lewat Tengah Malam - Ganjil',
            'author' => 'Sweta Kartika',
            'year' => '2021',
            'synopsis' => 'Mereka bilang, harta bukanlah segalanya.
            Mereka juga bilang, tahta tak bisa membeli bahagia.
            Semua itu hanyalah dusta dari mulut-mulut nestapa.
            Harta dan tahta adalah segalanya. Nyawa pun layak ditumbalkan untuk mendapatkannya. Hingga akhirnya
            gerbang iblis pun terbuka...
            Misteri bocah pembisik, danau maut penuh butiran emas, singgasana berdarah, pesugihan... Lewat tengah
            malam itu, bujuk rayu kegelapan mulai menuntun kaki-kaki anak manusia menempuh suramnya jalan pintas
            neraka.',
            'book_image' => 'LewatTengahMalam.jpeg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB022',
            'pub_id_book' => 'PUB003',
            'title' => 'Janshen (Repackage)',
            'author' => 'Risa Saraswati',
            'year' => '2021',
            'synopsis' => 'Selama ini kita memanggilnya “Janshen”, padahal itu adalah nama belakang keluarganya. Sejak lahir, anak
            ini dianggap sebagai pembawa kebahagiaan karena siapa pun yang ada di sekitarnya selalu merasa bahagia.
            Tak ada yang mau tahu bagaimana kisah hidupnya. Semua sahabat hantuku tak tertarik mencari tahu karena
            masalah terberat seorang Janshen hanyalah gigi ompong yang membuat anak itu menjadi bulan-bulanan.
            Kupikir hidupnya selalu menyenangkan, kupikir harinya selalu dipenuhi tawa. Ternyata aku salah, anak
            sekecil dan selucu dia harus menghadapi banyak masalah hingga akhir hidup. Selamat datang di kehidupan
            si hantu ompong favoritku. Selamat menyelami sisi gelap masa lalunya.',
            'book_image' => 'janshen.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB023',
            'pub_id_book' => 'PUB002',
            'title' => 'Si Anak Pemberani',
            'author' => 'Tere Liye',
            'year' => '2018',
            'synopsis' => '" Aku Eliana, si anak pemberani, anak sulung Bapak dan Mamak yang akan menjadi pembela kebnaran dan
            keadilan. Berdiri paling gagah, paling depan."
            Buku ini tentang Eliana, anak pemberani yang membela tanah, sungai, hutan, dan lemah kampungnya. Saat
            kerakusan dunia datang, Eliana bersama teman karibnya bahu-membahu melakukan perlawanan.
            Dari puluhan buku Tere Liye, serial buku ini adalah mahkotanya.',
            'book_image' => 'anakpemberani.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB024',
            'pub_id_book' => 'PUB002',
            'title' => 'Lumpu',
            'author' => 'Tere Liye',
            'year' => '2021',
            'synopsis' => 'Yes! Akhirnya, Raib, Seli, dan Ali kembali bertualang. Kalian sudah kangen dengan trio ini? Misi mereka
            adalah menyelamatkan Miss Selena, guru matematika mereka. Tapi, apakah semua berjalan mudah? Siapa yang
            bersedia membantu mereka?
            Kali ini, si genius Ali memutuskan meminta bantuan dari sosok yang tidak terduga, karena musuh dari
            musuh adalah teman. Apakah Raib bisa melupakan masa lalu itu dengan memaafkan Miss Selena? Bagaimana
            dengan Tazk?
            Apakah Raib bisa bertemu lagi dengan ayahnya, atau itu masih menjadi misteri? Bagaimana dengan jejak
            ekspedisi Klan Aldebaran 40.000 tahun lalu? Benda apa saja yang ditinggalkan oleh perjalanan besar
            tersebut? Pertarungan panjang telah menunggu mereka. Dan lawan mereka adalah Lumpu, petarung yang
            memiliki teknik unik, yaitu melumpuhkan kekuatan lawan.',
            'book_image' => 'lumpu.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB025',
            'pub_id_book' => 'PUB001',
            'title' => 'Atomic Habits',
            'author' => 'James Clear',
            'year' => '2020',
            'synopsis' => 'Buku Atomic Habits adalah buku tentang bagaimana mengubah kebiasaan-kebiasaan kita menjadi lebih baik
            dan tentunya menjadi perubahan yang permanen. James Clear mengajarkan kita untuk mencapai tujuan jangka
            panjang kita melalui kebiasaan-kebiasaan kecil yang kita lakukan setiap harinya.',
            'book_image' => 'atomic.jpg'
        ]);
        DB::table('books')->insert([
            'book_id' => 'BOB026',
            'pub_id_book' => 'PUB003',
            'title' => 'Psychology of Money',
            'author' => 'Morgan Housel',
            'year' => '2021',
            'synopsis' => 'Kesuksesan dalam mengelola uang tidak selalu tentang apa yang Anda ketahui. Ini tentang bagaimana Anda
            berperilaku. Dan perilaku sulit untuk diajarkan, bahkan kepada orang yang sangat pintar sekalipun.
            Seorang genius yang kehilangan kendali atas emosinya bisa mengalami bencana keuangan. Sebaliknya, orang
            biasa tanpa pendidikan finansial bisa kaya jika mereka punya sejumlah keahlian terkait perilaku yang tak
            berhubungan dengan ukuran kecerdasan formal.
            Uang―investasi, keuangan pribadi, dan keputusan bisnis―biasanya diajarkan sebagai bidang berbasis
            matematika, dengan data dan rumus memberi tahu kita apa yang harus dilakukan. Namun di dunia nyata,
            orang tidak membuat keputusan finansial di spreadsheet. Mereka membuatnya di meja makan, atau di ruang
            rapat, di mana sejarah pribadi, pandangan unik Anda tentang dunia, ego, kebanggaan, pemasaran, dan
            berbagai insentif bercampur.',
            'book_image' => 'psychology.jpg'
        ]);
    }
}
