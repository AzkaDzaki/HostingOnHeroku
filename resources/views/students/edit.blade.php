@extends('layout/main')

@section('title', 'Edit Mahasiswa')

@section('container')
    <h1 class="container mt-2">Edit Mahasiswa</h1>
    <div class="container">
      <form method="post" action="/students/{{$student->id}}">
        @method('patch');
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan nama" name="nama" value="{{$student->nama}}">
          @error('nama')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="nim" class="form-label">nim</label>
          <input type="text" class="form-control" id="nim" placeholder="Masukan nim" name="nim" value="{{$student->nim}}">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">email</label>
          <input type="text" class="form-control" id="email" placeholder="Masukan email" name="email" value="{{$student->email}}">
        </div>
        <div class="mb-3">
          <label for="jurusan" class="form-label">jurusan</label>
          <input type="text" class="form-control" id="jurusan" placeholder="Masukan jurusan" name="jurusan" value="{{$student->jurusan}}">
        </div>

        <button type="submit" class="btn btn-primary">Edit Data!</button>
      </form>
    </div>

@endsection
