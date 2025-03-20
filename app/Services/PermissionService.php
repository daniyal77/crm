<?php

namespace App\Services;

use App\Services\Models\ServiceModel;
use Spatie\Permission\Models\Permission;

class PermissionService extends ServiceModel
{

    function modelClass(): Permission
    {
        return new Permission();
    }

    public function createpermission(mixed $validated)
    {
    }


}
