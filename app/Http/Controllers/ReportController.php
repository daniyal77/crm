<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveFaq;
use App\Services\FaqService;
use App\Services\SettingService;

class ReportController extends Controller
{
    private SettingService $settingService;

    public function __construct()
    {
        $this->settingService = new SettingService();
    }

    public function index()
    {
        try {
            $this->settingService->create($saveFaq->validated());
            return redirect()->back()->with('success', 'عملیات با موفقیت انجام شد!');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

}
