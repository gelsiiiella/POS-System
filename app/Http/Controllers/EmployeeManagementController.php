<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee_Management;

class EmployeeManagementController extends Controller
{
    public function index() {
        $employee = Employee_Management::all();
        return view ('employee_management.index',compact('employee'));
    }

    public function create(){
        return view('employee_management.create');
    }

    public function store(Request $request){
        $request->validate([
            'employee_id' => 'required|max:20',
            'employee_name' => 'required|max:255|string',
            'employee_username' => 'required',
            'employee_password' => 'required',
            'employee_image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $imagePath = $request->file('employee_image')->store('employee_image','public');

        Employee_Management::create([
            'employee_id' => $request->employee_id,
            'employee_name'=> $request->employee_name,
            'employee_username'=> $request->employee_username,
            'employee_password'=> $request->employee_password,
            'employee_image'=> $imagePath
        ]);

        return redirect('employee_management/create')->with('status','New Employee Added');
    }

    public function edit($employee_id){
        $employee = Employee_Management::find($employee_id);
        return view('employee_management.edit',compact('employee'));
    }

    public function update(Request $request,$employee_id){
        $request->validate([
            'employee_id' => 'required|max:20',
            'employee_name' => 'required|max:255|string',
            'employee_username' => 'required',
            'employee_password'=> 'required',
            'employee_image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $imagePath = $request->file('employee_image')->store('employee_image','public');

        Employee_Management::findOrFail($employee_id)->update([
            'employee_id' => $request->employee_id,
            'employee_name'=> $request->employee_name,
            'employee_username'=> $request->employee_username,
            'employee_password'=> $request->employee_password,
            'employee_image'=> $imagePath
        ]);


        return redirect()->back()->with('status','Employee Information Updated');
    
    }
    public function destroy($employee_id){
        $employee = Employee_Management::find($employee_id);
        $employee -> delete();

        return redirect()->back()->with('status','Employee Removed');
    }


}
