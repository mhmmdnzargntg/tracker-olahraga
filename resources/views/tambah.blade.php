<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}">

</head>
<body>
<section>
  <div class="container mt-4 bg-white p-4 rounded shadow-sm" style="max-width: 700px;">
    <form action="/olahraga" method="POST">

      @csrf

        <h1>Masukkan Data Olahraga</h1>
    <hr style="border: none; height: 1px; background-color: black;">
        <label for="basic-url" class="form-label mt-3 fw-bold">Masukkan Nama</label>
          <div class="input-group">
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama..." aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
          <label for="basic-url" class="form-label mt-3 fw-bold">Pilih Jenis Olahraga</label>
      <select class="form-select" name="jenis_olahraga" aria-label="Default select example" required>
        <option selected>Pilih jenis Olahraga</option>
        <option value="Berenang">Berenang</option>
        <option value="Bersepeda">Bersepeda</option>
        <option value="Lari Pagi / Jogging">Lari Pagi / Jogging</option>
        <option value="Bulu Tangkis">Bulu Tangkis</option>
        <option value="Sepak Bola / Futsal">Sepak Bola / Futsal</option>
        <option value="Senam / Aerobik">Senam / Aerobik</option>
        <option value="Gym / Workout">Gym / Workout</option>
      </select>
      </select>

        <label for="basic-url" class="form-label mt-3 fw-bold">Durasi (Menit)</label>
      <div class="input-group mb-3">
        <input type="text" name="durasi" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Contoh : 30 Menit" required>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="form-label fw-bold">Kalori (kkal)</label>
          <input type="text" name="kalori" class="form-control" placeholder="Contoh : 300" required>
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label fw-bold">Tanggal</label>
          <input type="text" name="tanggal" class="form-control" placeholder="25\05\2026" required>
        </div>
      </div> 
        <label for="basic-url" class="form-label fw-bold" required>Catatan (Opsional)</label>
      <div class="input-group">
        <textarea class="form-control" name="pesan" placeholder="Tambahkan Catatan..." aria-label="With text area" aria-describedby="basic-addon1"></textarea>
      </div>
          <button type="submit" class="btn4 m-3">Simpan Data</button>
          <a href="/olahraga/hitung" class="btn5 mt-5">Kalkulator Kalori</a>
          <button class="btn6" onclick="window.location.href='/olahraga'">⬅ Kembali</button>
        </form>
  </div>
</section>
</body>
</html>