@extends('layout')
@section('content')

<h2>Edit Student</h2>

<form action="{{ route('students.update', $student->id)}}"
    method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <lable for="name" class="form-lable">Name :</lable>
        <input type="text" name="name" value="{{ $student->name}}" class="form-control">
    </div>

    <div class="mb-3">
        <lable for="email" class="form-lable">Email :</lable>
        <input type="email" name="email" value="{{ $student->email}}" class="form-control">
    </div>

    <div class="mb-3">
        <lable for="phone" class="form-lable">Phone:</lable>
        <input type="text" name="phone" value="{{ $student->phone}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-secondary">Update</button>
    <a href="{{route('students.index')}}" class="btn btn-primary">Back</a>
</form>

@endsection