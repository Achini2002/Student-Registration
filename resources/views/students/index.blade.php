<h2>Student List</h2>
<a href="{{route('students.create'_}}" class="">Add New Student</a>

@if (session('success'))
    <p>{{session ('success')}}</p>
    @endif

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->phone }}</td>
        <td>
            <a href="{{ rote('students.edit'}, $student->id)}">Edit</a>
            <form action="{{route('students.destroy', $student-> }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>