<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="/assets/css/style.css">
</head>
<style>
  html {
  scroll-behavior: smooth;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}

nav {
   border-radius: 14px; 
    background: linear-gradient(135deg, #097956, #22c58b);
    padding: 20px;
    display: flex;
    align-items: center;
    color: white;
    font-family: sans-serif;
}

nav ul {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  list-style: none;
}

nav ul li a {
  text-decoration: none;
  font-size: 20px;
  padding: 10px 15px;
  color: black;
  font-weight: 500;
  transition: 0.2s;
}

/* fix hover */
nav ul li a:hover {
  color: black;
}

navbar brand {
  color: white;
}

.card1 {
  border-radius: 14px;
  background: linear-gradient(to right, rgb(196, 127, 0), rgb(122, 78, 0));
}
icon img {
  width: 40px;
  height: 40px;
}

.btn1 {
  background-color: #0F6E56;
  color: #ffffff;
  font-weight: normal;
  border: none;
  border-radius: 12px;
  padding: 6px 16px;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  white-space: nowrap;
  gap: 5px;
}

.btn1:hover {
  background-color: #004529;
  color: #ffffff;
  box-shadow: inset 0px 4px 6px rgba(0, 0, 0, 0.15);
  transform: translateY(1px);
}

.btn2 {
    background-color: #FDF5E6; 
    color: #5C3A21;           
    font-weight: normal;
    border: none;
    border-radius: 12px;     
    padding: 6px 16px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 5px;                 
}

.btn2:hover {
    background-color: #E6C280; 
    color: #5C3A21;            
    box-shadow: inset 0px 4px 6px rgba(0, 0, 0, 0.15); 
    transform: translateY(1px);
}

.btn3 {
    background-color: #FCEBEB;
  color: #501313;
  font-weight: normal;
  border: none;
  border-radius: 12px;
  padding: 6px 16px;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 5px;
}

.btn3:hover:hover {
  background-color: #EAADAD;
  color: #501313;
  box-shadow: inset 0px 4px 6px rgba(0, 0, 0, 0.15);
      transform: translateY(1px);
}
.btn4 {
  background-color: #0F6E56;
  color: white;
  font-weight: normal;
  border-radius: 12px;
  padding: 6px 16px;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 5px;
}
.btn4:hover:hover {
  background-color: #004529;
  color: white;
  box-shadow: inset 0px 4px 6px rgba(0, 0, 0, 0.15);
  transform: translateY(1px);
}
.btn5 {
  background-color: #8e9895;
  color: white;
  font-weight: normal;
  border-radius: 12px;
  padding: 6px 16px;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 5px;
}
.btn5:hover:hover {
  background-color: #a4a4a4;
  color: white;
  box-shadow: inset 0px 4px 6px rgba(0, 0, 0, 0.15);
  transform: translateY(1px);
}


</style>
<body>
<section>
  <div class="container mt-4 bg-white p-4 rounded shadow-sm" style="max-width: 700px;">
    <form action="/olahraga/{{ $olahraga->id }}" method="POST">

      @csrf
      @method('PUT')

        <h1>Edit Data Olahraga</h1>
    <hr style="border: none; height: 1px; background-color: black;">
        <label for="basic-url" class="form-label mt-3 fw-bold">Masukkan Nama</label>
          <div class="input-group">
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama..." aria-label="Username" aria-describedby="basic-addon1" value="{{ $olahraga->nama }}">
        </div>
<div class="mb-3">
    <label class="form-label small fw-bold text-secondary">Pilih Jenis Olahraga</label>
    <select name="jenis_olahraga" class="form-select" required>
        <option value="Berenang" {{ $data->jenis_olahraga == 'Berenang' ? 'selected' : '' }}>Berenang</option>
        <option value="Bersepeda" {{ $data->jenis_olahraga == 'Bersepeda' ? 'selected' : '' }}>Bersepeda</option>
        <option value="Lari Pagi / Jogging" {{ $data->jenis_olahraga == 'Lari Pagi / Jogging' ? 'selected' : '' }}>Lari Pagi / Jogging</option>
        <option value="Bulu Tangkis" {{ $data->jenis_olahraga == 'Bulu Tangkis' ? 'selected' : '' }}>Bulu Tangkis</option>
        <option value="Sepak Bola / Futsal" {{ $data->jenis_olahraga == 'Sepak Bola / Futsal' ? 'selected' : '' }}>Sepak Bola / Futsal</option>
        <option value="Senam / Aerobik" {{ $data->jenis_olahraga == 'Senam / Aerobik' ? 'selected' : '' }}>Senam / Aerobik</option>
        <option value="Gym / Workout" {{ $data->jenis_olahraga == 'Gym / Workout' ? 'selected' : '' }}>Gym / Workout</option>
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