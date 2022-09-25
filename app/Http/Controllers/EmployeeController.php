<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $data=Employee::create($request->all());
        $details = [
            'title'=>'Employee Registration With ',
            'name' =>$request->name,
            'phone' =>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
        ];
        Mail::to('16103358@gmail.com')->send(new \App\Mail\TestMail($details));

        return back();
    }
}
