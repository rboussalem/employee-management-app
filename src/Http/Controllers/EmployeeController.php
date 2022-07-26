<?php

namespace Elcapitano\Employeemanagement\Http\Controllers;


use App\Http\Controllers\Controller;
use Elcapitano\Employeemanagement\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        
        $employees = Employee::all();
        return view('employees::index', ['employees'=> $employees]);
    }

    public function create()
    {
        return view('employees::create');
    }

    public function store(Request $request)
    {
        //$data = $request->only(['first_name', 'last_name', 'card_id', 'birth_date', 'email', 'adresse', 'job', 'job_date']);
        //Employee::create($data);
        $employee = new Employee;
        //$employee-> = $request->input('');
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->card_id = $request->input('card_id');
        $employee->birth_date = $request->input('birth_date');
        $employee->email = $request->input('email');
        $employee->adresse = $request->input('adresse');
        $employee->job = $request->input('job');
        $employee->job_date = $request->input('job_date');
        $employee->save();
        return redirect()->route('employees.index');
    }

    public function show($id)
    {
        return view('employees::show', ['employee' => Employee::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('employees::edit', ['employee' => Employee::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->card_id = $request->input('card_id');
        $employee->birth_date = $request->input('birth_date');
        $employee->email = $request->input('email');
        $employee->adresse = $request->input('adresse');
        $employee->job = $request->input('job');
        $employee->job_date = $request->input('job_date');
        $employee->save();

        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect()->route('employees.index');
    }
}
