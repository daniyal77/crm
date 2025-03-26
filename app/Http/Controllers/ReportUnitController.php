<?php

namespace App\Http\Controllers;

class ReportUnitController extends Controller
{
    public function index()
    {
        try {
            return view('report.performance');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }
}
