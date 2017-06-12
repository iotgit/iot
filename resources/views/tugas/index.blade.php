@extends('main')

@section('judul')
Daftar Tugas
@endsection

@section('content')
<h2>Daftar Tugas</h2>
  <p>Belajar laravel vroh</p>
  <a href="{{ url('tugas/create') }}" class="btn btn-success glyphicon glyphicon-plus"> Tambah</a>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Dsekripsi</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Hapus</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>sda</td>
        <td><button class="btn btn-primary glyphicon glyphicon-edit"> Edit</button></td>
        <td><button class="btn btn-danger glyphicon glyphicon-trash"> Hapus</button></td>
      </tr>
    </tbody>
  </table>
@endsection