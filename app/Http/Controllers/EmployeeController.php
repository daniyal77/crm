<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index($file_number)
    {
        return redirect()->to("http://192.168.1.3:8096/printfreemessage.aspx?id=" . $file_number);
    }

    public function create()
    {
    }

    public function show()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }
}
