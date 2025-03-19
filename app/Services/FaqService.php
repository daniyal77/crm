<?php

namespace App\Services;

use App\Models\Faq;
use App\Services\Models\ServiceModel;

class FaqService extends ServiceModel
{

    function modelClass(): Faq
    {
        return new Faq();
    }


}
