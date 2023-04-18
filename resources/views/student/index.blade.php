@extends('student.app')

@section('content')
<div class="d-flex justify-content-between mb-2">
  <h4>Data Mahasiswa</h4>
  <a href="/student/add" class="btn btn-primary">Tambahkan Mahasiswa</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">
        
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    <tr>
      <th scope="row">{{$student -> id}}</th>
      <td>{{$student ->name }}</td>
      <td>{{$student ->email }}</td>
      <td>{{$student ->phone }}</td>
      <td>
      <a class="btn btn-warning" href="/">Edit</a>
        <a href="/student/delete/{{$student->id}}" class="btn btn-danger" href="/" onclick="confirm ('Are You Sure?')" >Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$students->links()}}
@endsection