<!DOCTYPE html>
<html>
<head>
    <title>Daftar Smartphone</title>
</head>
<body>
    <h1>Pratikum Pertemuan 4</h1>
    <table border="1"> <!- border untuk membuat garis pada tabel -->
        <tr>
            <th colspan="5">Data Mahasiswa</th> <!-- colspan untuk menggabungkan beberapa kolom menjadi satu -->

        <tr> <!-- tr untuk membuat baris pada tabel -->
            <th>No</th> <!-- th untuk membuat judul kolom pada tabel -->
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>foto</th>
        </tr>

        <tr>
            <th>1</th>
            <td>Rizky</td> <!-- td untuk membuat kolom pada tabel -->
            <td>Jl. Merdeka No. 123</td>
            <td>20</td>
            <td><img src="../asset/foto/rizky.jpg" alt="Foto Rizky" width="100"></td>
        </tr>

        <tr>
            <th>2</th>
            <td>Ria Riani</td>
            <td>Jl. Sudirman No. 456</td>
            <td>22</td>
            <td><img src="../asset/foto/ria.jpg" alt="Foto Ria" width="100"></td>
        </tr>

    <table border="1" style="margin-top: 30px;">
        <tr>
            <th colspan="4">Daftar Smartphone</th>
     </tr>

        <tr>
            <th>No</th>
            <th>Nama Brand</th>
            <th>Gambar</th>
            <th>Keterangan</th>
        </tr>

        <tr>
            <td rowspan="3">1</td>
            <td rowspan="3">Apple</td>
            <td rowspan="3"><img src="../asset/foto/apple.png" alt="Foto Apple" width="100"></td>
            <td>IPhone 16 Pro Max</td>
        </tr>
        <tr>
            <td>Dengan desain titanium yang memukau, Kontrol kamera. <br> Dolby Vision 4K 120fps, Den chip A18 Pro</td>
        </tr>
        <tr>
            <td>Rp 20.000.000</td>
        </tr>

        <tr>
            <td rowspan="3">2</td>
            <td rowspan="3">Samsung</td>
            <td rowspan="3"><img src="../asset/foto/zflip.jpg" alt="Foto Samsung" width="100"></td>
            <td>Samsung Galaxy Z-Flip</td>
        </tr>
        <tr>
            <td>Hp Premium dengan layar besar, S.Pen,<br> kamera canggih dan peforma sangat mewah</td>
        </tr>
        <tr>
            <td>Rp 20.000.000</td>
        </tr>

        <tr>
            <td rowspan="3">3</td>
            <td rowspan="3">Vivo</td>
            <td rowspan="3"><img src="../asset/foto/vivo.jpg" alt="Foto Vivo" width="100"></td>
            <td>Vivo V20SE</td>
        </tr>
        <tr>
            <td>Hp kelas menengah dengan desain tipis, layar amoled yang memukau, <br> dan pengisian daya yang cepat</td>
        </tr>
        <tr>
            <td>Rp 3.000.000</td>
        </tr>
</table>

</body>
</html>