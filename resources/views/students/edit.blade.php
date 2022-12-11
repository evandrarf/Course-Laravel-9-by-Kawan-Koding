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
        <input type="text" class="form-control @error('name')
        is-invalid
    @enderror" name="name" placeholder="Nama" value="{{old('name') ?? $student->name}}">
        @error('name')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control @error('address')
        is-invalid
    @enderror" name="address" placeholder="Alamat" value="{{old('address') ?? $student->address}}">
        @error('address')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Nomor Telepon</label>
        <input type="text" class="form-control @error('phone_number')
        is-invalid
    @enderror" name="phone_number" placeholder="Nomor Telepon"
          value="{{ old('phone_number') ??$student->phone_number}}">
        @error('phone_number')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Kelas</label>
        <input type="text" class="form-control @error('class')
        is-invalid
    @enderror" name="class" placeholder="Kelas" value="{{old('class') ??$student->class}}">
        @error('class')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection
