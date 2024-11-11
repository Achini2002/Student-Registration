<h2>Add New Student</h2>

<form action=""{{route('students.store') }}" method="POST">
    @csrf
    <lable for="Name">Name:</lable>
    <input type="text" name="name" placeholder="Name">
    <lable for="email">Email:</lable>
    <input type="email" name="email" placeholder="Email">
    <lable for="phone">Phone:</lable>
    <input type="text" name="phone" placeholder="Phone">
    <button type+"submit">Save</button>
</form>