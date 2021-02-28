@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <h1 class="container mt-2">Daftar Mahasiswa</h1>

    <div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NRP</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$mhs->nama}}</td>
                <td>{{$mhs->nim}}</td>
                <td>{{$mhs->email}}</td>
                <td>{{$mhs->jurusan}}</td>
                <td>
                    <a href="" class="btn btn-primary">edit</a>
                    <a href="" class="btn btn-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

@endsection
