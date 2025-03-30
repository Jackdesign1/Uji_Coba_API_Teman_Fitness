<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
</head>
<body>
    <h1>Company Profile</h1>
    <p>Nama: {{ $profile->name ?? 'Nama belum tersedia' }}</p>
    <p>Deskripsi: {{ $profile->description ?? 'Deskripsi belum tersedia' }}</p>
</body>
</html>