<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="{{ 'assets/css/style.css' }}">
</head>
<body>
<div class="container">
<nav class="navbar navbar-light mt-3">
  <div class="container">
    <a class="navbar-brand text-white" href="#">
      <img src="{{ asset('assets/img/strava.png') }}"  alt="" width="30" height="24" class="d-inline-block align-text-top">
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
              <img src="{{ asset('assets/img/calendar.png') }}" alt="" width="40" height="40" class="d-inline-block align-text-top">
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
            <img src="{{ asset('assets/img/apii.png') }}" alt="" width="40" height="40" class="d-inline-block align-text-top">
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
            <img src="{{ asset('assets/img/jam.png') }}" alt="" width="40" height="40" class="d-inline-block align-text-top">
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
            <th>Durasi</th>
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
                  <button type="submit" class="btn3 btn-danger mt-2" onclick="return confirm('Yakin?')">Hapus</button>
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
