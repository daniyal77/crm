<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveFaq;
use App\Services\FaqService;

class FaqController extends Controller
{
    private FaqService $faqService;

    public function __construct()
    {
        $this->faqService = new FaqService();
    }

    public function index()
    {
        try {

            //use chace
            $result = $this->faqService->all();
            return view('faq.list', compact('result'));
        } catch (\Exception $e) {
            saveLogInFile($e);
            return redirect()->back()->with('error', 'مشکلی پیش آمد!');
        }

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

    public function search($faq_id)
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
