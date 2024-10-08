@extends('layouts.main');

@section('content')
    <h4>Mahasiswa</h4>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $row )
                <tr>
                    <td>{{$row['npm']}}</td>
                    <td>{{$row['nama']}}</td>
                    <td>{{$row['tanggal_lahir']}}</td>
                    <td>{{$row['tempat lahir']}}</td>
                    <td>{{$row['email']}}</td>
                    <td>{{$row['hp']}}</td>
                    <td>{{$row['alamat']}}</td>
                    <td>{{$row['prodi']['nama']}}</td>
                    <td><a href="{{ route('mahasiswa.show', $row['id']) }}"
                    class="btn btn_primary btn-xs">Show</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection