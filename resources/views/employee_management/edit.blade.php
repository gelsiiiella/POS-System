<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee Information</title>
</head>
<body>
    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif

    <div class="container">
        <form action="{{ route('employee_management.update', $employee->employee_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="sample">
                <label>Employee ID</label>
                <input type="text" name="employee_id" value="{{ $employee->employee_id}}"/>
                @error('employee_id')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="sample">
                <label>Employee Name</label>
                <input type="text" name="employee_name" class="form-control" value="{{ $employee->employee_name}}"/>
                @error('employee_name')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="sample">
                <label>User Name</label>
                <input type="text" name="employee_username" class="form-control" value="{{ $employee->employee_username}}"/>
                @error('employee_username')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="sample">
                <label>Password</label>
                <input type="text" name="employee_password" class="form-control" value="{{ $employee->employee_password}}"/>
                @error('employee_password')<span class="text-danger">{{$message}}</span>@enderror
            </div>
          
            <div class="sample">
                <label>Image</label>
                <input type="file" name="employee_image" accept="image/*" class="form-control" value="{{ $employee->employee_image}}">
                @error('employee_image')<span class="text-danger">{{$message}}</span>@enderror
            </div>

            <div class="sample">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
    </div>
</body>
</html>