<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="card">
        <div class="card-header">
          <h4>Tambah Buku Baru</h4>
        </div>
        @if ($errors->any())
        <div class="pt-3">
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
              @endforeach
            </ul>
          </div>
        </div>
        @endif
        <div class="card-body">
        <form action="{{ url('buku/'.$data->judul_buku) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="title">Judul Buku</label>
              <input type="text" class="form-control" name="judul_buku" value="{{ $data->judul_buku }}" id="title" >
            </div>
            <div class="form-group">
              <label for="author">Penulis</label>
              <input type="text" class="form-control" name="penulis" value="{{ $data->penulis }}" id="author" > 
            </div>
            <div class="form-group">
              <label for="publisher">Penerbit</label>
              <input type="text" class="form-control" name="penerbit" value="{{ $data->penerbit }}" id="publisher" >
            </div>
            <div class="form-group">
              <label for="year_published">Tahun Terbit</label>
              <input type="number" class="form-control" name="tahun_terbit" value="{{ $data->tahun_terbit}}" id="year_published" >
            </div class="">
            <input type="file" name="image" value="{{ $data->file_name }}">
            <div class="p-1">
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>