<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Kalori Olahraga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/hitung.css') }}">
</head>
<body>
<div class="container">
    <h1 class="m-3">Hitung Kalori Olahraga</h1>
    
    <div class="form-group align-items-center justify-content-center">
        <label for="berat">Berat Badan (kg):</label>
        <input type="number" id="berat" placeholder="Contoh: 65" required>
    </div>

    <div class="form-group">
        <label for="olahraga">Pilih Olahraga:</label>
        <select id="olahraga" required>
            <option value="6.0">Berenang</option>
            <option value="7.5">Bersepeda</option>
            <option value="7.0">Lari Pagi / Jogging</option>
            <option value="5.5">Bulu Tangkis</option>
            <option value="7.0">Sepak Bola / Futsal</option>
            <option value="6.5">Senam / Aerobik</option>
            <option value="6.0">Gym / Workout</option>
        </select>
    </div>

    <div class="form-group">
        <label for="durasi">Durasi (Menit):</label>
        <input type="number" id="durasi" placeholder="Contoh: 30" required>
    </div>

    <button class="btn1" onclick="hitungKalori()">Hitung Kalori</button>
    <button class="btn2" onclick="window.location.href='/olahraga/create'">Kembali</button>
    

    <div id="hasil"></div>
</div>

<script>
function hitungKalori() {
    let berat = parseFloat(document.getElementById('berat').value);
    let met = parseFloat(document.getElementById('olahraga').value);
    let durasi = parseFloat(document.getElementById('durasi').value);
    
    if (!berat || !durasi) {
        document.getElementById('hasil').innerHTML = "<span style='color:red;'>Mohon isi semua data!</span>";
        return;
    }

    let kaloriTerbakar = (met * 3.5 * (berat / 200)) * durasi;
    document.getElementById('hasil').innerHTML = `🔥 Kalori yang terbakar: ${kaloriTerbakar.toFixed(1)} kkal`;
}
</script>

</body>
</html>

