<?php

namespace App\Services;

use App\Models\Setting;
use App\Services\Models\ServiceModel;

class SettingService extends ServiceModel
{

    function modelClass(): Setting
    {
        return new Setting();
    }

    public function store($all, UserService $userService)
    {
        $setting = [];
        dd($all);
        foreach ($all as $item) {
            $setting = [
                'user_id'   => $userService->getId(),
                'key'       => "",
                'value'     => "",
                'is_global' => true
            ];
        }
        $this->create($setting);
    }


}
