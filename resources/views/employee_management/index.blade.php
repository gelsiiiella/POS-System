<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
</head>
<body>
    <h1>List of Employees</h1>
    <a href="{{ url('employee_management/create')}}" class="btn btn-primary float-end"> Add Employee </a>
   
    <table class="table table-bordered table-striped" style="border:2px">
    <thead>
        <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Picture</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employee as $staff)
            <tr>
                <td>{{ $staff->employee_id }}</td>
                <td>{{ $staff->employee_name }}</td>
                <td>{{ $staff->employee_username }}</td>
                <td>{{ $staff->employee_password }}</td>
                <td>
                    @if ($staff->employee_image)
                        <img src="{{ asset('storage/' . $staff->employee_image) }}" alt="{{ $staff->employee_name }}" width="50" height="50">
                    @endif
                </td>
                <td>
                    <a href="{{route('employee_management.edit', $staff->employee_id)}}" class="btn btn-success mx-2">Edit</a>
                     <form action="{{ route('employee_management.destroy', $staff->employee_id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mx-1" onclick="return confirm('Are you sure you want to remove this employee?')">Delete</button>
                        </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
