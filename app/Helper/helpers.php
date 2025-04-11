<?php

use App\Models\User;
use App\Services\UserService;

if (!function_exists('saveLogInFile')) {
    function saveLogInFile(Exception $e)
    {
        return "Hello, World!";
    }
}

if (!function_exists('userService')) {
    /**
     * @param  $user
     *
     * @return UserService
     */
    function userService($user = false)
    {
        if (!$user)
            $user = auth()->user();
        else
            $user = User::findOrFail($user);

        return (new UserService())->setModel($user);
    }

}

