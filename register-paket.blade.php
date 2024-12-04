<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Paket</title>
</head>
<body>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="/add-paket">
        @csrf
        <label for="nomor_resi">Nomor Resi:</label>
        <input type="text" id="nomor_resi" name="nomor_resi" required><br>

        <label for="pengirim">Pengirim:</label>
        <input type="text" id="pengirim" name="pengirim" required><br>

        <label for="penerima">Penerima:</label>
        <input type="text" id="penerima" name="penerima" required><br>

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="masuk">Masuk</option>
            <option value="keluar">Keluar</option>
        </select><br>

        <button type="submit">Tambah Paket</button>
    </form>
</body>
</html>