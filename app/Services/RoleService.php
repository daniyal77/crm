<?php

namespace App\Services;

use App\Models\Faq;
use App\Models\Setting;
use App\Services\Models\ServiceModel;
use Spatie\Permission\Models\Role;

class RoleService extends ServiceModel
{

    function modelClass(): Role
    {
        return new Role();
    }


}
