<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];?> </title>
</head>
<body>
    <h1>Halaman User</h1>
    <p>Halo, nama saya <?= $data['nama']; ?>, saya seorang <?= $data['pekerjaan']; ?></p>
</body>
</html> -->

<div class=”container text-center mt-4">
 <h1>Halaman User</h1>
 <img src="<?= BASE_URL; ?>/img/Profile.png" class="rounded-circle shadow">
 <p>Halo, nama saya <?= $data['nama']; ?>, saya seorang <?= $data['pek
erjaan']; ?></p>
</div