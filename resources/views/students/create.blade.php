@extends('templates.default')

@php
$title = "Siswa";
$pretitle = "Tambah Data";
@endphp

@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{route('students.store')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="name" placeholder="Nama">
      </div>
      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" name="address" placeholder="Alamat">
      </div>
      <div class="mb-3">
        <label class="form-label">Nomor Telepon</label>
        <input type="text" class="form-control" name="phone_number" placeholder="Nomor Telepon">
      </div>
      <div class="mb-3">
        <label class="form-label">Kelas</label>
        <input type="text" class="form-control" name="class" placeholder="Kelas">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection
