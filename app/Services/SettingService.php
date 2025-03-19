<?php

namespace App\Services;

use App\Models\Faq;
use App\Models\Setting;
use App\Services\Models\ServiceModel;

class SettingService extends ServiceModel
{

    function modelClass(): Setting
    {
        return new Setting();
    }


}
