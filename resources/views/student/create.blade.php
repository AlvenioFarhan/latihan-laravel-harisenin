@extends('student.app')

@section('content')
<div class="d-flex justify-content-center fake-column align-item-center">
    <h4>Tambahkan Mahasiswa</h4>
</div>

<div class="d-flex justify-content-center fake-column align-item-center"image.png>
<form action="/student" method="POST" class="w-25 mt-3">
        @csrf 
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Insert Your Name">
    </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
    </div>
    
    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" name="phone" class="form-control" id="phone" placeholder="Insert Your Phone Number">
    </div>
    <button class= "btn btn-primary" type="submit">Save</button>
</form>
</div>

@endsection
