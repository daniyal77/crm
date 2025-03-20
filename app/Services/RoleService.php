<?php

namespace App\Services;

use App\Models\Faq;
use App\Models\Setting;
use App\Services\Models\ServiceModel;

class RoleService extends ServiceModel
{

    function modelClass(): Setting
    {
        return new Setting();
    }

    public function createRole(mixed $validated)
    {
    }


}
