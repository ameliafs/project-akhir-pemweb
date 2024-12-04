<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Statistik Paket</title>
</head>
<body>
    <h1>Dashboard Admin</h1>
        <p>Paket masuk/keluar hari ini: {{ $status['today'] }}</p>
        <p>Paket masuk/keluar bulan ini: {{ $status['month'] }}</p>
        <p>Paket masuk/keluar tahun ini: {{ $status['year'] }}</p>
</body>
</html>