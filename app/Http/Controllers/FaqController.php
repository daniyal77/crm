<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveFaq;

class FaqController extends Controller
{
    public function __construct()
    {
    }

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

        dd(request()->all());
    }

    public function show()
    {

    }

    public function delete()
    {

    }
    public function edit()
    {

    }
    public function update(SaveFaq $saveFaq)
    {

    }
}
