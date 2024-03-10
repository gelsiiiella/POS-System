<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif

    <div class="container">
        <form action="{{route('employee_management.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="sample">
                <label>Employee ID</label>
                <input type="text" name="employee_id" />
                @error('employee_id')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="sample">
                <label>Employee Name</label>
                <input type="text" name="employee_name"/>
                @error('employee_name')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="sample">
                <label>User Name</label>
                <input type="text" name="employee_username"/>
                @error('employee_username')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="sample">
                <label>Password</label>
                <input type="text" name="employee_password"/>
                @error('employee_password')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            
            <div class="sample">
                <label>Image</label>
                <input type="file" name="employee_image" accept="image/*">
                @error('employee_image')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="sample">
                <button type="submit" class="btn btn-primary">Save </button>
            </div>
    </div>
</body>
</html>