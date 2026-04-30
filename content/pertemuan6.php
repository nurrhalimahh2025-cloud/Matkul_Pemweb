<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 6</title>
    <link rel="stylesheet" href="../asset/style.css">

    <style>
    .container { 
        width: 450px; 
        margin: 40px auto; 
        background-color: white; 
        padding: 25px; 
        border-radius: 10px; 
        box-shadow: 0 4px 12px rgba(57, 57, 193, 0.12); 
    } 
 
    h1 { 
        text-align: center; 
        margin-bottom: 10px; 
        color: #222; 
    } 
 
    .deskripsi { 
        text-align: center; 
        color: #534141; 
        font-size: 14px; 
        margin-bottom: 25px; 
    } 
 
    .form-group { 
        margin-bottom: 15px; 
    } 
 
    .label { 
        display: block; 
        margin-bottom: 6px; 
        font-weight: bold; 
        color: #333; 
    } 
 
    input, 
    select, 
    textarea { 
        width: 100%; 
        padding: 10px; 
        border: 1px solid #bbb; 
        border-radius: 6px; 
        font-size: 14px; 
    } 
 
    input:focus, 
    select:focus, 
    textarea:focus { 
        outline: none; 
        border-color: #007bff; 
    } 
     
    .pilihan { 
        display: flex; 
        align-items: center; 
        margin-bottom: 8px; 
    } 
  
    .pilihan input { 
        width: auto; 
        margin-right: 8px; 
    } 
 
    .pilihan label { 
        margin: 0; 
        font-weight: normal; 
    } 
 
    button { 
        padding: 10px 16px; 
        border: none; 
        border-radius: 6px; 
        background-color: #de5ead; 
        color: white; 
        font-size: 14px; 
        cursor: pointer; 
    } 
 
    button:hover { 
        background-color: #eca0c2; 
    } 
 
    .reset { 
        background-color: #e79dd9; 
        margin-left: 8px; 
    }  
 
    .reset:hover { 
        background-color: #b52b9e; 
    } 
 
</style> 
</head> 
<body> 

    <div class="container">
        <h1>Form Data Mahasiswa</h1>
        <p class="deskripsi">Pengumpulan data mahasiswa semester 4</p>
        <form action="#" method="post" >
            <div class="form-grup">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-grup">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required>
            </div>
            <div class="form-grup">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="contoh@email.com" required>
            </div>
            <div class="form-grup">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <div class="form-group"> 
                <label>Jenis Kelamin</label> 
            <div class="pilihan"> 
                <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required> 
                <label for="laki">Laki-laki</label> 
            </div> 
            <div class="pilihan"> 
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan"> 
                <label for="perempuan">Perempuan</label> 
            </div> 
            </div> 
            <div class="form-group"> 
                <label>Minat Belajar</label> 
            <div class="pilihan"> 
                <input type="checkbox" id="html" name="minat" value="HTML"> 
                <label for="html">HTML</label> 
            </div> 
 
            <div class="pilihan"> 
                <input type="checkbox" id="css" name="minat" value="CSS"> 
                <label for="css">CSS</label> 
            </div> 
 
            <div class="pilihan"> 
                <input type="checkbox" id="javascript" name="minat" value="JavaScript"> 
                <label for="javascript">JavaScript</label> 
        </div> 
      </div> 
 
      <div class="form-group"> 
            <button type="submit">Kirim Data</button> 
            <button type="reset" class="reset">Reset</button> 
            </div>

        </form>

    
</body>
</html>