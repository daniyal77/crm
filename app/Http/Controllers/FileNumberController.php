<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileNumberController extends Controller
{
    public function show($file_number){
      return redirect()->to("http://192.168.1.3:8096/printfreemessage.aspx?id=" . $file_number);
    }
}
