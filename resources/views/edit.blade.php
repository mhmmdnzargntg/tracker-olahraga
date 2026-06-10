<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<section>
  <div class="container bg-white p-4 p-md-5 rounded shadow" style="max-width: 600px; border-radius: 16px !important;">
    <form action="/olahraga/{{ $olahraga->id }}" method="POST">

      @csrf
      @method('PUT')

        <h1>Edit Data Olahraga</h1>
    <hr style="border: none; height: 1px; background-color: black;">
        <label for="basic-url" class="form-label mt-3 fw-bold">Masukkan Nama</label>
          <div class="input-group">
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama..." aria-label="Username" aria-describedby="basic-addon1" value="{{ $olahraga->nama }}">
        </div>
<div class="mt-3">
    <label class="form-label small fw-bold text-black">Pilih Jenis Olahraga</label>
    <select name="jenis_olahraga" class="form-select" required>
        <option value="Berenang" {{ $olahraga->jenis_olahraga == 'Berenang' ? 'selected' : '' }}>Berenang</option>
        <option value="Bersepeda" {{ $olahraga->jenis_olahraga == 'Bersepeda' ? 'selected' : '' }}>Bersepeda</option>
        <option value="Lari Pagi / Jogging" {{ $olahraga->jenis_olahraga == 'Lari Pagi / Jogging' ? 'selected' : '' }}>Lari Pagi / Jogging</option>
        <option value="Bulu Tangkis" {{ $olahraga->jenis_olahraga == 'Bulu Tangkis' ? 'selected' : '' }}>Bulu Tangkis</option>
        <option value="Sepak Bola / Futsal" {{ $olahraga->jenis_olahraga == 'Sepak Bola / Futsal' ? 'selected' : '' }}>Sepak Bola / Futsal</option>
        <option value="Senam / Aerobik" {{ $olahraga->jenis_olahraga == 'Senam / Aerobik' ? 'selected' : '' }}>Senam / Aerobik</option>
        <option value="Gym / Workout" {{ $olahraga->jenis_olahraga == 'Gym / Workout' ? 'selected' : '' }}>Gym / Workout</option>
    </select>
</div>
        <label for="basic-url" class="form-label mt-3 fw-bold">Durasi (Menit)</label>
      <div class="input-group mb-3">
        <input type="text" name="durasi" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Contoh : 30 Menit" value="{{ $olahraga->durasi }}">
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="form-label fw-bold">Kalori (kkal)</label>
          <input type="text" name="kalori" class="form-control" placeholder="Contoh : 300" value="{{ $olahraga->kalori }}">
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label fw-bold">Tanggal</label>
          <input type="text" name="tanggal" class="form-control" placeholder="25\05\2026" value="{{ $olahraga->tanggal }}">
        </div>
      </div> 
        <label for="basic-url" class="form-label fw-bold" required>Catatan (Opsional)</label>
      <div class="input-group">
        <textarea class="form-control" name="pesan" placeholder="Tambahkan Catatan..." aria-label="With text area" aria-describedby="basic-addon1"></textarea>
      </div>
          <button type="submit" class="btn4 m-3">Simpan Data</button>
<a href="/olahraga/hitung" class="btn5 mt-5">Kalkulator Kalori</a>
    </form>
  </div>
</section>
</body>
</html>