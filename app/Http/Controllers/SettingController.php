<?php

namespace App\Http\Controllers;

use App\Services\SettingService;
use Illuminate\Http\Request;

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
    }

    public function blog()
    {
        try {
            return view('setting.blog');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

    public function seo()
    {
        try {
            return view('setting.seo');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

    public function asset()
    {
        try {
            return view('setting.custom-css-js');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

    public function sms()
    {
        try {
            return view('setting.sms');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

    public function social()
    {
        try {
            return view('setting.social');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

    public function owner()
    {
        try {
            return view('setting.user');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }


    public function store(Request $request)
    {
        try {
            dd($request->all());
            return view('setting.user');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

}
