<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pesan Kontak</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 30px;">
    <div style="max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 8px;">
        <h2>Pesan dari Website CV Putra Jaya Sentosa</h2>
        <p><strong>Nama:</strong> {{ $data['nama'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>No. Telepon:</strong> {{ $telp }}</p>
        <p><strong>Judul:</strong> {{ $data['judul'] }}</p>
        <p><strong>Pesan:</strong><br>{{ $data['pesan'] }}</p>
        <hr>
        <p style="font-size: 13px; color: #999;">Email ini dikirim otomatis dari formulir kontak website.</p>
    </div>
</body>
</html>
