<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveFaq;
use App\Services\FaqService;

class SettingController extends Controller
{
    private FaqService $faqService;

    public function __construct()
    {
        $this->faqService = new FaqService();
    }

    /**
     * Maintenance
     * logo
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
     * sms
     * sms_providers
     * sms_key or login name and password just show melipayamak and kevenegar and ippanel
     * sms create  pattern
     * newsletter
     * recaptcha
     * mnews
     * custom css js
     * social link cms
     * payment pay
     * sitemap
     * font
     * color
     * sidebar-color
     * login header
     * footer menu cms
     * header menu cms
     * footer cms copy right
     * footer cms tag
     * create permission and role
     */


    public function index()
    {
        return view('faq.list');
    }

    public function create()
    {
        return view('faq.create');
    }

    public function store(SaveFaq $saveFaq)
    {
        try {
            $this->faqService->create($saveFaq->validated());
            return redirect()->back()->with('success', 'عملیات با موفقیت انجام شد!');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

    public function show($faq_id)
    {
        try {
            $faq = $this->faqService->find($faq_id, true);
            return view('faq.show', compact('faq'));
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

    public function delete($faq_id)
    {
        try {
             $this->faqService->delete($faq_id);
            return redirect()->back()->with('success', 'عملیات با موفقیت انجام شد!');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

    public function edit($faq_id)
    {
        try {
            $faq = $this->faqService->find($faq_id, true);
            return view('faq.edit', compact('faq'));
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }

    public function update(SaveFaq $saveFaq, $faq_id)
    {
        try {
            $this->faqService->update($saveFaq->validated(), $faq_id);
            return redirect()->back()->with('success', 'عملیات با موفقیت انجام شد!');
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }
    }
}
