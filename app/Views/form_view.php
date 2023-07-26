<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Web</title>
    <link rel="stylesheet" href="style.css>
</head>
<body>
    <div class="container">
        <div class="main mt-5">
        <form method="post" action="<?php echo base_url('process-form'); ?>">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
            
            <label for="nim">NIM:</label>
            <input type="text" name="nim" id="nim" required>
            
            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" id="kelas" required>
            
            <label for="matakuliah">Matakuliah:</label>
            <input type="text" name="matakuliah" id="matakuliah" required>
            
            <label for="dosen">Dosen Pengampu:</label>
            <input type="text" name="dosen" id="dosen" required>
            
            <label for="asisten">Asisten Praktikum:</label>
            <input type="text" name="asisten" id="asisten" required>
            
            <button type="submit">Submit</button>
        </form>
        </div>
    </div>
</body>
</html>