<span class="d-block p-2 bg-primary text-white">
  <h3 style="text-align: center">Daftar Barang</h3>
</span><br>
<div class="container">
  <a class="btn btn-primary" href="/tambah-barang"> Tambah</a>
</div><br>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      text-align: center;
    }
    </style>
<div class="container">
  <div class="card border-dark mb-3">
  <table class="table">
  <thead class="thead-light">
    <tr>
    <th>No</th>
    <th>Kategori Barang</th>
    <th>Nama Barang</th>
    <th>Stok Barang</th>
    <th>Aksi</th>
    </tr>
  </thead>
    @if (empty($data))
        <tr >
            <td class="alert alert-info" role="alert" colspan="4">Data kosong</td>
        </tr>
    @endif
        @foreach($data as $d)
        <tbody>
        <tr> 
            <td>{{ $d->id}}</td>
            <td>{{ $d->kategori}}</td> 
            <td>{{ $d->nama}}</td>
            <td>{{ $d->stok}}</td>
            <td>
                <a class="btn btn-warning" href="/ubah-barang/{{$d->id}}">Ubah</a>
                <a class="btn btn-danger" href="/hapus-barang/{{$d->id}}">Hapus</a>
            </td>
        </tr>
        </tbody>
        @endforeach
  </table>
  </div>
</div>

<nav class="navbar fixed-bottom navbar-light bg-primary  text-white">
    <a class="navbar-brand">@Copyright Moh.Ichsan Maulana | 2021</a>
</nav>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  