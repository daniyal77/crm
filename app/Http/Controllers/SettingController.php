<?php

namespace App\Http\Controllers;

use App\Services\SettingService;

class SettingController extends Controller
{
    private SettingService $settingService;

    public function __construct()
    {
        $this->settingService = new SettingService();
    }

    public function general()
    {
        try {
            return view('setting.general');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

    public function pay()
    {
        try {
            return view('setting.payment');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }
    public function pwa()
    {
        try {
            return view('setting.pwa');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }  public function blog()
    {
        try {
            return view('setting.blog');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

}
