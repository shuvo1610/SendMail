<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class MailController extends Controller
{
        public function send()
        {

            $data = [
                'title'=>'Employee Registration With ',
                'name' =>$request->input('name'),
                'phone' =>$request->input('phone'),
                'email'=>$request->input('email'),
                'address'=>$request->input('address'),

            ];

        }
}
