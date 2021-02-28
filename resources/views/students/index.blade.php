@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <h1 class="container mt-2">Daftar Mahasiswa</h1>

    <div class="container">
    <a href="/students/create" class="btn btn-primary my-3">Tambah Data</a>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <div class="container">
        <ul class="list-group">
            @foreach ($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->nama}}
                    <a href="/students/{{$student->id}}" class="btn btn-primary">Detail</a>
                </li>
            @endforeach
        </ul>
    </div>


@endsection
