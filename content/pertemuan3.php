<!DOCTYPE html> <!-- menandakan bahwa ini adalah dokumen HTML5 -->
<html lang="id"> <!-- atribut lang untuk menentukan bahasa dokumen -->
<head> <!-- bagian head atau kepala untuk metadata dan informasi tentang dokumen -->
    <meta charset="UTF-8"> <!-- menentukan karakter encoding untuk dokumen agar dapat dibaca di web -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- memastikan halaman web responsif di berbagai perangkat -->

    <body style="font family : Arial, sans-serif; background-color: #f0f0f0; margin: 0; padding: 20px;"> <!-- bagian body untuk konten utama halaman, dengan CSS untuk tampilan -->

    <div style="width : 80%; margin : 40px auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"> <!-- container atau kotak utama dengan styling untuk tampilan yang lebih menarik -->
       
        <div style="display: flex; align-items: center; margin-bottom: 20px; border: 2px solid #ccc; padding: 10px; background-color: #f9f9f9; border-radius: 5px;"> <!-- header dengan flexbox untuk tata letak yang rapi, serta styling untuk tampilan yang lebih menarik -->
            <img src="foto/Logounsiq.jpg" alt="Logo" style="width: 60px; height: 60px; margin-right: 15px;"> <!-- gambar logo dengan atribut src untuk sumber gambar, alt untuk teks alternatif, dan styling untuk ukuran dan margin -->
            <div> <!-- div untuk teks header -->
                <h1 style="margin: 0; font-size: 26px; color: #333;">Selamat Datang di Mata Kuliah Pemrograman Web</h1> <!-- judul utama dengan styling untuk ukuran dan warna -->
                <h2 style="margin: 0; font-size: 20px; font-weight: normal; color: #666;">Pertemuan 2 : HTML Dasar</h2> <!-- subjudul dengan styling untuk ukuran, berat font, dan warna -->
            </div>
        </div>

            <div style="font-size:14px; margin-top:10px; text-align:center; border-bottom: 1px solid #ccc; padding-bottom: 15px;"> <!-- paragraf dengan styling untuk ukuran font, margin, teks rata tengah, dan garis bawah -->
            Mata kuliah ini memperkenalkan dasar-dasar pemrograman web menggunakan HTML, CSS dan JavaScript.
            <br> <!-- tag <br> untuk membuat baris baru -->
            Pada pertemuan ini, kita fokus pada struktur dan elemen dasar HTML.
            </div>

        <div style="font-size: 15px; margin-top: 10px;"> <!-- paragraf dengan styling untuk ukuran font dan margin -->
            HTML adalah bahasa markup yang digunakan untuk membuat struktur halaman web. Dengan HTML, kita bisa menampilkan teks, gambar, dan link secara terorganisir.
            untuk informasi lebih lengkap dari HTML, dapat kunjungi link berikut <a href="#" style="color: #007BFF; text-decoration: none;">Penjelasan HTML</a>. <!-- link dengan styling untuk warna dan tanpa garis bawah -->
        </div>

        <div style="margin-top:10px;"> <!-- div untuk bagian topik utama dengan margin atas -->
        <h3 style="font-size:18px; margin-bottom:10px;">Topik Utama Pertemuan Ini:</h3> <!-- subjudul dengan styling untuk ukuran font dan margin bawah -->
        <ul style="margin-left:10px;"> <!-- daftar tidak berurutan atau bunder item dengan styling untuk margin kiri -->
            <li>Struktur HTML</li> <!-- item daftar atau biar urut dengan tag <li> -->
            <li>Heading dan Paragraf</li>
            <li>List (Unordered dan Ordered)</li>
            <li>Link dan Gambar</li>
            <li>Tabel</li>
        </ul>
    </div>

    <div style="margin-top:10px;"> <!-- div untuk bagian langkah praktikum dengan margin atas -->
        <h3 style="font-size:18px; margin-bottom:10px;">Langkah Praktikum:</h3> <!-- subjudul dengan styling untuk ukuran font dan margin bawah -->
        <ol style="margin-left:10px;"> <!-- daftar berurutan atau angka dengan styling untuk margin kiri -->
            <li>Buat file index.php</li>
            <li>Tulis kode HTML</li>
            <li>Simpan dan buka di browser
                <ul style="margin-top:5px;"> <!-- daftar tidak berurutan atau bunder item dengan styling untuk margin atas -->
                    <li>buka xampp</li>
                    <li>nyalakan server</li>
                    <li>buka browser dengan url localhost/...</li>
                </ul>
            </li>
            <li>Verifikasi hasil</li>
        </ol>
    </div>

</div>

</body>
</head>
</html>

