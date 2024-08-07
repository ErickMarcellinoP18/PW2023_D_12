<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get employee
        $employee = Employee::latest('id_employee')->paginate(10);
        //render view with posts
        return view('employee.index', compact('employee'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //Validasi Formulir
        $this->validate($request, [
            'employee_name' => 'required',
            'employee_phone' => 'required',
            'employee_position' => 'required',
            'employee_salary' => 'required',
        ]);

        // Create the employee record in the database
        Employee::create([
            'employee_name' => $request->employee_name,
            'employee_phone' => $request->employee_phone,
            'employee_position' => $request->employee_position,
            'employee_salary' => $request->employee_salary,
        ]);

        return redirect()->route('employee.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param int $id_employee
     * @return void
     */
    public function edit($id_employee)
    {
        $employee = Employee::findOrFail($id_employee);
        return view('employee.edit', compact('employee'));
    }

    /**
     * update
     *
     * @param mixed $request
     * @param int $id_employee
     * @return void
     */
    public function update(Request $request, $id_employee)
    {
        $employee = Employee::findOrFail($id_employee);

        $this->validate($request, [
            'employee_name' => 'required',
            'employee_phone' => 'required',
            'employee_position' => 'required',
            'employee_salary' => 'required',
        ]);


        $employee->employee_name = $request->employee_name;
        $employee->employee_phone = $request->employee_phone;
        $employee->employee_position = $request->employee_position;
        $employee->employee_salary = $request->employee_salary;
        $employee->save();

        return redirect()->route('employee.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    /**
     * destroy
     *
     * @param int $id_employee
     * @return void
     */
    public function destroy($id_employee)
    {
        $employee = Employee::find($id_employee);
        $employee->delete();
        return redirect()->route('employee.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
