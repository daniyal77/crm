<?php

namespace App\Services;

use App\Models\Faq;
use App\Models\User;
use App\Services\Models\ServiceModel;

class UserService extends ServiceModel
{

    function modelClass(): User
    {
        return new User();
    }


}
