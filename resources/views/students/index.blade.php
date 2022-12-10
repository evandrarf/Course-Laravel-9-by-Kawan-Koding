@extends('templates.default')

@php
$title = "Siswa";
$pretitle = "Semua Data";
@endphp

@push('page-action')
<a href="{{route('students.create')}}" class="btn btn-primary">Tambah Data</a>
@endpush

@section('content')
<h1>Student</h1>
<div class="card">
  <div class="table-responsive">
    <table class="table table-vcenter card-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Class</th>
          <th class="w-1"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
        <tr>
          <td>{{$student->name}}</td>
          <td class="text-muted">
            {{$student->address}}
          </td>
          <td class="text-muted">{{$student->phone_number}}</td>
          <td class="text-muted">
            {{$student->class}}
          </td>
          <td>
            <a href="#">Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
