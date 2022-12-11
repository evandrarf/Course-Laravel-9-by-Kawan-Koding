@extends('templates.default')

@php
$title = "Siswa";
$pretitle = "Edit Data";
@endphp

@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{route('students.update', $student->id)}}" method="POST">
      @csrf
      @method("PUT")
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="name" placeholder="Nama" value="{{$student->name}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" name="address" placeholder="Alamat" value="{{$student->address}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Nomor Telepon</label>
        <input type="text" class="form-control" name="phone_number" placeholder="Nomor Telepon"
          value="{{$student->phone_number}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Kelas</label>
        <input type="text" class="form-control" name="class" placeholder="Kelas" value="{{$student->class}}">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection
