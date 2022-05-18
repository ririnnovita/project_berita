-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2022 pada 03.49
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gambar2` varchar(100) DEFAULT NULL,
  `gambar3` varchar(100) DEFAULT NULL,
  `judul` varchar(250) NOT NULL,
  `artikel` text NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `nama_penulis` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `gambar`, `gambar2`, `gambar3`, `judul`, `artikel`, `kategori`, `nama_penulis`, `tanggal`) VALUES
(24, 'gunung-gamalama-_120917112504-567.jpg', NULL, NULL, 'Gunung Gamalama Meletus, Asap Putih Membubung Setinggi 250 Meter', '     <p>Gunung api Gamalama di Pulau Ternate, Maluku Utara, meletus pada Kamis (4/10/2018) pada pukul 11.52 WIT. Gunung mengeluarkan asap berwarna putih kelabu setinggi 250 meter dari puncak awal. Abu vulkanik terbawa angin ke arah barat laut dan jatuh di wilayah Kecamatan Ternate Barat dan Pulau Ternate.</p>\r\n\r\n     <p>Kepala Pos Pengamatan Gunung Api Gamalama Darno Lamane menuturkan, status gunung masih tetap waspada tingkat II. Pihaknya masih terus mengamati perkembangan aktivitas vulkanik gunung tersebut. Menurut dia, Gamalama didominasi gas hidrotermal sehingga statusnya belum perlu dinaikkan. Darno mengatakan, perkembangan aktivitas vulkanik Gunung Gamalama sudah menunjukkan peningkatan aktivitas kegempaan vulkanik sekitar pukul 10.00 WIT hingga letusan terjadi pada pukul 11.52 WIT. Belum dapat diprediksi lagi kapan gunung akan kembali meletus.</p>\r\n\r\n       <p>Sekitar 1 jam sebelum kejadian erupsi, lanjut dia, terekam delapan gempa vulkanik dengan kemungkinan mekanisme yang disebut steam-driven eruption atau ledakan hidrotermal. Pemantauan akan ditingkatkan untuk mengantisipasi peningkatan kegempaan menyusul letusan minor ini. Warga Ternate diminta untuk tenang dan tidak mudah percaya dengan informasi dari sumber yang tidak jelas dengan tujuan menimbulkan keresahan di masyarakat. \"Kami akan terus menyampaikan informasi mengenai perkembangan gunung api Gamalama dan kalau masyarakat ingin mendapatkan informasi mengenai aktivitas Gunung Gamalama dapat menghubungi Pos Pemantu Gunung Api Gamalama,\" kata Darno. Oleh karena itu, Darno mengimbau masyarakat di sekitar Gunung Gamalama dan pengunjung/wisatawan agar tidak beraktivitas di dalam radius 1.5 km dari kawah puncak gunung itu. Begitu pula, pada musim hujan, masyarakat yang tinggal di sekitar aliran sungai yang berhulu di Gunung Gamalama agar mewaspadai potensi ancaman bahaya sekunder berupa aliran lahar.</p>', 'News', 'Yamin Abdul Hasan', '2018-10-04'),
(27, 'mobil2.jpg', NULL, NULL, 'Beli Mobil Listrik Kedua dan Seterusnya Nggak Beli Mobil Listrik Kedua dan Seterusnya Nggak Kena Pajak Progresif', '<p> Insentif fiskal terus diberikan pemerintah pusat maupun daerah terhadap kendaraan bermotor listrik (KBL). Salah satunya adalah keringanan pajak untuk kendaraan ramah lingkungan ini.</p>\r\n\r\n<p> Untuk tingkat pemerintah daerah, Pemerintah Provinsi (Pemprov) DKI Jakarta memberikan keringanan bea balik nama (BBN) dan pajak kendaraan bermotor (PKB) tahunan untuk kendaraan listrik. Nggak cuma itu, kendaraan listrik juga tidak dikenakan pajak progresif.</p>\r\n\r\n<p> Hal itu tertuang dalam Peraturan Gubernur No. 41 Tahun 2021 tentang Penghitungan Dasar Pengenaan Pajak Kendaraan Bermotor dan Bea Balik Nama Kendaraan Bermotor Pembuatan Sebelum Tahun 2021.</p>\r\n\r\n<p> Soal insentif pajak kendaraan listrik, diatur dalam pasal 9 Pergub No. 41 Tahun 2021. Berikut detailnya:</p>\r\n\r\n<p> (1) Pengenaan PKB KBL Berbasis Baterai untuk orang atau barang sebesar 10% (sepuluh persen) dan i dasar pengenaan PKB.</p>\r\n<p> (2) Pengenaan PKB KBL Berbasis Baterai untuk angkutan umum orang sebesar 10% (sepuluh persen) dan i dasar pengenaan PKB.</p>\r\n<p> (3) Pengenaan PKB KBL Berbasis Baterai untuk angkutan umum barang sebesar 10% (sepuluh persen) dan i dasar pengenaan PKB.</p>\r\n<p> (4) Kepemilikan KBL Berbasis Baterai kedua dan seterusnya diberikan insentif tidak dikenakan tarif pajak progresif.</p>\r\n<p> (5) Penyerahan kepemilikan KBL Berbasis Baterai diberikan insentif tidak dikenakan BBN-KB sesuai dengan ketentuan peraturan perundang-undangan.</p>\r\n\r\n<p> Menurut Humas Badan Pendapatan Daerah (Bapenda) DKI Jakarta Andri, pajak kendaraan bermotor listrik berbasis baterai yang dibayarkan setiap tahun diberikan insentif.</p>\r\n\r\n<p> \"Untuk PKB tahunannya hanya bayar 10% saja dari nilai normalnya, diberi insentif,\" kata Andri kepada detikcom, Senin (31/1/2022).</p>\r\n\r\n<p> Menurutnya, perhitungan PKB kendaraan listrik sama saja dengan kendaraan lain. Namun, untuk kendaraan listrik pemiliknya cukup bayar 10% dari PKB keseluruhannya.</p>\r\n\r\n<p> \"Sama saja hanya bedanya untuk listrik yang dibayarkan hanya 10%. Kalau (kendaraan) konvensional ya full,\" katanya.</p>\r\n', 'Oto', 'Tim detikcom', '2022-01-31'),
(28, 'inet1.jpg', NULL, NULL, 'Apakah Omicron Akan Akhiri Pandemi? Ini Kata Ahli', '<p> Penyebaran varian yang begitu cepat, strategi vaksin yang berbeda, dan berbagai tingkat kekebalan di seluruh dunia, membuat masa depan pandemi sulit diprediksi. Kini, muncul Omicron. Tanda pandemi COVID-19 segera berakhir?\r\nPara ilmuwan mengatakan semua negara menghadapi masalah besar yang sama: kecepatan penyebaran varian. WHO dan badan lainnya memperkirakan bahwa sejumlah besar infeksi Omicron kemungkinan menandakan akhir dari pandemi, karena lonjakan kekebalan jangka pendek yang akan mengikuti. Meski demikian, para peneliti memperingatkan bahwa situasinya tetap tidak stabil dan sulit untuk dimodelkan.</p>\r\n\r\n<p> \"Ia (virus) bergerak sangat cepat sehingga hanya memberikan sedikit waktu untuk mempersiapkan respons apa pun. Jadi, keputusan harus dibuat di bawah ketidakpastian yang besar,\" kata Graham Medley, pemodel penyakit menular di London School of Hygiene & Tropical Medicine, yang kerap memberi saran dan pertimbangan kepada Pemerintah Inggris.</p>\r\n\r\n<p> Jadi, apakah Omicron menjadi penanda pandemi berakhir? Sayangnya tidak. Seperti dikutip dari Nature, para peneliti sepakat kemunculan Omicron tidak mengakhiri pandemi COVID-19.</p>\r\n\r\n<p> \"Ini bukan varian terakhir. Jadi varian berikutnya akan memiliki karakteristiknya sendiri,\" kata Medley.</p>\r\n\r\n<p> Mengingat virus tidak mungkin hilang sepenuhnya, COVID-19 pasti akan menjadi penyakit endemik, kata para ilmuwan. Namun itu pun bergantung pada perilaku masyarakat.</p>\r\n\r\n<p> \"Saya pikir itu adalah harapan bahwa perilaku umum entah bagaimana menuju situasi di mana kita memiliki begitu banyak kekebalan dalam populasi sehingga kita tidak akan lagi melihat epidemi yang sangat mematikan,\" kata Sebastian Funk, ahli epidemiologi di London School of Hygiene & Tropical Medicine.</p>\r\n\r\n<p> Ditambahkan olehnya, transisi ke endemisitas, atau \"hidup berdampingan dengan virus\" tanpa batasan dan perlindungan, sulit untuk dimodelkan dengan akurasi apa pun.</p>\r\n\r\n<p> Itu sebagian karena bahkan model penyakit terbaik pun berjuang untuk membuat perkiraan yang masuk akal setelah beberapa minggu ke depan. Itu juga karena endemisitas mencerminkan seruan penilaian tentang berapa banyak kematian yang mau ditoleransi masyarakat sementara populasi global terus membangun kekebalan.</p>\r\n\r\n<p> Bagi Mark Woolhouse, ahli epidemiologi penyakit menular di University of Edinburgh, Inggris, COVID-19 benar-benar akan menjadi endemik hanya ketika sebagian besar orang dewasa terlindungi dari infeksi parah karena mereka telah beberapa kali terpapar virus saat anak-anak, sehingga telah mengembangkan kekebalan alami.</p>\r\n\r\n<p> \"Tentunya hal itu akan memakan waktu beberapa dekade, dan itu berarti banyak orang tua saat ini (yang tidak terpapar saat anak-anak) akan tetap rentan dan mungkin memerlukan vaksinasi lanjutan,\" sebutnya.</p>\r\n\r\n<p> Strategi itu juga memiliki kekurangan lainnya. Beberapa dari mereka yang terpapar saat anak-anak akan mengembangkan COVID dalam waktu lama. Ini pun bergantung pada seperti apa anak-anak terus menunjukkan tingkat penyakit parah yang jauh lebih rendah saat varian berkembang.</p>\r\n\r\n<p> \"Tidak ada jaminan bahwa varian berikutnya akan lebih ringan, tetapi tampaknya polanya seperti yang terlihat sejauh ini. Virus ini semakin ringan dengan setiap iterasi,\" tutupnya.</p>\r\n', 'Inet', 'Rachmatunnisa ', '2022-02-03'),
(29, 'pndhagama1.jpg', NULL, NULL, 'Norman Kamaru Heboh Lagi: Isu Pindah Agama hingga Bertato', '<p> Nama Norman Kamaru muncul lagi. Dia tenar lewat joget Chaiyya Chaiyya dan membuat heboh karena beraksi menggunakan seragam polisi hingga membuat netizen Indonesia terpukau.\r\nSayangnya ketenaran Norman Kamaru hanya seumur jagung. Janji mulus berada di industri hiburan tak membuat kariernya terus melesat.</p> \r\n\r\n<p> Norman Kamaru sampai melepaskan profesi polisi yang didapatkan dengan susah payah. Dahulunya, ia adalah anggota Brimob Polda Gorontalo.</p> \r\n\r\n<p> Di awal 2022, Norman Kamaru kembali membuat heboh dengan isu ganti nama. Ada 3 kehebohan lain Norman Kamaru yang membuat namanya kembali diberitakan, seperti dirangkum detikcom:</p> \r\n\r\n<p> 1. Isu Pindah Agama\r\nIsu pindah agama yang juga mencuat setelah Norman Kamaru kembali diberitakan. Penampilannya berubah drastis itu yang juga menjadi sorotan.Soal pindah agama, Norman Kamaru punya cara untuk menjawab.Dia memperlihatkan foto istrinya, Jhasmine Titis yang menggunakan hijab.\"Nih bini gw INGET turunan ARAB BANTEN ya... Mikir sendiri yaa gue males jelasin itu berita,\" jawab Norman Kamaru dan men-tag akun sang istri.</p> \r\n\r\n<p> 2. Ganti Nama\r\nNama Norman Kamaru itu berubah menjadi Onca Marthinus. Hal tersebut terlihat di akun Instagram pribadinya. Dia pun menjelaskan mengenai kabar mengganti nama dan mengklarifikasinya kepada netizen.Onca Marthinus ternyata adalah gabungan dari singkatan nama dan marganya. Onca adalah singkatan dari namanya.\"ONCA (singkatan dari OmaN Camaru / nOrmaN CAmaru),\" jelasnya.\"MARTHINUS (itu marga / nama belakang mamah gw ,,, mamah gw orang Ambon dan marganya MARTHINUS),\" sambung Norman Kamaru.Norman Kamaru menegaskan dirinya tidak berganti nama.\"JELAS GUYS?? so... GW GAK GANTI NAMA, ITU SINGKATAN DARI NAMA GW YA..!!\" tegasnya.</p> \r\n\r\n<p> 3. Tato di Tubuh\r\nPenampilan Norman Kamaru pun terlihat berubah sejak awal tak lagi menjadi anggota polisi. Dia membuat tato di lengan kanan dan kirinya karena mengaku kesal dipecat jadi polisi.Norman Kamaru kecewa karena merasa tidak melakukan kesalahan, tapi dipecat. Dia tak menyangka popularitas di dunia hiburan merenggut cita-citanya sebagai polisi.Norman Kamaru membuat tato ikan koi dan tribal. Tato ikan koi dipercaya Norman akan membawa banyak keberuntungan. Sedangkan tato tribal mencerminkan sakit hati dirinya.Terlihat juga ada tato bergambar tengkorak di bagian lengan kanannya.</p> ', 'Hot', 'Tim Detikhot  ', '2022-02-03'),
(30, 'doping1.jpg', NULL, NULL, 'JADA Beri Lampu Hijau, Indonesia Tunggu Kabar Baik soal Sanksi Doping  Baca artikel detiksport, ', '<p> Upaya Gugus Tugas untuk menyelesaikan sanksi Badan Anti-Doping Dunia (WADA) kian nyata. Terlebih, Badan Anti-Doping Jepang, yang ditugaskan melakukan asistensi kepada LADI selama masa sanksi telah memberikan lampu hijaunya.</p> \r\n<p> Wakil Ketua LADI (Lembaga Anti-Doping Indonesia), anggota Gugus Tugas, Rheza Maulana menyebut bahwa progres positif terus ditunjukkan Indonesia untuk mendapatkan status compliance (patuh) terhadap WADA (World Anti-Doping Agency) Code.</p> \r\n\r\n<p> Selain merampungkan Anggaran Dasar/Anggaran Rumah Tangga (AD/ART) dan telah menempati kantor baru di Jakarta Selatan, kini LADI dipastikan telah merampungkan TDP 2022.</p> \r\n\r\n<p> \"Alhamdulillah tadi pagi, JADA memberikan acceptance terhadap TDP kami. Ini merupakan kerja keras yang dilakukan dalam satu-dua bulan terakhir karena TDP tahun ini kami buat dengan formula baru yang memenuhi standar WADA,\" kata Rheza, dalam keterangan tertulis Selasa (1/2/2022).</p> \r\n\r\nIa menjelaskan, JADA (Japan Anti-Doping Agency) tak sekadar menyetujui TDP 2022 tapi juga mengizinkan LADI melaksanakan TDP yang telah disetujui secara profesional dan independent.\r\n\r\n<p> \"JADA juga meminta untuk di-remove (hapus) dari akun LADI. Selama ini karena JADA yang melakukan asistensi, mereka masuk dalam akun kami untuk memantau semua proses yang dilakukan LADI. Mereka juga sudah mengirimkan invoice terakhir, dalam artian sudah selesai pengawasan terhadap LADI dan kami sudah bayarkan,\" kata Rheza.</p> \r\n\r\n<p> Setelah mendapat lampu hijau JADA, Rheza menjelaskan kini pihaknya tinggal menunggu kabar baik WADA terkait pembebasan sanksi terhadap LADI.</p> \r\n\r\n<p> \"JADA sudah mengatakan, Indonesia sudah bisa sendiri (melaksanakan WADA Code) mulai dari sekarang. Dalam waktu dekat, semoga akan ada surat resmi dari Montreal (Markas Besar WADA) terkait hal tersebut,\" kata Rheza.</p> \r\n\r\n<p> Sebagai informasi, WADA menjatuhkan sanksi selama satu tahun terhadap LADI karena dinilai non-compliance terhadap WADA Code pada 7 Oktober 2021. Imbas sanksi tersebut, Merah Putih tak bisa berkibar takala atlet Indonesia naik podium. Tak cuma itu, nasib Indonesia menjadi tuan rumah sejumlah event seperti ANOC World Beach Games serta ASEAN Para Games pun harus menunggu sanksi WADA terhadap LADI dicabut.</p> \r\n\r\n<p> Ketua Gugus Tugas, ex-officio Ketua Komite Olimpiade Indonesia (NOC Indonesia), Raja Sapta Oktohari bersyukur misi akselerasi bisa selesai dalam waktu empat bulan. Ia mengajak seluruh masyarakat Indonesia untuk berselebrasi karena Merah Putih bisa berkibar lagi.</p> \r\n\r\n<p> \"Seperti yang sudah pernah saya sampaikan, kita tinggal menunggu kabar resmi WADA untuk mengibarkan Merah Putih pada Februari ini. Mari kita bersama-sama mengobarkan kebahagiaan kita karena Merah Putih dapat berkibar lagi. Saya mengajak seluruh masyarakat untuk mengunggah foto di media sosial sembari mengibarkan bendera Merah Putih. Kita sebarkan kepada dunia bahwa Indonesia mampu,\" kata Okto, sapaan karib Raja Sapta.</p> \r\n\r\n', 'Sport', 'Mercy Raya ', '2022-02-01'),
(31, 'mknn1.jpg', NULL, NULL, 'Cegah Omicron! 7 Makanan Tinggi Vitamin B6 Ini Bisa Tingkatkan Imunitas  Baca artikel detikfood, ', '<p> Virus Corona yang bermutasi menjadi varian Omicron begitu berbahaya. Konsumsi tujuh makanan tinggi vitamin B6 ini diungkapkan ahli mampu meningkatkan imunitas dan cegah infeksi virus.\r\nPada masa pandemi banyak sekali keluhan yang dirasakan oleh masyarakat. Mulai dari penyakit bawaan yang menjadi parah atau bahkan penyakit pencernaan yang muncul karena keterbatasan gerak di luar ruangan saat pandemi.</p> \r\n\r\n<p> Untuk mengatasi permasalahan kesehatan tersebut, ada tujuh jenis makanan kaya vitamin B6 atau dikenal juga dengan istilah pyridoxine yang disarankan ahli. Vitamin B6 memiliki peran penting untuk mengatasi beberapa kondisi seperti mengelola mood atau suasana hati hingga memecah protein dengan lebih efisien.</p> \r\n\r\n<p> Selain itu, vitamin B6 juga dipercaya mampu meningkatkan imunitas tubuh seseorang terutama pada masa pandemi. Ancaman mutasi virus yang semakin berkembang tentunya harus diatasi dengan konsumsi nutrisi yang cukup untuk melindungi kesehatan tubuh.</p> \r\n\r\n<p> Mengutip melalui Food NDTV (13/11) ada 7 makanan tinggi vitamin B6 yang disarankan ahli untuk dikonsumsi guna memperkuat imunitas:</p> \r\n\r\n<p> 1. Wortel\r\nSangat kaya akan vitamin B6, wortel mudah dijumpai pada berbagai musim termasuk musim dingin atau penghujan. Wortel juga cukup mudah untuk diolah dan ditambahkan ke dalam menu makanan sehari-hari.\r\nSebuah wortel berukuran sedang diketahui memiliki kandungan vitamin B6 yang setara dengan segelas susu. Ditambah wortel juga memiliki kandungan serat dan vitamin A yang tinggi yang baik untuk menjaga kelancaran sistem pencernaan dalam tubuh.</p> \r\n\r\n<p> 2. Susu\r\nBukan hanya kandungan kalsiumnya yang baik untuk tulang, susu juga memiliki vitamin B6 yang memberi banyak manfaat kesehatan. Mulai dari mengatasi depresi hingga memperkuat pertahanan imunitas tubuh pada masa perkembangan varian virus Omicron yang berbahaya.\r\nMinum susu setiap hari juga sangat direkomendasikan bagi siapapun dan dalam usia berapapun. Susu juga bisa dinikmati dengan banyak cara, misalnya sebagai campuran mangkuk sereal hingga diminum langsung saat sega</p> \r\n\r\n<p> 3. Pisang\r\nDikenal sebagai superfood, pisang memiliki kandungan nutrisi yang padat dan baik jika ingin dikonsumsi setiap harinya. Pisang juga seringkali dipilih menjadi camilan sehat yang banyak digemari orang. \r\nDiperkaya dengan kandungan potasiumnya yang tinggi dan dapat memicu produksi energi ternyata ada juga kandungan nutrisi lain seperti vitamin B6, beberapa jenis antioksidan hingga serat. Bisa dinikmati sebagai camilan, konsumsi pisang cocok untuk membantu memperkebal daya tahan tubuh dalam melawan virus dan penyakit.</p>\r\n\r\n<p> 4. Bayam\r\nSayuran berdaun hijau yang pekat warnanya ini ternyata punya banyak manfaat kesehatan. Bayam diperkaya dengan zat besi, folat, hingga kandungan potasiumnya yang cukup tinggi.\r\nBisa didapatkan dalam berbagai musim, bayam juga menjadi menu makanan alternatif yang cocok untuk melengkapi kebutuhan vitamin B6 harian. Tidak hanya membantu produksi energi konsumsi bayam juga dapat memberikan imunitas yang lebih kuat untuk melawan virus.</p> \r\n\r\n<p> 5. Hati Ayam\r\nBanyak digemari, ternyata hati ayam bukan sekadar jeroan atau organ dalam dari seekor ayam yang lezat saja. Hati ayam diungkapkan oleh ahli memiliki beberapa kandungan penting yang bisa dikonsumsi untuk mendapatkan beberapa khasiat kesehatan tertentu.\r\nHati ayam mengandung vitamin B6 yang tinggi dan dilengkapi dengan folat serta zat besi. Konsumsi hati ayam secara rutin dipercaya mampu mengatasi anemia hingga meningkatkan imunitas dari kandungan vitamin B6 yang dimilikinya.</p> \r\n\r\n<p> 6. Telur\r\nMenjadi bahan makanan yang mudah untuk didapatkan, telur tidak sebaiknya menjadi menu yang dikesampingkan atau cadangan saja. Konsumsi telur secara rutin setiap hari dalam batas tertentu dipercaya mampu memberikan manfaat kesehatan yang sangat baik.\r\nTelur juga cukup mudah untuk diolah dan dinikmati. Misalnya telur ceplok, telur dadar, omelette atau bahkan hanya sekadar direbus jika ingin diolah lebih sehat. Salah satu cara memperkuat imunitas juga bisa dilakukan dengan konsumsi telur pada saat sarapan secara rutin.</p> \r\n\r\n<p> 7. Kacang Polong\r\nWalaupun memiliki ukuran yang kecil ternyata kacang polong menyimpan manfaat kesehatan yang padat melalui kandungan nutrisinya. Kacang polong diungkapkan oleh ahli mengandung kadar vitamin B6 yang sangat bagus dan bisa diolah dengan berbagai cara yang disukai.\r\nMenambahkan kacang polong pada mangkuk salad atau pelengkap menu utama pada piring makan. Kandungan vitamin B6-nya yang cukup tinggi dipercaya oleh ahli mampu memperkuat imunitas terutama untuk menghalau virus seperti Omicron yang menyerang tubuh.</p> \r\n', 'Food', 'Diah Afrilian', '2022-02-02'),
(32, 'omicron2.jpg', NULL, NULL, 'DKI Digempur Omicron, Antrean Drive Thru Tes COVID-19 di Jaktim Mengular ', '<p> Meningkatnya kasus COVID-19 di Indonesia mulai berdampak terhadap antrean di fasilitas tes swab COVID-19. Beberapa fasilitas melaporkan lonjakan pengunjung, bahkan ada yang sampai nyaris tiga kali lipat.\r\nSalah satunya tempat tes drive thru swab antigen/PCR Swabku.com di Otista, Jatinegara, Jakarta Timur. Sebelum adanya kenaikan kasus COVID-19 karena Omicron tempat ini biasa melayani sekitar 100-150 orang per hari.</p> \r\n\r\n<p> Pemilik Swabku.com, Abdul Razak, menjelaskan kini pelanggan yang datang bahkan bisa sampai 400 orang lebih. Antrean kendaraan kadang sampai ke luar jalan.</p> \r\n\r\n<p> \"Iya mulai naik lagi sehari bisa sampai 300-400 orang. Naik tiga kali,\" ujar pria yang akrab disapa Zak ini saat ditemui detikcom di Otista, Kamis (3/2/2020).</p> \r\n\r\n<p> Untuk mengatasi antrean yang berlebih, Zak mengatakan diberlakukan penertiban dan penambahan tenaga ahli. Ini dilakukan agar tidak terjadi kemacetan.</p> \r\n', 'Health', 'Firdaus Anwar', '2022-02-03'),
(33, 'pesawat1.jpg', NULL, NULL, 'Aturan Baru, Pelaku Perjalanan Luar Negeri Wisata Tak Bisa Lewat Soetta  Baca artikel detiknews, ', '<p> Kementerian Perhubungan (Kemenhub) menerbitkan aturan baru soal pelaku perjalanan luar negeri. Kemenhub menyatakan pelaku perjalanan luar negeri untuk tujuan wisata hanya bisa masuk ke Indonesia dari beberapa bandara.\r\nAturan itu tertera dalam Surat Edaran (SE) Nomor 11 Tahun 2022 tentang Petunjuk Pelaksanaan Perjalanan Luar Negeri dengan Transportasi Udara pada Masa Pandemi COVID-19.</p> \r\n\r\n<p> Direktur Jenderal Perhubungan Udara Novie Riyanto menjelaskan SE Nomor 11 Tahun 2022 ini bertujuan melakukan pemantauan, pengendalian dan evaluasi demi mencegah peningkatan COVID-19 termasuk varian baru. Dia mengatakan pelaku perjalanan luar negeri yang berstatus Warga Negara Indonesia (WNI) dari luar negeri diizinkan memasuki Indonesia dengan tetap mengikuti protokol kesehatan ketat.</p> \r\n\r\n<p> \"Pemerintah juga memutuskan melakukan pembatasan sementara memasuki wilayah Indonesia, baik secara langsung maupun transit di negara asing diberlakukan bagi pelaku perjalanan luar negeri yang berstatus Warga Negara Asing (WNA) kecuali yang memenuhi kriteria. Dan SE ini berlaku efektif mulai tanggal 3 Februari 2022,\" kata Novie seperti dilihat dari situ Dirjen Perhubungan Udara Kemenhub, Senin (7/2/2022).</p> \r\n\r\n<p> Dia mengatakan ada beberapa kriteria WNA yang bisa melakukan perjalanan dengan transportasi udara di Indonesia. Pertama, WNA tersebut sesuai ketentuan dalam Peraturan Menteri Hukum dan Hak Asasi Manusia Nomor 34 Tahun 2021 tentang Pemberian Visa dan Izin Tinggal Keimigrasian Dalam Masa Penanganan Penyebaran COVID-19 dan Pemulihan Ekonomi Nasional. Kedua sesuai skema perjanjian (bilateral), seperti Travel Corridor Arrangement (TCA). Ketiga, mendapatkan pertimbangan/izin khusus secara tertulis dari Kementerian/Lembaga.</p> \r\n\r\n<p> Novie mengatakan seluruh pelaku perjalanan luar negeri wajib mengikuti ketentuan dan persyaratan yang ditentukan pemerintah, antara lain protokol kesehatan, menunjukkan kartu atau sertifikat (fisik maupun digital) telah menerima vaksin COVID-19 dosis lengkap minimal 14 hari sebelum keberangkatan. Pelaku perjalanan luar negeri juga wajib menunjukkan hasil negatif tes RT-PCR di negara/wilayah asal yang sampelnya diambil dalam kurun waktu maksimal 2x24 jam sebelum jam keberangkatan dan dilampirkan pada saat pemeriksaan kesehatan atau e-HAC Internasional di Indonesia.</p> \r\n\r\n<p> Dia mengatakan ada pembatasan pintu masuk yang diatur lewat SE No 11 Tahun 2022. WNI dan WNA pelaku perjalanan luar negeri dengan tujuan wisata hanya dapat melalui Bandar Udara I Gusti Ngurah Rai di Bali, Bandara Hang Nadim di Batam dan Bandar Udara Raja Haji Fisabilillah di Tanjung Pinang.</p> \r\n\r\n<p> Sedangkan bagi WNI dan WNA pelaku perjalanan luar negeri dengan tujuan selain wisata, dapat melalui bandara yang ditetapkan sebagai pintu masuk sesuai dengan peraturan perundang-undangan tentang Pintu Masuk, Tempat Karantina, dan Kewajiban RT-PCR Bagi Warga Negara Indonesia Pelaku Perjalanan Luar Negeri.</p> \r\n\r\n<p> \"Persyaratan bagi WNA pelaku perjalanan dengan tujuan wisata wajib menunjukkan kartu atau sertifikat vaksinasi COVID-19 (fisik maupun digital) dan hasil negatif tes RT-PCR, lalu wajib melampirkan Visa Kunjungan Singkat atau izin masuk lainnya sesuai peraturan perundangan yang berlaku. Mereka juga diminta menunjukan bukti kepemilikan asuransi kesehatan dengan nilai pertanggungan minimal USD 25.000 yang mencakup pembiayaan penanganan COVID-19 dan yang terakhir bukti konfirmasi pemesanan dan pembayaran (booking) tempat akomodasi dari penyedia akomodasi selama menetap di Indonesia,\" katanya.</p> \r\n\r\n', 'News', 'Haris Fadhil', '2022-02-07'),
(34, 'presiden-jokowi-4_1691.jpg', NULL, NULL, 'Jokowi Juga Minta WAG TNI-Polri Didisiplinkan: Saya Baca Itu  Baca artikel detiknews, \"Jokowi Juga Minta WAG TNI-Polri Didisiplinkan: Saya Baca Itu\"', '<p>Presiden Joko Widodo (Jokowi) meminta agar grup WhatsApp (WAG) di kalangan TNI-Polri didisiplinkan. Jokowi mengungkapkan dia membaca percakapan dalam WAG TNI-Polri.\r\n\"Juga hal-hal kecil tapi harus mulai didisiplinkan di WA group. Saya melihat (percakapan) di WA group (TNI-Polri), karena di kalangan sendiri, (dianggap) boleh, hati-hati,\" kata Jokowi.</p>\r\n\r\n<p>Hal itu disampaikan Jokowi kepada jajaran TNI-Polri dalam rapat pimpinan (rapim) TNI-Polri 2022 di Mabes TNI, Cilangkap, Jakarta Timur (Jaktim), Selasa (1/3/2022). Rapim TNI Polri 2022 mengusung tema \'TNI-Polri Siap Mendukung Pemulihan Ekonomi Nasional dan Reformasi Struktural\'.</p>\r\n\r\n<p>Jokowi mewanti-wanti jika percakapan di WAG yang tak seturut disiplin TNI-Polri dibiarkan terus-menerus. Dia mencontohkan salah satu percakapan yang dimaksud adalah soal penolakan IKN.</p>\r\n\r\n<p>\"Kalau seperti itu diperbolehkan dan diteruskan, hati-hati. Misalnya berbicara mengenai IKN (ibu kota negara), \'nggak setuju, IKN apa\'. (Kepindahan IKN) itu sudah diputuskan oleh pemerintah dan sudah disetujui oleh DPR,\" jelas Jokowi.</p>\r\n\r\n<p>Jokowi berkali-kali menekankan soal disiplin pada jajaran TNI-Polri tak bisa diperdebatkan. Jokowi mengaku percakapan yang menyimpang dari disiplin TNI-Polri di WAG itu dibacanya.</p>\r\n\r\n<p>\"Kalau di dalam disiplin TNI dan Polri, sudah tidak bisa diperdebatkan. Kalau di sipil, silakan. Apalagi di WA group dibaca gampang, saya baca itu,\" ungkap Jokowi.<p>\r\n\r\n<p>Jokowi mengingatkan penyimpangan kecil, jika dibiarkan, berpotensi menjadi penyimpangan besar. Menurut Jokowi, hal itu mengakibatkan TNI-Polri kehilangan kedisiplinannya.</p>\r\n\r\n<p>\"Hati-hati dengan ini. Dimulai dari hal yang kecil, nanti membesar, dan kita akan kehilangan kedisiplinan TNI maupun Polri. Karena disiplin tentara dan disiplin polisi itu berbeda dengan sipil dan dibatasi oleh aturan oleh pimpinan, itu saya ingatkan,\" tegas dia.</p>\r\n\r\n<p>Jokowi menyampaikan kepolisian dan militer di seluruh dunia memiliki aturan disiplin sendiri. Aturan yang dimaksud, semisal di kalangan militer, harus setia pada negara atau istilah yang dipakai Jokowi \'tegak lurus\'.</p>\r\n\r\n<p>\"Di seluruh dunia, yang namanya tentara itu harus punya yang namanya aturan sendiri. Kitab undang-undang hukum disiplin tentara, yang intinya, kalau kita lihat intinya, adalah kesetiaan tegak lurus. Saya baca-baca, \'Ini apa sih intinya\', kesetiaan tegak lurus,\" pungkas Jokowi.</p>\r\n', 'News', 'Wildan Noviansah', '2022-03-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `terbit` varchar(1) NOT NULL,
  `link` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `alias`, `terbit`, `link`, `logo`) VALUES
(20, 'News', 'N', '', 'kategori/news', 'far fa-newspaper'),
(21, 'Hot', 'H', '', 'kategori/hot', 'fab fa-hotjar'),
(22, 'Inet', 'I', '', 'kategori/inet', 'fab fa-internet-explorer'),
(23, 'Sport', 'Olahraga', '', 'kategori/sport', 'fas fa-futbol'),
(24, 'Oto', 'Oto', '', 'kategori/oto', 'fas fa-car-side'),
(25, 'Food', 'Makanan', '', 'kategori/food', 'fas fa-utensils'),
(26, 'Health', 'Kesehatan', '', 'kategori/health', 'fas fa-notes-medical');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id` int(20) NOT NULL,
  `artikel_id` int(20) NOT NULL,
  `user` varchar(255) NOT NULL,
  `isi_komentar` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id`, `artikel_id`, `user`, `isi_komentar`, `date_created`) VALUES
(15, 32, 'ririn', 'halo saya ririn', '2022-04-06 10:26:19'),
(17, 24, 'admin', 'p', '2022-05-13 13:54:06'),
(18, 28, 'admin', 'keren', '2022-05-13 14:26:37'),
(19, 24, 'user', 'keren ya', '2022-05-13 19:30:38'),
(20, 24, 'user', 'halo saya ririn', '2022-05-13 19:30:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role_id`) VALUES
(3, 'ririn', '123', 1),
(5, 'admin', '1234', 1),
(6, 'user', '1234', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
