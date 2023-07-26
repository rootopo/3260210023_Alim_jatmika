<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>BAB 3</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <header class="banner">
        <!-- Header Anda -->
        <h1 class="stroke-text">Onii-chan Baka!</h1>
    </header>

    

    <nav>
        <!-- Navigasi Anda -->
        <ul>
            <li><a href="/profile">Halaman Profil</a></li>
            <li><a href="/experience">Halaman Pengalaman</a></li>
        </ul>
    </nav>

    <main>
        <!-- Konten Utama akan dirender di sini -->
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <!-- Footer Anda -->
        <p>Dibuat oleh Abbril Yudistira 3024</p>
    </footer>
</body>
</html>