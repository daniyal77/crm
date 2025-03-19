<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveFaq;
use App\Services\FaqService;
use App\Services\SettingService;

class PermissionController extends Controller
{
    private SettingService $settingService;

    public function __construct()
    {
        $this->settingService = new SettingService();
    }

    /**
     * Maintenance
     * logo
     * favicon
     * name
     * phone
     * address
     * email
     * city
     * province
     * zip code
     * pwa
     * pwa-icon
     * pwa-enable
     * pwa-ThemeColor
     * pwa-BackgroundColor
     * pwa-StatusBar
     * pwa-Display
     * pwa-Orientation
     * pwa-direction
     * sms enabled
     * sms_providers
     * sms_key or login name and password just show melipayamak and kevenegar and ippanel
     * sms create  pattern
     * newsletter
     * mnews recaptcha
     * custom css js
     * social link cms
     * payment pay
     * sitemap
     * font  different user
     * color different user
     * sidebar-color different user
     * login header
     * footer menu cms
     * header menu cms
     * footer cms copy right
     * footer cms tag
     * create permission and role
     */


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
