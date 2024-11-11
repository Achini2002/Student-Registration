<h2>Edit Student</h2>

<form action=""{{ route('students.update', $student->id)}}">
    method="post">

    @csrf
    <lable for="name">Name :</lable>
    <input type="text" name="name" value="{{ $student->name}}">
    <lable for="email">Email :</lable>
    <input type="email" name="email" value="{{ $student->email}}">
    <lable for="phone">Phone:</lable>
    <input type="text" name="phone" value="{{ $student->phone}}">
    <button type="submit">Update</button>
</form>