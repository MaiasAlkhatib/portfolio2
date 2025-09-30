<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // عرض كل الموظفين
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    // عرض فورم إنشاء موظف جديد
    public function create()
    {
        return view('employees.create');
    }

    // تخزين موظف جديد
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')
                         ->with('success', 'Employee created successfully.');
    }

    // عرض موظف واحد
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    // عرض فورم التعديل
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    // تحديث موظف
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')
                         ->with('success', 'Employee updated successfully.');
    }

    // حذف موظف
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
                         ->with('success', 'Employee deleted successfully.');
    }
}
