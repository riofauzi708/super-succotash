<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $query = Employee::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->orWhere('phone', 'like', '%' . $request->search . '%')
                ->orWhere('address', 'like', '%' . $request->search . '%')
                ->orWhere('position', 'like', '%' . $request->search . '%');
        }

        switch ($request->sort) {
            case 'hired_at_asc':
                $query->orderBy('hired_at', 'asc');
                break;
            case 'hired_at_desc':
                $query->orderBy('hired_at', 'desc');
                break;
            case 'created_at_asc':
                $query->orderBy('created_at', 'asc');
                break;
            case 'created_at_desc':
                $query->orderBy('created_at', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        $employees = $query->paginate(10)->appends($request->query());

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'data' => $employees,
            ]);
        }

        return view('employees.index', compact('employees'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'position' => 'required|string|max:100',
            'hired_at' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->position = $request->position;
        $employee->hired_at = $request->hired_at;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('employees', 'public');
            $employee->image = $imagePath;
        }

        $employee->save();

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'data' => $employee,
            ]);
        }

        toastr()->timeOut(5000)->closeButton()->success('Data Pegawai Sukses Ditambahkan');

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::find($id);

        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::find($id);

        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'position' => 'required',
            'hired_at' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->position = $request->position;
        $employee->hired_at = $request->hired_at;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('employees', 'public');
            $employee->image = $imagePath;
        }

        $employee->save();

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'data' => $employee,
            ]);
        }

        toastr()->timeOut(5000)->closeButton()->success('Data Pegawai Berhasil Diubah');

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        toastr()->timeOut(5000)->closeButton()->success('Data Pegawai Sudah Dihapus');

        return redirect()->route('employees.index');
    }
}
