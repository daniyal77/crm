<?php

namespace App\Http\Controllers;

class FaqController extends Controller
{
    public function index()
    {
        return view('faq.list');
    }

    public function create()
    {
        return view('faq.create');
    }

    public function store()
    {
        dd(request()->all());
    }

    public function filter()
    {

    }
}
