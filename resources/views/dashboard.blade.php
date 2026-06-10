<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    background: linear-gradient(#097956, #22c58b);
    padding: 20px;
    display: flex;
    align-items: center;
    color: white;
    font-family: sans-serif;
}
.nav-bawah { 
    background: linear-gradient(#097956, #22c58b);
    border-radius: 14px 14px 0 0;
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
.badge-lari {
    background-color: #e2f4ee;
    color: #09593f;            
    font-weight: bold;                    
    padding: 6px 16px;                    
    border-radius: 12px;                 
    display: inline-block;               
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

.table-container {
    border: 1px solid #000000;
    overflow: hidden; 
    background-color: white;
    border-radius: 0 0 14px 14px;
}

.table-custom, .table-custom th, .table-custom td {
    border: 1px solid #000000 !important;
}

  </style>
<body>
<div class="container">
<nav class="navbar navbar-light mt-3">
  <div class="container">
    <a class="navbar-brand text-white" href="#">
      <img src="{{ asset('img/strava.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Tracker Olahraga Harian
    </a>
  </div>
</nav>
</div>
    <div class="container">
  <div class="row mt-4">
    <div class="col-md-4 mb-3">
      <div class="card text-white border-0" style="border-radius: 14px; background: linear-gradient( #097956, #22c58b);">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
              <img src="{{ asset('img/calendar.png') }}" alt="" width="40" height="40" class="d-inline-block align-text-top">
            <h4 style="margin-left: 5px;">Total Sesi</h4>
          </div>
          <h2 class="mt-3">{{ $totalSesi }} </h2>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card card1 text-white border-0">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <img src="{{ asset('img/apii.png') }}" alt="" width="40" height="40" class="d-inline-block align-text-top">
            <h4 style="margin-left: 5px;">Total Kalori</h4>
          </div>
          <h2 class="mt-3">{{ number_format($totalKalori, 0, ',', '.') }} kkal</h2>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card text-white border-0" style="border-radius: 14px; background: linear-gradient(to right, rgb(74, 154, 224), rgb(26, 95, 168));">
        <div class="card-body">
          <div class="icon d-flex align-items-center">
            <img src="{{ asset('img/jam.png') }}" alt="" width="40" height="40" class="d-inline-block align-text-top">
          </div>
          <h2 class="mt-3">{{ $totalDurasi }} Menit</h2>
        </div>
      </div>
    </div>
  </div>
<!-- NAVBAR DATA OLAHRAGA -->
<section class="mt-4">
<nav class="nav-bawah">
  <div class="container text-white">
    <a class="navbar-brand text-white" href="#">Data Olahraga</a>
    </div>
     <a href="/olahraga/create" class="btn btn1 btn-sm">
     ➕ 
     Tambah Data
        </a>
</nav>
</section>

<section>
  @if(session('sukses') || session('succes') || session('berhasil'))
    <div class="alert alert-success mt-3">
      {{ session('sukses') ?? session('succes') ?? session('berhasil') }}
    </div>
  @endif
  <div class="card border-0 shadow-sm mb-4">
    <div class="card-body p-0">
  <div class="table-container table-responsive">
    <table class="table text-center mb-0">
          <thead>
        <tr style="background-color: #D6D6D6">
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Olahraga</th>
            <th>Durasi (Menit)</th>
            <th>Kalori</th>
            <th>Tanggal</th>
            <th>Catatan</th>
            <th>Aksi</th> </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{ $loop->iteration }}</td> <td>{{ $d->nama }}</td>
            <td>
              <span class="badge-lari">{{ $d->jenis_olahraga }}</span>
            </td>
            <td>🕧{{ $d->durasi }} Menit</td>
            <td>🔥{{ $d->kalori }} kkal</td>
            <td>📅{{ $d->tanggal }}</td>
            <td>{{ $d->pesan }}</td> <td>
                <a href="/olahraga/{{ $d->id }}/edit" class="btn2 btn-warning btn-sm">Edit</a>
                <form action="{{ route('olahraga.destroy', $d->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn3 btn-danger" onclick="return confirm('Yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
  </div>
    </div>
  </div>
</section>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
