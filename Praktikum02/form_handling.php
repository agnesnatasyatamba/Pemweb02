<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>

    <h1>Form Pendftaran Mahasiswa</h1>
    <form action="belajar_post.php" method="POST">
    <!-- Tipe Teks -->
        <label for="">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>

    <!-- Tipe Radio -->
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-Laki">
            <label for="">Laki-Laki</label>
        <input type="radio" name="jenis_kelamin" value="Perempuan">
        <label for="">Perempuan</label><br><br>

    <!-- tipe checkbox -->
        <label for="">Hobi</label><br>
        <input type="checkbox" name="hobi" value="Volly">
            <label for="checkbox">Volly</label><br>
        <input type="checkbox" name="hobi" value="Mendengar Musik">
            <label for="checkbox">Mendengar Musik</label><br>
        <input type="checkbox" name="hobi" value="Berenang">
            <label for="checkbox">Berenang</label><br><br>

    <!-- Tipe number -->
        <label for="">NIM</label><br>
        <input type="number" name="nim"><br>

    <!-- select -->
    <label for="Prodi">prodi</label><br>
    <select name="prodi">
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Bisnis Digital">Bisnis Digital</option>
    </select><br><br>

    <!-- button -->
    <button type="Submit">Kirim!</button>
    <button type="reset">Reset</button>
</form>
</body>
</html>