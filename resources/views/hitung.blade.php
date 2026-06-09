<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Kalori Olahraga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    body { 
    font-family: Arial, sans-serif; 
    margin: 0; 
    background-color: #f4f4f9; 
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh; 
}

.container { 
    width: 100%;
    max-width: 400px; 
    background: white; 
    padding: 30px; 
    border-radius: 8px; 
    box-shadow: 0px 4px 15px rgba(0,0,0,0.05); 
    box-sizing: border-box;
}

.form-group { 
    margin-bottom: 15px; 
}

label { 
    display: block; 
    margin-bottom: 5px; 
    font-weight: bold; 
}

input, select, button { 
    width: 100%; 
    padding: 10px; 
    border: 1px solid #ccc; 
    border-radius: 4px; 
    box-sizing: border-box; 
}

button { 
    background-color: #28a745; 
    color: white; 
    font-size: 16px; 
    cursor: pointer; 
    border: none; 
    margin-top: 10px; 
    font-weight: bold;
}

button:hover { 
    background-color: #218838; 
}

#hasil { 
    margin-top: 20px; 
    font-size: 18px; 
    font-weight: bold; 
    color: #333; 
    text-align: center; 
}

h1 { 
    margin-top: 0; 
    margin-bottom: 20px; 
}
</style>
<body>
<div class="container">
    <h1 class="m-3">Hitung Kalori Olahraga</h1>
    
    <div class="form-group align-items-center justify-content-center">
        <label for="berat">Berat Badan (kg):</label>
        <input type="number" id="berat" placeholder="Contoh: 65">
    </div>

    <div class="form-group">
        <label for="olahraga">Pilih Olahraga:</label>
        <select id="olahraga">
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
        <input type="number" id="durasi" placeholder="Contoh: 30">
    </div>

    <button onclick="hitungKalori()">Hitung Kalori</button>

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

